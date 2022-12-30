@extends('adminlte::page')

@section('title', 'Admin Promotora - Listado de Proyecto')

@section('content_head')
    <style>
        .tr-body:hover{box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;}
    </style>
    <h1>Listado de Propiedades que pertenecen al Proyecto</h1>
@endsection

@section('content')
    <div class="container pt-4">
        <div class="mb-4">
            <h3>Listado de Propiedades</h3>
            <p class="h5">
                Esta visualizando las propiedades que contiene el proyecto <b class="text-danger">{{$project_category->project_name}} </b> con código <b class="text-danger"> {{$project_category->project_code}}</b>
            </p>
        </div>
        <table class="table bg-white py-5">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Titulo</th>
                <th scope="col">Precio</th>
                <th scope="col">Fecha</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($properties_project as $property)
                    <tr class="tr-body">
                        <th scope="row">{{$property->property_code}}</th>
                        <td>{{$property->title}}</td>
                        <td>${{number_format($property->price)}}</td>
                        <td>{{substr($property->created_at, 0, 10)}}</td>
                        <td>
                            <a href="{{route('admin.edit.property', $property->property_id)}}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection