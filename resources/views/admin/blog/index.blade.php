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
            <th scope="col">Título</th>
            <th scope="col">Tiempo Lectura</th>
            <th scope="col">Imagen 1</th>
            <th scope="col">Imagen 2</th>
            <th scope="col">Imagen 3</th>
            <th scope="col">Contenido</th>
            <th scope="col">Descripción</th>
            <th scope="col">Palabras clave</th>
            <th scope="col">Fecha creación</th>
            <th colspan="2"></th>
            
          </tr>
        </thead>
        <tbody>
          @foreach($posts as $post)
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->titulo}}</td>
            <td>{{$post->tiempo_lectura}}</td>
            <td>{{$post->url_img_principal}}</td>
            <td>{{$post->url_img_secundaria}}</td>
            <td>{{$post->url_img_terciaria}}</td>
            <td>{{$post->contenido}}</td>
            <!-- <td>{{$post->slug}}</td> -->
            <td>{{$post->metadescripcion}}</td>
            <td>{{$post->keywords}}</td>
            <td>{{$post->created_at}}</td>
            <td width="10px">
                <a class="btn btn-primary" href="{{route('admin.blog.create')}}">Editar blog</a>
                
            
    
  
            
            </td>
            <td width="10px">
                <button class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
   </div>
@stop

@section('css')
    
@stop

@section('js')
   
@stop