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
                                            {!! Form::checkbox('benefits[]', $benefit->name, in_array($benefit->name,explode(",", $project_category->benefits)) ? true : false, ['class' => 'form-check-input', 'type' => 'checkbox', 'id' => 'flexCheckDefault'.$benefit->id]) !!}
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
                                            {!! Form::checkbox('services[]', $service->name, in_array($service->name, explode(",", $project_category->services)) ? true : false, ['class' => 'form-check-input', 'type' => 'checkbox', 'id' => 'checkService'.$service->id]) !!}
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
                                            {!! Form::checkbox('communal_areas[]', $communal_area->name, in_array($communal_area->name, explode(",", $project_category->communal_areas)) ? true : false, ['class' => 'form-check-input bg-danger', 'type' => 'checkbox', 'id' => 'checkService'.$communal_area->id]) !!}
                                            {!! Form::label('communal_areas', $communal_area->name, ['class' => 'form-check-label', 'for' => 'checkService'.$communal_area->id]) !!}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('images', 'Imagenes', ['class' => 'h5']) !!}
                            {!! Form::file('images[]', ['class' => 'form-control', 'accept' => '.jpg, .jpeg, .png', 'multiple']) !!}
                        </div>
                    </div>
                </div>
                @if(isset($project_category) && $project_category->images != null)
                <div class="row mx-5 my-3" id="gridImages">
                    @php $ii=0; @endphp
                    @foreach (array_filter(explode("|", $project_category->images)) as $img)
                    @php $ii++; @endphp
                    <div class="col-sm-3 position-relative" id="imageUpload{{$ii}}">
                        <img class="img-fluid" src="{{asset('/uploads/projects/300/'.$img)}}" alt="">
                        <button type="button" class="btn btn-sm btn-danger text-white position-absolute rounded-0" style="top: 0; left: 7px" onclick="delImageUpload({{$ii}})">X</button>
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