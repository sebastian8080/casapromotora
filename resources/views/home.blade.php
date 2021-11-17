@extends('adminlte::page')

@section('title', 'Casa Credito Promotora')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Panel Administrador</p>
    <p>Aqui va todo el contenido</p>
@stop

@section('css')
    
@stop

@section('js')
    <script>console.log('Hi!');</script>
@stop
{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Inicio de sesion correcto') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
