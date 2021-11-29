@extends('adminlte::page')

@section('title', 'Casa Credito Promotora')

@section('content_header')
    <h1>Blog Casa Credito Promotora</h1>
@stop

@section('content')
   <div class="container">
    
    <div class="input-group mb-3">
        <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Buscar un post" aria-label="Recipient's username" aria-describedby="button-addon2">
        </div>
        <div class="col-sm-4">
            <a class="btn btn-info float-right" href="{{route('admin.blog.create')}}">Crear Blog</a>
        </div>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Blog</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Imagen</th>
            <th colspan="2">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td width="10px">
                <button class="btn btn-primary">Editar</button>
            </td>
            <td width="10px">
                <button class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td width="10px">
                <button class="btn btn-primary">Editar</button>
            </td>
            <td width="10px">
                <button class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>Thorton</td>
            <td>@twitter</td>
            <td width="10px">  
                <button class="btn btn-primary">Editar</button>
            </td>
            <td>
                <button class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
   </div>
@stop

@section('css')
    
@stop

@section('js')
   
@stop