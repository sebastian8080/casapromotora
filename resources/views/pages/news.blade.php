@extends('layouts.plantilla')

@section('title', 'Noticias')

@section('content-head')
    <link rel="stylesheet" href="{{URL::asset('css/secondary-pages.css'); }}">
@endsection

@section('content')
    <div class="mt-5 pt-5">
        <h1>News Page</h1>
    </div>
@endsection