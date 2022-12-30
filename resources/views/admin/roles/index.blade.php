@extends('adminlte::page')

@section('title', 'CCPromotora - Roles')

@section('content_header')
    <style>
        .tr-body:hover{box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;}
    </style>
    <a class="btn btn-danger float-right rounded-0" href="{{ route('admin.roles.create') }}">Nuevo Rol</a>
    <h1>Roles</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
        {{session('info')}}    
        </div>    
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Rol</th>
                        <th>Fecha creación</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                        <tr class="tr-body">
                            <td>{{ $rol->name }}</td>
                            <td>{{ $rol->created_at }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.roles.edit', $rol) }}" class="btn btn-sm btn-danger rounded-0">Editar</a>
                            </td>
                            {{-- <td width="10px">
                                <form action="{{ route('admin.roles.destroy', $rol) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    
@stop

@section('js')
    
@stop