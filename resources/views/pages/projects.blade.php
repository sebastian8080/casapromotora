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
            <h1 class="text-center" style="font-size: 5vw;">Proyectos</h1>
            <h4 class="text-center" style="font-size: 2.5vw;">Aqui te mostramos nuestros proyectos <br> más innovadores</h4>
        </div>
    </div>

    
    <div class="container">
        <hr data-aos="fade-up" style="color: rgb(166, 177, 176);  width: 20%; margin-left: 40%" class="mt-3 mb-3">
        <div class="row mt-1 pt-1" data-aos="fade-up">
            <div class="col-sm-6" style="margin-bottom: -19%">
                <img class="img-fluid rounded mx-auto d-block" style="width: 90%; height: 70%;" src="https://i.pinimg.com/736x/89/67/f3/8967f3e1c1750f741836c456030ce6ca.jpg" alt="">
            </div>
            <div class="col-sm-6 d-flex align-items-center">
                <div>
                    <h1 class="fw-bold pt-1" style="color: #ffffff; -webkit-text-stroke: 1px rgb(162, 157, 157);">Proyecto Uno</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum magni nulla voluptatum quo perspiciatis eligendi aut tempore 
                        soluta voluptatem expedita maiores sed placeat, assumenda molestiae nam, necessitatibus facere harum accusantium?
                    </p>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a class="btn btn-outline-secondary" href="{{ route('projects.project1') }}">Ver proyecto</a>
                    </div>
                </div>
            </div>
        </div>

        <hr data-aos="fade-up" style="color: rgb(166, 177, 176); width: 20%; margin-left: 40%" class="mb-3">
        <div class="row" data-aos="fade-up">
            <div class="col-sm-6 mb-3 d-flex align-items-center"> 
                <div>
                    <h1 class="fw-bold" style="color: #ffffff; -webkit-text-stroke: 1px rgb(162, 157, 157);">Proyecto Dos</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum magni nulla voluptatum quo perspiciatis eligendi aut tempore 
                        soluta voluptatem expedita maiores sed placeat, assumenda molestiae nam, necessitatibus facere harum accusantium?
                    </p>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a class="btn btn-outline-secondary" href="{{ route('projects.project1') }}">Ver proyecto</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-bottom: -19%">
                <img class="img-fluid rounded mx-auto d-block" style="width: 90%; height: 70%;" src="https://i.pinimg.com/736x/89/67/f3/8967f3e1c1750f741836c456030ce6ca.jpg" alt="">
            </div>
        </div>
    </div>
@endsection

@section('section-scripts')
    <script src="{{ URL::asset('js/homepage.js') }}"></script>
@endsection