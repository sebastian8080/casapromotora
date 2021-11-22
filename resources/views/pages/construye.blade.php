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
    </style>
@endsection


@section('content')
    
<div class="container">
    <h1 class="mt-5 pt-4 texto-imagenes">Diseños</h1>

    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="input-group mb-1">
                <input type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                <img class="card-img-top" src="https://www.construyehogar.com/wp-content/uploads/2016/02/Fachada-de-casa-un-piso-moderna-peque%C3%B1a-560x352.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title text-muted">Titulo del diseño</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-outline-secondary">Ver diseño</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                <img class="card-img-top" src="https://decoraideas.com/wp-content/uploads/2019/08/04-4-768x536.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title text-muted">Titulo del diseño</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-outline-secondary">Ver diseño</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                <img class="card-img-top" src="https://www.construyehogar.com/wp-content/uploads/2016/01/Casa-moderna-un-piso-560x371.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title text-muted">Titulo del diseño</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-outline-secondary">Ver diseño</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                <img class="card-img-top" src="https://www.domotizar.com/wp-content/uploads/2019/07/Dise%C3%B1o-casas-modernas_1-696x464.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title text-muted">Titulo del diseño</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-outline-secondary">Ver diseño</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                <img class="card-img-top" src="https://i2.wp.com/meramattress.com/wp-content/uploads/2019/09/Maravilloso-Modelo-De-Fachada-Casa-Rustica-Modelos-Casas.jpg?fit=1024%2C682&ssl=1" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title text-muted">Titulo del diseño</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-outline-secondary">Ver diseño</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                <img class="card-img-top" src="https://tikinti.org/wp-content/uploads/2021/04/casas-de-campo-techo-inclinado-10.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title text-muted">Titulo del diseño</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-outline-secondary">Ver diseño</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                <img class="card-img-top" src="https://www.construyehogar.com/wp-content/uploads/2014/08/Dise%C3%B1o-de-casa-moderna-de-una-planta.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title text-muted">Titulo del diseño</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-outline-secondary">Ver diseño</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-2" style="width:100%" data-aos="zoom-in">
                <img class="card-img-top" src="https://comoorganizarlacasa.com/wp-content/uploads/2018/02/modelos-de-casas-de-dos-pisos-para-construir-1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title text-muted">Titulo del diseño</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-outline-secondary">Ver diseño</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection


@section('section-scripts')
    <script src="{{ asset('js/partners.js') }}"></script>
@endsection