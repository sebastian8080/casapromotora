@extends('adminlte::page')

@section('title', 'CCPromotora - Blog')

@section('content_header')
    <h1>Crear nuevo blog</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.blog.store']) !!}
                @include('admin.blog.partials.form')
            {!! Form::submit('Crear Post', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    
@stop

@section('js')
<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('body');
</script>
@stop