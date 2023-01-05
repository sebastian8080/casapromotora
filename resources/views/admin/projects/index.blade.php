@extends('adminlte::page')

@section('title', 'Casa Credito Promotora')

@section('content_header')
    <style>
        .tr-body:hover{box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;}
    </style>
    <h1>Proyectos</h1>
@stop

@section('content')
    <div>
        <div class="d-flex">
            {!! Form::text('title', null, ['class' => 'form-control w-50 rounded-0', 'placeholder' => 'Buscar por nombre de proyecto']) !!}
            {!! Form::submit('Buscar', ['class' => 'btn btn-danger ml-1 rounded-0']) !!}
            <div class="float-right w-100">
                <a class="float-right btn btn-danger rounded-0" href="{{route('admin.projects.create')}}">Crear Proyecto</a>
            </div>
        </div>
    </div>

    <div class="row mx-2 mt-4">
        <table class="table bg-white rounded-0">
            <thead>
              <tr>
                <th scope="col">Imagen</th>
                <th scope="col">Código</th>
                <th scope="col">Nombre del Proyecto</th>
                <th scope="col">Tipo</th>
                <th scope="col">Dirección</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr class="tr-body">
                    <th><img width="60px" src="{{asset('uploads/projects/300/'.strtok($project->images, '|'))}}" alt=""></th>
                    <th scope="row">{{$project->project_code}}</th>
                    <td>{{$project->project_name}}</td>
                    <td>{{$project->type}}</td>
                    <td>{{$project->state . ", " . $project->city . ", " . $project->address}}</td>
                    <td>
                        <a class="btn btn-sm btn-danger rounded-0 mr-1" href="{{route('admin.projects.edit', $project->category_id)}}">Editar</a>
                        <a class="btn btn-sm btn-danger rounded-0 ml-1" href="{{route('admin.list.property', $project->category_id)}}">Ver propiedades</a>
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