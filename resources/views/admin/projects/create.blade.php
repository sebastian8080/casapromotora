@extends('adminlte::page')

@section('title', 'Admin Promotora - Crear Proyecto')

@section('content_header')
    <style>
        .form-control:focus {border-color: #FF0000;box-shadow: inset 0 0.5px 0.5px rgba(0, 0, 0, 0.075), 0 0 4px rgba(255, 0, 0, 0.6);}
        input[type=checkbox]{accent-color: #DC3545; width: 18px; height: 18px}
        .tags{top: -16px; left: 10px;}
    </style>
    
    @if(session('status'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            {!! session('status') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

@endsection

@section('content')
    <div class="container pb-5">
        <div>
            <div class="float-left">
                <a href="{{route('admin.projects.index')}}"><i class="fas fa-angle-left"></i> Volver al listado</a>
            </div>
            <div class="float-right">
                @if(isset($project_category->category_id))
                <a class="btn btn-danger rounded-0" href="{{route('admin.list.property', $project_category->category_id)}}">Propiedades <span class="badge bg-white">{{$total_properties}}</span></a>
                <a class="btn btn-danger rounded-0 text-white" href="{{route('admin.create.property', $project_category->category_id)}}">Crear Propiedad en este Proyecto</a>
                @endif
            </div>
        </div>
        <br><br>
        <div>
            @if (isset($project_category->category_id))
                {!! Form::model($project_category, ['route' => ['admin.projects.update', $project_category->category_id], 'method' => 'PUT', 'class' => 'w-100', 'enctype' => 'multipart/form-data']) !!}
            @else
                {!! Form::open(['route' => 'admin.projects.store', 'method' => 'POST', 'class' => 'w-100', 'enctype' => 'multipart/form-data']) !!}
            @endif
            @csrf
            <div class="shadow-sm">
                <input type="hidden" id="cityaux" value="@if(isset($project_category->category_id)){{$project_category->city}}@endif" disabled>
                <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="staticBackdropLabel">@if(isset($project_category->category_id)) Editar @else Nueva @endif Categoria de Proyecto</h5>
                {!! Form::select('status', [0 => 'DESACTIVADO', 1 => 'ACTIVADO'], null, ['class' => 'form-control w-25']) !!}
                </div>
                <div class="modal-body bg-white">
                    <div>
                        <div class="form-group d-flex">
                            <div class="w-100 mr-1">
                                {!! Form::label('project_name', 'Nombre del Proyecto', ['class' => 'h5 fw-normal']) !!}
                                {!! Form::text('project_name', null, ['class' => 'form-control rounded-0', 'required']) !!}
                            </div>
                            <div class="w-100 ml-1">
                                {!! Form::label('type', 'Tipo', ['class' => 'h5']) !!}
                                {!! Form::select('type', [null => "Seleccione", "Condominios" => "Condominios", "Departamentos" => "Departamentos"], null, ['class' => 'form-control rounded-0']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4">
                                    {!! Form::label('state', 'Provincia', ['class' => 'h5']) !!}
                                    <select name="state" id="state" class="form-control rounded-0">
                                        <option value="">Seleccione</option>
                                        @foreach ($states as $state)
                                            <option value="{{$state->name}}" data-id="{{$state->id}}" @if(isset($project_category) && $project_category->state == $state->name) selected @endif>{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    {!! Form::label('city', 'Ciudad', ['class' => 'h5']) !!}
                                    <select name="city" id="city" class="form-control rounded-0">
                                        <option value="">Seleccione</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    {!! Form::label('address', 'Dirección', ['class' => 'h5']) !!}
                                    {!! Form::text('address', null, ['class' => 'form-control rounded-0']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Descripcion', ['class' => 'h5']) !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control rounded-0', 'rows' => 3]) !!}
                        </div>
                        <div class="form-group border p-4 position-relative mt-4">
                            {!! Form::label('benefits', 'Beneficios', ['class' => 'h5 position-absolute bg-danger text-white border px-2 py-1 rounded-pill tags']) !!}
                            <div class="row">
                                @foreach($benefits as $benefit)
                                    <div class="col-sm-3 mb-2 mt-2">
                                        <div class="form-check">
                                            {!! Form::checkbox('benefits[]', $benefit->name, isset($project_category->category_id) && in_array($benefit->name,explode(",", $project_category->benefits)) ? true : false, ['class' => 'form-check-input', 'type' => 'checkbox', 'id' => 'flexCheckDefault'.$benefit->id]) !!}
                                            {!! Form::label('benefits', $benefit->name, ['class' => 'form-check-label', 'for' => 'flexCheckDefault'.$benefit->id]) !!}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group border p-4 position-relative mt-4">
                            {!! Form::label('services', 'Servicios', ['class' => 'h5 position-absolute bg-danger text-white border px-2 py-1 rounded-pill tags']) !!}
                            <div class="row">
                                @foreach ($services as $service)
                                    <div class="col-sm-3 mb-2 mt-2">
                                        <div class="form-check">
                                            {!! Form::checkbox('services[]', $service->name, isset($project_category->category_id) && in_array($service->name, explode(",", $project_category->services)) ? true : false, ['class' => 'form-check-input', 'type' => 'checkbox', 'id' => 'checkService'.$service->id]) !!}
                                            {!! Form::label('services', $service->name, ['class' => 'form-check-label', 'for' => 'checkService'.$service->id]) !!}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group border p-4 position-relative mt-4">
                            {!! Form::label('communal_areas', 'Áreas Comunales', ['class' => 'h5 position-absolute bg-danger text-white border px-2 py-1 rounded-pill tags']) !!}
                            <div class="row">
                                @foreach ($communal_areas as $communal_area)
                                    <div class="col-sm-3 mb-2 mt-2">
                                        <div class="form-check">
                                            {!! Form::checkbox('communal_areas[]', $communal_area->name, isset($project_category->category_id) && in_array($communal_area->name, explode(",", $project_category->communal_areas)) ? true : false, ['class' => 'form-check-input bg-danger', 'type' => 'checkbox', 'id' => 'checkService'.$communal_area->id]) !!}
                                            {!! Form::label('communal_areas', $communal_area->name, ['class' => 'form-check-label', 'for' => 'checkService'.$communal_area->id]) !!}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            {!! Form::label('images', 'Imagenes', ['class' => 'h5']) !!}
                            {!! Form::file('images[]', ['class' => 'form-control', 'accept' => '.jpg, .jpeg, .png', 'multiple']) !!}
                        </div>
                        <!-- variables new design -->
                        <section>
                            <div class="row">
                                <div class="col-sm-6 mb-4">
                                    @if(isset($project_category) && $project_category->img_header != null)
                                    <div>
                                        <img class="img-fluid" src="{{ asset('/uploads/projects/300/'.$project_category->img_header) }}" alt="">
                                    </div>
                                    @endif
                                    {!! Form::label('img_header', 'Imagen Principal', ['class' => 'h5']) !!}
                                    {!! Form::file('img_header', ['class' => 'form-control']) !!}
                                </div>
                                <div class="col-sm-6 mb-4">
                                    @if(isset($project_category) && $project_category->img_top != null)
                                    <div>
                                        <img class="img-fluid" src="{{ asset('/uploads/projects/300/'.$project_category->img_top) }}" alt="">
                                    </div>
                                    @endif
                                    {!! Form::label('img_top', 'Imagen de Cabecera', ['class' => 'h5']) !!}
                                    {!! Form::file('img_top', ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-4">
                                    {!! Form::label('txt_description', 'Descripción Corta', ['class' => 'h5']) !!}
                                    {!! Form::text('txt_description', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="col-sm-6 mb-4">
                                    {!! Form::label('txt_inside_img', 'Texto Encima de Imagen', ['class' => 'h5']) !!}
                                    {!! Form::text('txt_inside_img', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mb-4">
                                    {!! Form::label('slogan', 'Slogan', ['class' => 'h5']) !!}
                                    {!! Form::textarea('slogan', null, ['class' => 'form-control', 'rows' => '3']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 mb-4">
                                    {!! Form::label('url_maps', 'Enlace Dirección en Google Maps', ['class' => 'h5']) !!}
                                    {!! Form::text('url_maps', null, ['class' => 'form-control rounded-0']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mb-4">
                                    {!! Form::label('entrance', 'Entrada', ['class' => 'h5']) !!}
                                    {!! Form::number('entrance', null, ['class' => 'form-control rounded-0']) !!}
                                </div>
                                <div class="col-sm-4 mb-4">
                                    {!! Form::label('dues', 'Cuotas', ['class' => 'h5']) !!}
                                    {!! Form::number('dues', null, ['class' => 'form-control rounded-0']) !!}
                                </div>
                                <div class="col-sm-4 mb-4">
                                    {!! Form::label('bank_credit', 'Crédito Bancario', ['class' => 'h5']) !!}
                                    {!! Form::number('bank_credit', null, ['class' => 'form-control rounded-0']) !!}
                                </div>
                            </div>
                        </section>
                        <!-- end new design-->
                    </div>
                </div>


                @if(isset($project_category) && $project_category->images != null)
                <div class="row mx-5 my-3" id="gridImages">
                    @php $ii=0; @endphp
                    @foreach (array_filter(explode("|", $project_category->images)) as $img)
                    @php $ii++; @endphp
                    <div class="col-sm-3 position-relative mb-3" id="imageUpload{{$ii}}">
                        <img class="img-fluid border rounded" src="{{asset('/uploads/projects/300/'.$img)}}" alt="">
                        <button type="button" class="btn btn-sm btn-danger text-white position-absolute rounded" style="top: 0; left: 8px; font-weight: bold" onclick="delImageUpload({{$ii}})">X</button>
                        <input type="hidden" value="{{$img}}" name="updatedImages[]">
                    </div>    
                    @endforeach
                </div>
                @else
                <div class="row py-3 align-items-center justify-content-center text-center">
                    <div class="px-4 pt-3">
                        <p>No encontramos imágenes para este proyecto</p>
                    </div>
                </div>
                @endif
                <div class="modal-footer bg-white justify-content-center">
                @if(isset($project_category->category_id))
                    {!! Form::submit('Actualizar Proyecto', ['class' => 'btn btn-danger rounded-0']) !!}
                @else
                    {!! Form::submit('Crear Proyecto', ['class' => 'btn btn-danger rounded-0']) !!}
                @endif
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('js')
<script src="{{asset('js/sortable.min.js')}}"></script>
<script>
    const selState = document.getElementById('state');
    const selCity = document.getElementById('city');

    async function getcities() {
    selCity.options.length = 0;
    let id = selState.options[selState.selectedIndex].dataset.id;
    const response = await fetch("{{url('getcities')}}/"+id );
    const cities = await response.json();
    
    var opt = document.createElement('option');
          opt.appendChild( document.createTextNode('Seleccione') );
          opt.value = '';
          selCity.appendChild(opt);
    cities.forEach(city => {
          var opt = document.createElement('option');
          opt.appendChild( document.createTextNode(city.name) );
          opt.value = city.name;
          if(document.getElementById('cityaux').value === city.name) opt.selected = true;
          selCity.appendChild(opt);
        });
    }

    selState.addEventListener("change", getcities);
    window.addEventListener("load", getcities);

    //eliminando imagen
    const delImageUpload = (idDiv) =>{
        document.getElementById('imageUpload'+idDiv).remove();
    }

    const gridImages = document.getElementById('gridImages');
    if(gridImages){
        new Sortable(gridImages, {swapThreshold:1, animation:150});
    }
  </script>
@endsection