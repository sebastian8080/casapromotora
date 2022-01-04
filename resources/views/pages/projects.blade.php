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
            <div class="col-sm-12 col-md-12 col-lg-6 position-relative">
                <img class="img-fluid rounded mx-auto d-block img-project" src="{{ asset('img/projects/adra/1.webp') }}" alt="Proyecto Adra">
                <div class="position-absolute top-0 end-0 border" style="margin-right: 0px; margin-top: 20px; font-size: 15px; background-color: rgb(219, 219, 224); padding-right: 5px; padding-left:10px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                    <i class="fas fa-building" style="margin-right: 5px; color:gray"></i><label style="color: gray; font-size:12px; padding-right: 40px;">EN VENTA</label>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex align-items-center justify-content-center">
                <div style="background-color: rgb(249, 249, 249); padding: 20px; width: 100%;">
                    <h1 class="fw-bold pt-1" style="color: #ffffff; -webkit-text-stroke: 1px rgb(162, 157, 157);">ADRA</h1>
                    <h3 style="font-weight: bold;">DEPARTAMENTOS</h3>
                    <i class="fas fa-map-marker-alt mx-1" style="color: red"></i><b>Cuenca - Sector Edificio Vista Linda</b>
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-expand-arrows-alt" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p>Área total: 97,45 a 226,17 m<sup>2</sup></p>
                            </div>
                            <div class="d-flex">
                                <i class="fas fa-ruler-vertical" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p style="margin-left: 6px"> Área interior: 70,13 a 143,42 m<sup>2</sup></p>
                            </div>
                            <div class="d-flex">
                                <i class="fas fa-car" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p>Parqueaderos: 1 a 2 </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-bed" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p>1 a 3 dormitorios</p>
                            </div>
                            <div class="d-flex">
                                <i class="fas fa-tree" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p>Áreas Verdes</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="btn btn-outline-danger" href="{{ route('projects.viewProject', 'Adra') }}">Ver proyecto <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <hr data-aos="fade-up" style="color: rgb(166, 177, 176); width: 20%; margin-left: 40%" class="mt-5 mb-5">

        <div class="row mb-3" data-aos="fade-up">
            <div id="row-col6-futnar" class="col-sm-12 col-md-12 col-lg-6 mb-3 mt-4"> 
                <div class="pb-5 mb-1" style="background-color: rgb(249, 249, 249); padding: 25px; width: 100%;">
                    <h1 class="fw-bold" style="color: #ffffff; -webkit-text-stroke: 1px rgb(162, 157, 157);">FUTURA NARANCAY</h1>
                    <h3 style="font-weight: bold">DEPARTAMENTOS</h3>
                    <i class="fas fa-map-marker-alt mx-1" style="color: red"></i><b>Cuenca - Narancay</b>
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-expand-arrows-alt" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p>Área total: 81,72 a 221,8 m<sup>2</sup></p>
                            </div>
                            <div class="d-flex">
                                <i class="fas fa-ruler-vertical" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p style="margin-left: 6px">Área interior: 54,77 a 101,31 m<sup>2</sup></p>
                            </div>
                            <div class="d-flex">
                                <i class="fas fa-car" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p>Parqueaderos: 1</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-bed" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p>1 a 3 dormitorios</p>
                            </div>
                            <div class="d-flex">
                                <i class="fas fa-tree" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p>Áreas Verdes</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="btn btn-outline-danger" href="{{route('projects.viewProject', 'Futura Narancay')}}">Ver proyecto <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 mb-n5 pb-n5 position-relative">
                <img class="img-fluid rounded mx-auto d-block img-project" src="{{ asset('img/projects/futuranarancay/1.webp') }}" alt="Futura Narancay">
                <div class="position-absolute top-0 end-0 border" style="margin-right: 0px; margin-top: 20px; font-size: 15px; background-color: rgb(219, 219, 224); padding-right: 5px; padding-left:10px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                    <i class="fas fa-building" style="margin-right: 5px; color: gray"></i><label style="color: gray; font-size:12px; padding-right: 40px;">EN VENTA</label>
                </div>
            </div>
        </div>

        <hr data-aos="fade-up" style="color: rgb(166, 177, 176);  width: 20%; margin-left: 40%" class="mt-5 mb-5">
        <div class="row mt-1 pt-1 mb-4" data-aos="fade-up">
            <div class="col-sm-12 col-md-12 col-lg-6 position-relative">
                <img class="img-fluid rounded mx-auto d-block img-project" src="{{ asset('img/projects/toscana/1.webp') }}" alt="Proyecto Toscana">
                <div class="position-absolute top-0 end-0 border" style="margin-right: 0px; margin-top: 20px; font-size: 15px; background-color: rgb(219, 219, 224); padding-right: 5px; padding-left:10px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                    <i class="fas fa-building" style="margin-right: 5px; color: gray"></i><label style="color: gray; font-size:12px; padding-right: 40px;">EN VENTA</label>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex align-items-center justify-content-center">
                <div style="background-color: rgb(249, 249, 249); padding: 25px; width: 100%">
                    <h1 class="fw-bold pt-1" style="color: #ffffff; -webkit-text-stroke: 1px rgb(162, 157, 157);">TOSCANA</h1>
                    <h3 style="font-weight: bold">CONDOMINIOS</h3>
                    <i class="fas fa-map-marker-alt mx-1" style="color: red"></i><b>Cuenca - Challuabamba</b>
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-expand-arrows-alt" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p>Área total: 153,27 a 164,57 m<sup>2</sup></p>
                            </div>
                            <div class="d-flex">
                                <i class="fas fa-ruler-vertical" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p style="margin-left: 6px">Área interior: 77,37 a 83,09 m<sup>2</sup></p>
                            </div>
                            <div class="d-flex">
                                <i class="fas fa-car" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p>Parqueaderos: 1</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-bed" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p>1 a 3 dormitorios</p>
                            </div>
                            <div class="d-flex">
                                <i class="fas fa-tree" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                <p>Áreas Verdes</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="btn btn-outline-danger" href="{{ route('projects.viewProject', 'Toscana') }}">Ver proyecto <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('section-scripts')
    <script src="{{ URL::asset('js/homepage.js') }}"></script>
@endsection