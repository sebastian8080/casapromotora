@extends('adminlte::page')

@section('title', 'Casa Credito Promotora')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row mb-5">
        <div class="col-sm-8">
            <input class="form-control" type="text" placeholder="Ingrese el nombre o correo de un usuario">
        </div>
        <div class="col-sm-4">
            <a class="btn btn-primary float-right" href="{{ route('register') }}">Registrar nuevo usuario</a>
        </div> 
    </div>
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Fecha Creacion</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{!! $user->id !!}</th>
                    <td>{!! $user->name !!}</td>
                    <td>{!! $user->email !!}</td>
                    <td>{!! $user->created_at !!}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                    </td>
                </tr>   
                @endforeach
            </tbody>
          </table>
          {!! $users->links() !!}
    </div>
@stop

@section('css')
    
@stop

@section('js')
    <script>console.log('Hi!');</script>
@stop