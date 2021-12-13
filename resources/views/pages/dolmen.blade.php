@extends('layouts.plantilla')

@section('title', 'Dolmen')

@section('content-head')
    <style>
        .header{
           background-image: url("{{ asset('img/partners/BANNER-PAGINA-DOLMEN.jpg') }}");
           width: 100%;
           height: 50vw;
           background-size: cover;
           background-repeat: no-repeat;
            background-attachment: fixed;
        }

        #texto{
            color: #ffffff00;
            -webkit-text-stroke: 2px rgb(255, 255, 255);
            font-size: 6vw;
        }

        .img-final{
            background-image: url("{{ asset('img/partners/FOTO-FINAL.jpg') }}");
            width: 100%;
            height: 25vw;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
@endsection

@section('content')
    <div class="header">
        <div class="row">
            <div style="margin-left: 20%; margin-top: 13%">
                <h1 class="text-white" style="font-size: 4vw">CONSTRUÍMOS</h1>
                <h1 id="texto">CON CALIDAD</h1>
                <a style="text-decoration: none; color: rgb(207, 176, 111); font-size: 3vw" href="{{route('socios.dolmen.catalogo')}}">Ver catálogo de productos <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center mt-5 fw-bold" style="color: rgb(166, 124, 82)">CATEGORÍA DE PRODUCTOS</h2>
        <div class="row mx-5">
            @foreach ($categorias as $categoria)
            <div class="col-sm-2 text-center">
                <a href="{{ route('socios.dolmen.categoria', $categoria->codigo_categoria ) }}"><img class="img-fluid" src="../img/partners/{{$categoria->url_image}}" alt=""></a>
                <p style="color: rgb(128, 128, 128)">{{ $categoria->nombre_categoria}}</p>
            </div>
            @endforeach
        </div>
    </div>

    <h2 class="text-center mt-5 fw-bold" style="color: rgb(166, 124, 82)">Características únicas para construcciones <br> más seguras</h2>
    <div style="background-color: #e2e0e0">
        <div class="row text-center mt-5 pt-5" style="margin-left: 20%; margin-right: 20%">
            <div class="col-sm-4">
                <img style="width: 30%" class="img-fluid" src="{{ asset('img/partners/ICONOS-08.png') }}" alt="">
                <h6>SISMORRESISTENTES</h6>
            </div>
            <div class="col-sm-4">
                <img style="width: 30%" class="img-fluid" src="{{ asset('img/partners/ICONOS-07.png') }}" alt="">
                <h6>ACÚSTICOS</h6>
            </div>
            <div class="col-sm-4">
                <img style="width: 30%" class="img-fluid" src="{{ asset('img/partners/ICONOS-06.png') }}" alt="">
                <h6>ECOLÓGICOS</h6>
            </div>
        </div>
        <div class="row text-center mt-5 pb-5" style="margin-left: 20%; margin-right: 20%">
            <div class="col-sm-4">
                <img style="width: 30%" class="img-fluid" src="{{ asset('img/partners/ICONOS-11.png') }}" alt="">
                <h6>TÉRMICOS</h6>
            </div>
            <div class="col-sm-4">
                <img style="width: 30%" class="img-fluid" src="{{ asset('img/partners/ICONOS-10.png') }}" alt="">
                <h6>NO INFLAMABLES</h6>
            </div>
            <div class="col-sm-4">
                <img style="width: 30%" class="img-fluid" src="{{ asset('img/partners/ICONOS-09.png') }}" alt="">
                <h6>IMPERMEABLES</h6>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 mt-5 px-5">
                <h3 class="fw-bold" style="color: rgb(166, 124, 82)">¡OFRECEMOS PRODUCTOS RESISTENTES Y ECOAMIGABLES!</h3>
                <p style="font-size: 18px; color: rgb(128, 128, 128)" class="text-justify">Los productos proporcionan construccinoes más seguras, sustentables y sostenibles en el tiempo, brindando para las familias y el medio ambienre</p>
            </div>
            <div class="col-sm-6">
                <img class="img-fluid" src="{{ asset('img/partners/IMAGEN-DERECHA.jpg') }}" alt="">
            </div>
        </div>

        <div class="row mt-4 pt-4">
            <h2 style="color: rgb(166, 124, 82)" class="text-center fw-bold">PROYECTOS REALIZADOS</h2>
            <div class="row mt-4">
                <div class="col-sm 3">
                    <img class="img-fluid" src="{{ asset('img/partners/DOLMEN_PROYECTOS_BALDOSA-GRES1.png') }}" alt="">
                </div>
                <div class="col-sm 3">
                    <img class="img-fluid" src="{{ asset('img/partners/grid2.jpg') }}" alt="">
                </div>
                <div class="col-sm 3">
                    <img class="img-fluid" src="{{ asset('img/partners/grid3.jpg') }}" alt="">
                </div>
                <div class="col-sm 3">
                    <img class="img-fluid" src="{{ asset('img/partners/grid4.jpg') }}" alt="">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm 3">
                    <img class="img-fluid" src="{{ asset('img/partners/grid5.png') }}" alt="">
                </div>
                <div class="col-sm 3">
                    <img class="img-fluid" src="{{ asset('img/partners/grid6.jpg') }}" alt="">
                </div>
                <div class="col-sm 3">
                    <img class="img-fluid" src="{{ asset('img/partners/grid7.jpg') }}" alt="">
                </div>
                <div class="col-sm 3">
                    <img class="img-fluid" src="{{ asset('img/partners/grid8.jpg') }}" alt="">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm 3">
                    <img class="img-fluid" src="{{ asset('img/partners/grid9.png') }}" alt="">
                </div>
                <div class="col-sm 3">
                    <img class="img-fluid" src="{{ asset('img/partners/grid10.jpg') }}" alt="">
                </div>
                <div class="col-sm 3">
                    <img class="img-fluid" src="{{ asset('img/partners/grid11.jpg') }}" alt="">
                </div>
                <div class="col-sm 3">
                    <img class="img-fluid" src="{{ asset('img/partners/grid12.jpg') }}" alt="">
                </div>
            </div>
        </div>

        <div class="mt-5">
            <p style="font-size: 20px; color: rgb(128, 128, 128)" class="text-center">Somos distribuidores autorizados de la marca <img class="img-fluid" width="20%" src="{{ asset('img/partners/logo-dolmen.png') }}" alt=""> en Ecuador</p>
        </div>
    </div>

    <div class="row img-final mt-5 mb-5">

    </div>
@endsection

@section('section-scripts')
    <script src="{{ asset('js/homepage.js') }}"></script>
@endsection