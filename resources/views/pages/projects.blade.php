@extends('layouts.plantilla')

@section('title', 'Proyectos')

@section('content-head')
    <link rel="stylesheet" href="{{asset('css/projects.css'); }}">
@endsection

@section('content')

    <div class="position-relative">
        <video style="top: 0; left:0; width: 100%; height: 100%; opacity:1; filter: brightness(60%)" muted autoplay loop>
            <source src="video/projects.mp4" type="video/mp4">
        </video>
        <div class="position-absolute top-50 start-50 translate-middle text-white">
            <h1 class="text-center" style="font-size: 5vw;">Propiedades</h1>
            <h4 class="text-center" style="font-size: 2.5vw;">Aqui te mostramos nuestros proyectos <br> más innovadores</h4>
        </div>
    </div>

    
    <div class="container">
        <hr data-aos="fade-up" style="color: rgb(166, 177, 176);  width: 20%; margin-left: 40%" class="mt-5 mb-5">
        <div class="row mt-1 pt-1" data-aos="fade-up">
            <div class="col-sm-6">
                <img class="img-fluid rounded mx-auto d-block" style="width: 100%; height: 100%;" src="img/projects/adra/1.jpg" alt="Proyecto Adra">
            </div>
            <div class="col-sm-6 d-flex align-items-center">
                <div>
                    <h1 class="fw-bold pt-1" style="color: #ffffff; -webkit-text-stroke: 1px rgb(162, 157, 157);">ADRA</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum magni nulla voluptatum quo perspiciatis eligendi aut tempore 
                        soluta voluptatem expedita maiores sed placeat, assumenda molestiae nam, necessitatibus facere harum accusantium?
                    </p>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a class="btn btn-outline-secondary" href="{{ route('projects.viewProject', 'Adra') }}">Ver proyecto</a>
                    </div>
                </div>
            </div>
        </div>

        <hr data-aos="fade-up" style="color: rgb(166, 177, 176); width: 20%; margin-left: 40%" class="mt-5 mb-5">

        <div class="row mb-3" data-aos="fade-up">
            <div class="col-sm-6 mb-3 d-flex align-items-center"> 
                <div class="pb-5 mb-1">
                    <h1 class="fw-bold" style="color: #ffffff; -webkit-text-stroke: 1px rgb(162, 157, 157);">FUTURA NARANCAY</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum magni nulla voluptatum quo perspiciatis eligendi aut tempore 
                        soluta voluptatem expedita maiores sed placeat, assumenda molestiae nam, necessitatibus facere harum accusantium?
                    </p>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a class="btn btn-outline-secondary" href="{{route('projects.viewProject', 'Futura Narancay')}}">Ver proyecto</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-n5 pb-n5" style="">
                <img class="img-fluid rounded mx-auto d-block" style="width: 100%; height: 100%;" src="img/projects/futuranarancay/1.jpeg" alt="Futura Narancay">
            </div>
        </div>

        <hr data-aos="fade-up" style="color: rgb(166, 177, 176);  width: 20%; margin-left: 40%" class="mt-5 mb-5">
        <div class="row mt-1 pt-1" data-aos="fade-up">
            <div class="col-sm-6">
                <img class="img-fluid rounded mx-auto d-block" style="width: 100%; height: 100%;" src="img/projects/toscana/1.jpg" alt="Proyecto Toscana">
            </div>
            <div class="col-sm-6 d-flex align-items-center">
                <div>
                    <h1 class="fw-bold pt-1" style="color: #ffffff; -webkit-text-stroke: 1px rgb(162, 157, 157);">TOSCANA</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum magni nulla voluptatum quo perspiciatis eligendi aut tempore 
                        soluta voluptatem expedita maiores sed placeat, assumenda molestiae nam, necessitatibus facere harum accusantium?
                    </p>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a class="btn btn-outline-secondary" href="{{ route('projects.viewProject', 'Toscana') }}">Ver proyecto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('section-scripts')
    <script src="{{ URL::asset('js/homepage.js') }}"></script>
@endsection