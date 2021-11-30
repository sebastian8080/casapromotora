@extends('layouts.plantilla')

@section('title', 'Nuestro Equipo')

@section('content-head')

@endsection

@section('content')

    <div class="position-relative">
        <video style="top: 0; left:0; width: 100%; height: 100%; opacity:1; filter: brightness(60%)" muted autoplay loop>
            <source src="video/Equipo.mp4" type="video/mp4">
        </video>
        <div class="position-absolute top-50 start-50 translate-middle text-white">
            <h1 class="text-center" style="font-size: 4vw;">Te presentamos a nuestro equipo de trabajo</h1>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-sm-6">
                <img class="img-fluid rounded mx-auto d-block" style="filter: brightness(80%)" src="img/team/ISA FINAL-01.jpg" width="70%" alt="Equipo de trabajo - Casa Credito Promotora">
            </div>
            <div class="col-sm-6 d-flex align-items-center mt-2">
                <p class="text-justify h5">
                    <i>
                        "La <b>responsabilidad</b> social empieza en una compañia competitiva y fuerte. Solo una empresa en buen estado puede mejorar y enriquecer
                        las vidas de las personas y sus comunidades"
                    </i> 
                </p>
            </div>
        </div>

        <hr class="mt-5 mb-5">

        <div class="row mb-5 mt-3">
            <div class="col-sm-6  d-flex align-items-center">
                <p class="text-justify h5">
                    <i>
                        "Somos lo que hacemos día a día. De modo que la <b>excelencia </b> no es un acto, sino un hábito"
                    </i>
                </p>
            </div>
            <div class="col-sm-6">
                <img class="img-fluid rounded mx-auto d-block" style="filter: brightness(75%)" src="img/team/DAYANA FINAL-01.jpg" width="70%" alt="Equipo de trabajo - Casa Credito Promotora">
            </div>
        </div>
    </div>
    
@endsection

@section('section-scripts')
    <script src="{{ URL::asset('js/homepage.js') }}"></script>
@endsection