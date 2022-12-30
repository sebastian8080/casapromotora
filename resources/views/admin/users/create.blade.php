@extends('adminlte::page')

@section('title', 'Admin Promotora - Crear Usuario')

@section('content')

<div class="container">
    <h1 class="pt-4">Crear Usuario</h1>
    <div class="row pt-5 d-inline">
        <div class="col-sm-8 col-12">
            {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'bg-white shadow-sm p-4']) !!}
            @csrf
            <div>
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control rounded-0', 'required']) !!}
            </div>
            <div class="mt-3">
                {!! Form::label('email', 'Correo Electronico') !!}
                {!! Form::email('email', null, ['class' => 'form-control rounded-0', 'required']) !!}
                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mt-3">
                {!! Form::label('password', 'Contraseña') !!}
                {!! Form::text('password', null, ['class' => 'form-control rounded-0', 'required']) !!}
            </div>
            <div class="mt-3">
                {!! Form::label('image', 'Imagen de perfil') !!}
                {!! Form::file('image', ['class' => 'form-control rounded-0']) !!}
            </div>
            <div class="mt-4">
                {!! Form::submit('Crear Usuario', ['class' => 'btn btn-danger rounded-0']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
    
@endsection