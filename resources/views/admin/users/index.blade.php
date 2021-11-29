@extends('adminlte::page')

@section('title', 'Casa Credito Promotora')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif

    <div class="row mb-5">
        <div class="col-sm-8">
            <input class="form-control" type="text" placeholder="Ingrese el nombre o correo de un usuario">
        </div>
        <div class="col-sm-4">
            <a class="btn btn-info float-right" href="{{ route('register') }}">Registrar nuevo usuario</a>
        </div> 
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Fecha Creacion</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td width="10px">
                            <a class="btn btn-sm btn-primary" href="{{route('admin.users.edit', $user)}}">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links()}}
        </div>
    </div>
@stop

@section('css')
    
@stop

@section('js')
    
@stop