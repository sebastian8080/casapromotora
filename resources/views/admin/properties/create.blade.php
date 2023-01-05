@extends('adminlte::page')

@section('title', 'Admin Promotora - Crear Propiedad')

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

    <div class="text-center">
        @if(isset($property->property_id))
        <h1>Editando Propiedad <b class="text-danger">{{$property->property_code}}</b></h1>
        @else
        <h1>Creando Nueva Propiedad en el Proyecto</h1>
        @endif
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="mt-5 mb-5">
            <iframe 
            width="800"
            height="450"
            allowfullscreen
            frameborder="0"
            src="//storage.googleapis.com/vrview/index.html?image=//casacreditopromotora.com/img/PANO_20230104_185536_0.jpg&is_stereo=true"
            frameborder="0">
          </iframe>
        </div>
        @if(isset($property->property_id))
        {!! Form::model($property, ['route' => ['admin.update.property', $property->property_id], 'method' => 'PUT']) !!}
        @else
        {!! Form::open(['route' => 'admin.store.property', 'method' => 'POST']) !!}
        @endif
        @csrf
        <div class="row border shadow-sm p-3 rounded-0 bg-white">
            <div class="form-group w-100">
                {!! Form::label('category', 'Categoría en donde se encuentra la propiedad') !!}
                <div class="d-flex">
                    <select name="category_id" id="category" class="form-control w-50 mr-1 rounded-0">
                        <option value="">Seleccione</option>
                        @foreach ($categories as $category)
                            <option class="option-hover" value="{{$category->category_id}}" @if((isset($property->property_id) && $property->category_id == $category->category_id) || (isset($category_id) && $category->category_id == $category_id)) selected @endif>{{$category->project_name}}</option>
                        @endforeach
                    </select>
                    <a class="btn btn-danger rounded-0 float-end" href="{{route('admin.projects.create')}}">Crear Nuevo Proyecto</a>
                </div>
            </div>
            @if(isset($project_category))
                <div class="row w-100">
                    <div class="col-sm-4">
                        <label class="text-danger"><i class="fas fa-key"></i> Código de Proyecto</label>
                        <p class="font-weight-bold">{{$project_category->project_code}}</p>
                    </div>
                    <div class="col-sm-4">
                        <label class="text-danger"><i class="fas fa-tag"></i> Tipo de Proyecto</label>
                        <p class="font-weight-bold">{{$project_category->type}}</p>
                    </div>
                    <div class="col-sm-4">
                        <label class="text-danger"><i class="fas fa-thumbtack"></i> Dirección</label>
                        <p class="font-weight-bold">{{$project_category->state.", ".$project_category->city.", ".$project_category->address }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-danger"><i class="fas fa-file-alt"></i> Descripción</label>
                        <p class="font-weight-bold">{{$project_category->description}}</p>
                    </div>
                </div>
            @endif
        </div>
        <div class="row mt-3 rounded-0 shadow-sm border p-3 bg-white">
            <div>
                <p class="h5 font-weight-bold">Detalle de la Propiedad</p>
            </div>
            <div class="form-group w-100">
                <i class="fas fa-quote-right"></i> {!! Form::label('title', 'Titulo de la Propiedad', ['class' => 'font-weight-normal']) !!}
                {!! Form::text('title', null, ['class' => 'form-control rounded-0']) !!}
            </div>
            <div class="row w-100">
                <div class="col-sm-4">
                    <i class="fas fa-expand-arrows-alt"></i> {!! Form::label('total_area', 'Area Total', ['class' => 'font-weight-normal']) !!}
                    {!! Form::number('total_area', null, ['class' => 'form-control rounded-0']) !!}
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-compress-arrows-alt"></i> {!! Form::label('indoor_area', 'Area Interior', ['class' => 'font-weight-normal']) !!}
                    {!! Form::number('indoor_area', null, ['class' => 'form-control rounded-0']) !!}
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-money-check-alt"></i> {!! Form::label('price', 'Precio', ['class' => 'font-weight-normal']) !!}
                    {!! Form::number('price', null, ['class' => 'form-control rounded-0']) !!}
                </div>
            </div>
            <div class="row w-100 mt-3">
                <div class="col-sm-4">
                    <i class="fas fa-bed"></i> {!! Form::label('bedrooms', 'Habitaciones', ['class' => 'font-weight-normal']) !!}
                    {!! Form::number('bedrooms', null, ['class' => 'form-control rounded-0']) !!}
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-bath"></i> {!! Form::label('bathrooms', 'Baños', ['class' => 'font-weight-normal']) !!}
                    {!! Form::number('bathrooms', null, ['class' => 'form-control rounded-0']) !!}
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-parking"></i> {!! Form::label('garage', 'Parqueaderos', ['class' => 'font-weight-normal']) !!}
                    {!! Form::number('garage', null, ['class' => 'form-control rounded-0']) !!}
                </div>
            </div>
            <div class="row mt-4 w-100 justify-content-center">
                {!! Form::submit('Guardar Propiedad', ['class' => 'btn btn-danger rounded-0']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection

@section('js')

@endsection