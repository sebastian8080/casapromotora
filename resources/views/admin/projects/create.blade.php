@extends('adminlte::page')

@section('title', 'Admin Promotora - Crear Proyecto')

@section('content_header')
    <style>
        .form-control:focus {border-color: #FF0000;box-shadow: inset 0 0.5px 0.5px rgba(0, 0, 0, 0.075), 0 0 4px rgba(255, 0, 0, 0.6);}
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
                                {!! Form::label('project_name', 'Nombre del Proyecto') !!}
                                {!! Form::text('project_name', null, ['class' => 'form-control rounded-0', 'required']) !!}
                            </div>
                            <div class="w-100 ml-1">
                                {!! Form::label('type', 'Tipo') !!}
                                {!! Form::select('type', [null => "Seleccione", "Condominios" => "Condominios", "Departamentos" => "Departamentos"], null, ['class' => 'form-control rounded-0']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4">
                                    {!! Form::label('state', 'Provincia') !!}
                                    <select name="state" id="state" class="form-control rounded-0">
                                        <option value="">Seleccione</option>
                                        @foreach ($states as $state)
                                            <option value="{{$state->name}}" data-id="{{$state->id}}" @if(isset($project_category) && $project_category->state == $state->name) selected @endif>{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    {!! Form::label('city', 'Ciudad') !!}
                                    <select name="city" id="city" class="form-control rounded-0">
                                        <option value="">Seleccione</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    {!! Form::label('address', 'Dirección') !!}
                                    {!! Form::text('address', null, ['class' => 'form-control rounded-0']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Descripcion') !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control rounded-0', 'rows' => 3]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('images', 'Imagenes') !!}
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