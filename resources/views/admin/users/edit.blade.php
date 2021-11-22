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


    <div>
        <h2>Asignar roles</h2>
        <p class="h5">Nombre</p>
        <p class="form-control">{!! $user->name !!}</p>
    

        <h2 class="h5">Listado de roles</h2>
        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
            @foreach ($roles as $rol)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $rol->id, null, ['class'=> 'mr-1']) !!}
                        {{ $rol->name }}
                    </label>
                </div>
            @endforeach

            {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
    </div>
@stop

@section('css')
    
@stop

@section('js')
    
@stop