@extends('layouts.plantilla')

@section('title', 'Proyectos')

@section('content-head')
    <link rel="stylesheet" href="{{asset('css/projects.css'); }}">
@endsection

@section('content')

    <div class="position-relative" style="width: 100%;">
        <video style="top: 0; left:0; width: 100%; opacity:1; filter: brightness(60%)" muted autoplay loop>
            <source src="video/projects.mp4" type="video/mp4">
        </video>
        <div class="position-absolute top-50 start-50 translate-middle text-white">
            <h1 class="text-center" style="font-size: 5vw;">Proyectos</h1>
            <h4 class="text-center" style="font-size: 2.5vw;">Aqui te mostramos nuestros proyectos <br> más innovadores</h4>
        </div>
    </div>

    
    <div class="container">
        <hr data-aos="fade-up" style="color: rgb(166, 177, 176);  width: 20%; margin-left: 40%" class="mt-5 mb-5">
        <div class="row mt-1 pt-1" data-aos="fade-up">
            <div class="col-sm-6 position-relative">
                <img class="img-fluid rounded mx-auto d-block" style="width: 100%; height: 100%;" src="img/projects/adra/1.jpg" alt="Proyecto Adra">
                <div class="position-absolute top-0 start-0">
                    <img class="rounded" style="width: 45%; margin-left: 10px;" src="img/projects/adra/LOGO1 20.jpg" alt="Logo Proyecto Adra">
                </div>
            </div>
            <div class="col-sm-6 d-flex align-items-center">
                <div>
                    <h1 class="fw-bold pt-1" style="color: #ffffff; -webkit-text-stroke: 1px rgb(162, 157, 157);"> ADRA</h1>
                    <i class="fas fa-map-marker-alt mx-1" style="color: gray"></i><b>Cuenca - Sector Edificio Vista Linda</b>
                    <div class="row mt-4">
                        <div class="col-sm-4 d-flex">
                            <i class="fas fa-expand-arrows-alt" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                            <p>97 a 226 M2</p>
                        </div>
                        <div class="col-sm-4 d-flex">
                            <i class="fas fa-bed" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                            <p>1 a 3 dormitorios</p>
                        </div>
                        <div class="col-sm-4 d-flex">
                            <i class="fas fa-tree" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                            <p>Áreas Verdes</p>
                        </div>
                    </div>
                    <p class="mt-1">
                        Departamentos de lujo listos para entregar en una vista insuperable
                    </p>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a class="btn btn-outline-secondary" href="{{ route('projects.viewProject', 'Adra') }}">Ver proyecto</a>
                    </div>
                </div>
            </div>
        </div>

        <hr data-aos="fade-up" style="color: rgb(166, 177, 176); width: 20%; margin-left: 40%" class="mt-5 mb-5">

        <div class="row mb-3" data-aos="fade-up">
            <div class="col-sm-6 mb-3 d-flex align-items-center mt-5"> 
                <div class="pb-5 mb-1">
                    <h1 class="fw-bold" style="color: #ffffff; -webkit-text-stroke: 1px rgb(162, 157, 157);">FUTURA NARANCAY</h1>
                    <i class="fas fa-map-marker-alt mx-1" style="color: gray"></i><b>Cuenca - Narancay</b>
                    <div class="row mt-4">
                        <div class="col-sm-4 d-flex">
                            <i class="fas fa-expand-arrows-alt" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                            <p>84 a 247 M2</p>
                        </div>
                        <div class="col-sm-4 d-flex">
                            <i class="fas fa-bed" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                            <p>1 a 3 dormitorios</p>
                        </div>
                        <div class="col-sm-4 d-flex">
                            <i class="fas fa-tree" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                            <p>Áreas Verdes</p>
                        </div>
                    </div>
                    <p class="mt-1">
                        Departamentos con una experiencia única en diseño y comodidad
                    </p>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a class="btn btn-outline-secondary" href="{{route('projects.viewProject', 'Futura Narancay')}}">Ver proyecto</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-n5 pb-n5">
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
                    <i class="fas fa-map-marker-alt mx-1" style="color: gray"></i><b>Cuenca - Challuabamba</b>
                    <div class="row mt-4">
                        <div class="col-sm-4 d-flex">
                            <i class="fas fa-expand-arrows-alt" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                            <p>160 a 182 M2</p>
                        </div>
                        <div class="col-sm-4 d-flex">
                            <i class="fas fa-bed" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                            <p>1 a 3 dormitorios</p>
                        </div>
                        <div class="col-sm-4 d-flex">
                            <i class="fas fa-tree" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                            <p>Áreas Verdes</p>
                        </div>
                    </div>
                    <p>
                        La mejor experiencia en condominios con acabados modernos
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