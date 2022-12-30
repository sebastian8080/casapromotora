@extends('adminlte::page')

@section('title', 'Casa Credito Promotora')

@section('content_header')

@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif


    <div class="container pb-3 pt-3">
        <h2 class="py-3">Editar Perfil de {{$user->name}}</h2>
        <div class="border rounded-0 px-4 pb-4 pt-2 bg-white shadow-sm">
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
    
            <div class="row">
                <div class="col-sm-6">
                    <div class="mt-3">
                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control rounded-0']) !!}
                    </div>
        
                    <div class="mt-3">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control rounded-0']) !!}
                    </div>
        
                    <div class="mt-3">
                        {!! Form::label('password', 'Contraseña') !!}
                        {!! Form::password('password', ['class' => 'form-control rounded-0']) !!}    
                    </div>
                </div>
                <div class="col-sm-6 text-center mt-2">
                    @if (isset($user->image))
                        <img width="200px" height="200px" src="{{asset('uploads/profiles/'.$user->image)}}" alt="">
                    @else
                        <div>Usuario sin imagen de perfil</div>
                    @endif
                    <div class="d-flex justify-content-center mt-3">
                        {!! Form::file('image', ['class' => 'form-control w-50']) !!}
                    </div>
                </div>
            </div>
            <div class="border rounded-0 p-3 mt-4">
                <h2 class="h5">Listado de roles</h2>
                @foreach ($roles as $rol)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $rol->id, null, ['class'=> 'mr-1']) !!}
                            {{ $rol->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            <div class="mt-3 text-center">
                {!! Form::submit('Guardar', ['class' => 'btn btn-danger mt-2 rounded-0']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    
@stop

@section('js')
    
@stop