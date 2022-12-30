@extends('adminlte::page')

@section('title', 'Casa Credito Promotora')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')

    @if (session('info'))<div class="alert alert-success">{{ session('info') }}</div>@endif
    @if(session('usercreated')) <div class="alert alert-success">{{session('usercreated')}}</div>@endif

    <div class="row mb-5">
        <div class="col-sm-8">
            <form action="{{route('admin.users.index')}}" method="GET">
                <div class="d-flex">
                    <input class="form-control mr-1 rounded-0 shadow-sm" name="q" type="text" placeholder="Ingrese el nombre de un usuario">
                    <button class="btn btn-danger rounded-0 shadow-sm" type="submit">Buscar</button>
                </div>
            </form>
        </div>
        <div class="col-sm-4">
            <a class="btn btn-danger float-right rounded-0 shadow-sm" href="{{ route('admin.users.create') }}">Registrar nuevo usuario</a>
        </div> 
    </div>

    <div class="card rounded-0">
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
                            <a class="btn btn-sm btn-danger rounded-0" href="{{route('admin.users.edit', $user)}}">Editar</a>
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