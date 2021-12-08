@extends('layouts.plantilla')

@section('content-head')
    <style>
        .card img{
            filter: grayscale(1);
        }

        .card img:hover {
            filter: grayscale(0);
        }

        .card-img-top{
            width: 75%;
            height: 40vh;
            object-fit: cover;
        }

        .header{
           background-image: url("{{ asset('img/partners/BANNER-CONSTRUYE.jpg') }}");
           width: 100%;
           height: 30vw;
           background-size: cover;
           margin-top: 70px;
        }

        #texto{
            color: #ffffff;
            -webkit-text-stroke: 1px rgb(207, 176, 111);
            font-size: 5vw;
        }

        .img-final{
            background-image: url("{{ asset('img/partners/ladrillos.jpg') }}");
            width: 100%;
            height: 20vw;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
@endsection


@section('content')

    <div class="header position-relative">
        <div class="row" style="width: 100%; height: 50vw">
            <div class="col-sm-6 col-12"></div>
            <div class="col-sm-6 col-12 mt-5 position-absolute top-0 end-0">
                <div style="margin-left: 18%">
                    <h2 class="fw-bold" style="font-size: 3vw; color: rgb(207, 176, 111)">CASA CREDITO</h2>
                    <h1 id="texto">CONSTRUYE</h1>
                    <p style="color: rgb(166, 124, 82)"><img style="width: 35px; margin-left: 10px;" class="img-fluid" src="{{ asset("img/partners/ICONOS BANNER-26.png")}}" alt="">Experiencia en proyectos</p>
                    <p style="color: rgb(166, 124, 82)"><img style="width: 35px; margin-left: 10px;" class="img-fluid" src="{{ asset("img/partners/ICONOS BANNER-27.png")}}" alt="">Asesoria para creditos</p>
                    <p style="color: rgb(166, 124, 82)"><img style="width: 35px; margin-left: 10px;" class="img-fluid" src="{{ asset("img/partners/ICONOS BANNER-28.png")}}" alt="">Diseños acorde a sus necesidades</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <div class="row2 mt-5 pt-5 float-end" style="color: rgb(128, 128, 128)">
                    <p style="font-size: 25px"><b>¿Tienes un terreno y necesitas construir tu vivienda? <br>¡Nosotros la construimos por ti!</b></p>
                    <p style="font-size: 18px">No sencargamos de todo el proceso de planificación y edificación de tu casa, departamento o villa</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img class="pt-5" style="width: 100%" src="{{ asset('img/partners/CASCO.jpg') }}" alt="">
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>

    <div class="row position-relative">
        <div class="">
            <img class="img-fluid" src="{{ asset('img/partners/CONSTRUYE.jpg') }}" alt="">
            <div class="position-absolute top-0 start-50 translate-middle-x" style="margin-top: 5%">
                <h2 class="text-center" style="color: rgb(128, 128, 128)">PROCESO DE CONSTRUCCIÓN</h2>
                <div class="row mt-5 text-center">
                    <div class="col-sm-4">
                        <img src="{{ asset('img/partners/ICONOS CONSTRUYE-16.png') }}" alt="">
                        <h2 class="fw-bold mt-4" style="color: rgb(207, 176, 111)">01</h2>
                        <p style="color: rgb(166, 124, 82)">PROYECTO & PLANIFICACION</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('img/partners/ICONOS CONSTRUYE-17.png') }}" alt="">
                        <h2 class="fw-bold mt-4" style="color: rgb(207, 176, 111)">02</h2>
                        <p style="color: rgb(166, 124, 82)">DISEÑO Y ESTRUCTURA</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('img/partners/ICONOS CONSTRUYE-18.png') }}" alt="">
                        <h2 class="fw-bold mt-4" style="color: rgb(207, 176, 111)">03</h2>
                        <p style="color: rgb(166, 124, 82)">IMPLEMENTACION Y DESARROLLO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center" style="background-color: rgb(128, 128, 128);">
        <div class="col-sm-2"></div>
        <div class="col-sm-5 mt-5 mb-4" style="color: #ffffff">
            <h3>¿TE GUSTARIA EMPEZAR UN PROYECTO CON NOSOTROS?</h3>
            <p class="mt-3">COTIZA TU CABAÑA AHORA MISMO COMPLETAMENTE GRATIS</p>
        </div>
        <div class="col-sm-3 d-flex align-items-center justify-content-center">
            <div>
                <button style="color: rgb(207, 176, 111)" class="btn text-white rounded-pill">CONTÁCTANOS</button>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="container mt-5">
    
        <h2 class="text-center" style="color: rgb(128, 128, 128)">Elije el modelo que se ajusta <br> a tu estilo y necesidad</h2>
        <hr style="width: 50%; margin-left: 25%">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                    <img class="card-img-top" src="{{ asset('img/partners/RIPOS DE CASAS-20.png') }}" alt="Card image" style="width:100%">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                    <img class="card-img-top" src="{{ asset('img/partners/RIPOS DE CASAS-21.png') }}" alt="Card image" style="width:100%">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                    <img class="card-img-top" src="{{ asset('img/partners/RIPOS DE CASAS-22.png') }}" alt="Card image" style="width:100%">
                </div>
            </div>
        </div>
    
        <div class="row mt-2">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                    <img class="card-img-top" src="{{ asset('img/partners/RIPOS DE CASAS-24.png') }}" alt="Card image" style="width:100%">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                    <img class="card-img-top" src="{{ asset('img/partners/RIPOS DE CASAS-23.png') }}" alt="Card image" style="width:100%">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                    <img class="card-img-top" src="{{ asset('img/partners/RIPOS DE CASAS-19.png') }}" alt="Card image" style="width:100%">
                </div>
            </div>
        </div>

        <h2 class="text-center mt-5" style="color: rgb(128, 128, 128)">Además ofrecemos servicios <br> adicionales</h2>
        <hr style="width: 50%; margin-left: 25%">

        <div class="row mt-5 d-flex align-items-center text-center">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <img style="width: 15%" src="{{ asset('img/partners/ICONS-30.png') }}" alt="">
                <p style="color: rgb(166, 124, 82); font-size: 20px">APROBACIÓN DE PLANOS</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <img style="width: 15%" src="{{ asset('img/partners/ICONS-31.png') }}" alt="">
                <p style="color: rgb(166, 124, 82); font-size: 20px">LÍNEA DE FÁBRICA</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <img style="width: 15%" src="{{ asset('img/partners/ICONS-36.png') }}" alt="">
                <p style="color: rgb(166, 124, 82); font-size: 20px">PERMISO DE CONSTRUCCIÓN</p>
            </div>
        </div>
    
        <div class="row mt-2 d-flex align-items-center text-center">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <img style="width: 15%" src="{{ asset('img/partners/ICONS-33.png') }}" alt="">
                <p style="color: rgb(166, 124, 82); font-size: 20px">LOTIZACIÓN</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <img style="width: 15%" src="{{ asset('img/partners/ICONS-35.png') }}" alt="">
                <p style="color: rgb(166, 124, 82); font-size: 20px">PROPIEDAD HORIZONTAL</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <img style="width: 15%" src="{{ asset('img/partners/ICONS-37.png') }}" alt="">
                <p style="color: rgb(166, 124, 82); font-size: 20px">APROBACIÓN DE PLANOS</p>
            </div>
        </div>
    </div>

    <div class="row mt-5 img-final align-items-center">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-5 text-center text-white">
                <h2 class="fw-bold" style="font-size: 40px">¡Trabajamos con materiales <br> de calidad!</h2>
                <p style="font-size: 20px">Garantizamos la durabilidad de construcciones</p>
            </div>
            <div class="col-sm-3 d-flex align-items-center justify-content-center">
                <a style="background-color: rgb(207, 176, 111); color: #ffffff" class="btn rounded-pill" href="#">VER MATERIALES</a>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>


@endsection


@section('section-scripts')
    <script src="{{ asset('js/partners.js') }}"></script>
@endsection