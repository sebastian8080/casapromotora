@extends('layouts.plantilla')

@section('title', 'Proyectos')

@section('content-head')
    <link rel="stylesheet" href="{{asset('css/projects.css'); }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap');
        .inputs{background-color: #d5d5d5}.labels{font-size: 12px; font-weight: 900}
        @media only screen and (max-width: 994px){#tagprojects{font-size: 40px !important; text-align: center;}#titleform{font-size: 40px !important; text-align: center}#title{font-size: 19px !important}}
    </style>
@endsection

@section('content')

    <div class="position-relative" style="width: 100%;">
        <video style="top: 0; left:0; width: 100%; opacity:1; filter: brightness(60%)" muted autoplay loop>
            <source src="video/projects.mp4" type="video/mp4">
        </video>
        <div class="position-absolute top-50 start-50 translate-middle text-white">
            <h1 id="title" class="text-center" style="font-size: 40px;">Encuentre los mejores proyectos inmobiliarios por estrenar</h1>
        </div>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="mt-4">
                <a id="btnmoreinformation" href="#rowforminformation" class="btn btn-outline-secondary rounded-0 fw-bold shadow-sm" style="font-size: 14px;">MÁS INFORMACIÓN</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-6">
                <p id="tagprojects" style="color: #ffffff; -webkit-text-stroke: 2px rgb(162, 157, 157); font-size: 70px; font-family: 'Raleway', sans-serif">PROYECTOS</p>
            </div>
            <div class="col-sm-6">
                <div class="pt-5 pb-5 text-end" style="padding-left: 15%; padding-right: 15%;background-color: #ebebeb">
                    <p class="text-muted"><i>Contamos con proyectos de arquitectos y diseñadores líderes de Cuenca y de todo el país, los cuáles se han convertido en nuevos puntos destacados del creciente horizonte de la ciudad</i></p>
                    <button class="btn btn-outline-secondary rounded-0 fw-bold shadow-sm d-none">Ver proyectos</button>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-3">
            @foreach ($projects as $project)
                <div class="col-sm-4">
                    <a href="{{route('projects.viewProject', [$project->type, $project->slug])}}">
                        <img class="img-fluid" src="{{asset('uploads/projects/900/'.strtok($project->images, "|"))}}" alt="">
                    </a>
                    <div class="text-center mt-4 mb-4">
                        <h2 style="color: #ffffff; -webkit-text-stroke: 1px rgb(162, 157, 157);font-family: 'Raleway', sans-serif" class="h1">{{strtoupper($project->project_name)}}</h2>
                        <hr style="height: 1px; color: rgb(255, 0, 0)">
                        <p class="h4 fw-bold" style="color: rgb(83, 83, 83) !important">{{strtoupper($project->type)}}</p>
                        <p class="text-danger fw-bold" style="margin-bottom: 5px">UBICACIÓN</p>
                        <i class="fas fa-map-marker-alt text-muted"></i>
                        <p class="text-muted"><i>{{$project->city . ", " . $project->address}}</i></p>
                        <div class="row text-center" style="padding-left: 20%; padding-right: 20%">
                            <div class="col-sm-4 col-4">
                                <img width="40px" src="{{asset('img/projects/ascensor.svg')}}" alt="">
                                <p style="font-size: 12px" class="text-muted">ASCENSOR</p>
                            </div>
                            <div class="col-sm-4 col-4">
                                <img width="40px" src="{{asset('img/projects/planta.svg')}}" alt="">
                                <p style="font-size: 12px" class="text-muted">JARDINES</p>
                            </div>
                            <div class="col-sm-4 col-4">
                                <img width="40px" src="{{asset('img/projects/seguridad.svg')}}" alt="">
                                <p style="font-size: 12px" class="text-muted">SEGURIDAD</p>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('projects.viewProject', [strtolower($project->type), $project->slug]) }}" class="btn btn-outline-danger rounded-0 fw-bold">VER PROYECTO</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mt-5 py-4" style="background-color: #f1f1f1">
            <div class="col-sm-4 d-flex align-items-center">
                <img class="img-fluid" src="{{asset('img/projects/cuenca_iglesia_cupula.jpg')}}" alt="">
            </div>
            <div class="col-sm-8">
                <div class="mx-5 mt-3">
                    <p class="h4" style="color: rgb(83, 83, 83) !important"><b style="font-family: 'Raleway', sans-serif;">¿Por qué</b> comprar su casa en</p>
                    <p style="color: transparent; -webkit-text-stroke: 1px rgb(162, 157, 157);font-family: 'Raleway', sans-serif" class="h1"> CUENCA?</p>
                    <hr class="text-danger w-50">
                    <div>
                        <i class="text-muted" style="font-size: 14px">
                            <p>Es la tercera ciudad más grande de Ecuador, conocida como el principal centro cultural del país, ganándose el calificativo «Atenas del Ecuador». Dotada de paisajes a los alrededores realmente deslumbrantes.</p>
                            <p>Cuenca es sinónimo de arquitectura e historia. El legado español es patente en el centro histórico, con edificaciones de baja y uniforme altura. Por suerte, se ha ido respetando este patrón que le da tanta riqueza e identidad a la ciudad.</p>
                            <p>Muchas empresas e inversores empezaron a apostar su capital en la construcción de vivienda en esta ciudad y a desarrollar muchos otros proyectos de diversa índole como colegios, restaurantes, hospitales y mejores opciones de red, vías y alcantarillado.</p>
                            <p>En caso de que Cuenca sea la ciudad ideal para usted y esté buscando vivienda, lo invitamos a que se ponga en contacto con Casa Crédito y descubra las opciones inmobiliarias.</p>
                        </i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5" id="rowforminformation">
            <div class="col-sm-6">
                <p id="titleform" style="color: transparent; -webkit-text-stroke: 1px rgb(162, 157, 157);font-family: 'Raleway', sans-serif; font-size: 70px">¿Cómo podemos ayudarle?</p>
                <hr class="text-danger w-50">
                <p class="fw-bold"><i>Contáctese con nosotros para más información</i></p>
            </div>
            <div class="col-sm-6 d-flex justify-content-center pt-4 pb-4" style="background-color: #f1f1f1">
                <div>
                    <div class="form-group d-flex w-100">
                        <div class="me-1 w-100">
                            {!! Form::label('name', 'NOMBRE', ['class' => 'text-muted labels']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control rounded-0 inputs']) !!}
                        </div>
                        <div class="ms-1 w-100">
                            {!! Form::label('lastname', 'APELLIDO', ['class' => 'text-muted labels']) !!}
                            {!! Form::text('lastname', null, ['class' => 'form-control rounded-0 inputs']) !!}
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('email', 'CORREO ELECTRÓNICO', ['class' => 'text-muted labels']) !!}
                        {!! Form::email('email', null, ['class' => 'form-control rounded-0 inputs']) !!}
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('phone', 'NÚMERO DE TELÉFONO', ['class' => 'text-muted labels']) !!}
                        {!! Form::number('phone', null, ['class' => 'form-control rounded-0 inputs']) !!}
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('type', '¿EN QUÉ TIPO DE UNIDAD ESTÁ INTERESADO?', ['class' => 'text-muted labels']) !!}
                        {!! Form::select('type', ['' => 'Seleccione', 'ADRA' => 'ADRA', 'FUTURA NARANCAY' => 'FUTURA NARANCAY', 'TOSCANA' => 'TOSCANA'], null, ['class' => 'form-control rounded-0 inputs']) !!}
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('city', 'CIUDAD DE RESIDENCIA', ['class' => 'text-muted labels']) !!}
                        {!! Form::text('city', null, ['class' => 'form-control rounded-0 inputs']) !!}
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('comment', 'COMENTARIOS', ['class' => 'text-muted labels']) !!}
                        {!! Form::textarea('comment', null, ['class' => 'form-control rounded-0 inputs', 'rows' => 2]) !!}
                    </div>
                    <div class="form-group mt-3 text-center">
                        {!! Form::submit('NECESITO MÁS INFORMACIÓN', ['class' => 'btn btn-secondary rounded-0']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/projects/banner-footer-2.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/projects/banner-footer.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
    </div>
    
    <div class="container d-none">
        <hr data-aos="fade-up" style="color: rgb(166, 177, 176);  width: 20%; margin-left: 40%" class="mt-5 mb-5">
        <div class="row mt-1 pt-1" data-aos="fade-up">
            <div class="col-sm-12 col-md-12 col-lg-6 position-relative">
                <img class="img-fluid mx-auto d-block" src="{{ asset('img/projects/adra/1.webp') }}" alt="Proyecto Adra">
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
                        <a class="btn btn-outline-danger" href="{{ route('projects.viewProject', ['condominios', 'adra']) }}">Ver proyecto <i class="fas fa-chevron-right"></i></a>
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
                <img class="img-fluid mx-auto d-block" src="{{ asset('img/projects/futuranarancay/1.webp') }}" alt="Futura Narancay">
                <div class="position-absolute top-0 end-0 border" style="margin-right: 0px; margin-top: 20px; font-size: 15px; background-color: rgb(219, 219, 224); padding-right: 5px; padding-left:10px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                    <i class="fas fa-building" style="margin-right: 5px; color: gray"></i><label style="color: gray; font-size:12px; padding-right: 40px;">EN VENTA</label>
                </div>
            </div>
        </div>

        <hr data-aos="fade-up" style="color: rgb(166, 177, 176);  width: 20%; margin-left: 40%" class="mt-5 mb-5">
        <div class="row mt-1 pt-1 mb-4" data-aos="fade-up">
            <div class="col-sm-12 col-md-12 col-lg-6 position-relative">
                <img class="img-fluid mx-auto d-block" src="{{ asset('img/projects/toscana/1.webp') }}" alt="Proyecto Toscana">
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
        {{-- @if(isset($listingsprojects))
        @php $count=0; @endphp
            @foreach ($listingsprojects as $listingproject)
            @php $count++; @endphp
                <hr data-aos="fade-up" style="color: rgb(166, 177, 176);  width: 20%; margin-left: 40%" class="mt-5 mb-5">
                <div class="row mt-1 pt-1 mb-4" data-aos="fade-up">
                    @if(($count%2)==0)
                    <div class="col-sm-12 col-md-12 col-lg-6 position-relative">
                        <img class="img-fluid rounded mx-auto d-block img-project" src="https://casacredito.com/uploads/listing/600/{{strtok($listingproject->images, '|')}}" alt="{{$listingproject->listing_title}}-img">
                        <div class="position-absolute top-0 end-0 border" style="margin-right: 0px; margin-top: 20px; font-size: 15px; background-color: rgb(219, 219, 224); padding-right: 5px; padding-left:10px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                            <i class="fas fa-building" style="margin-right: 5px; color: gray"></i><label style="color: gray; font-size:12px; padding-right: 40px;">{{strtoupper($listingproject->listingtypestatus)}}</label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 d-flex align-items-center justify-content-center">
                        <div style="background-color: rgb(249, 249, 249); padding: 25px; width: 100%">
                            <h2 class="fw-bold pt-1" style="color: #ffffff; -webkit-text-stroke: 0.5px rgb(162, 157, 157);">{{$listingproject->listing_title}} - {{$listingproject->product_code}}</h2>
                            <h3 style="font-weight: bold">{{strtoupper($listingproject->listingtype)}}</h3>
                            <i class="fas fa-map-marker-alt mx-1" style="color: red"></i><b>@if(str_contains($listingproject->address, ",")) {{$listingproject->address}} @else {{$listingproject->state.", ".$listingproject->city.", ".$listingproject->address}} @endif</b>
                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <div class="d-flex">
                                        <i class="fas fa-expand-arrows-alt" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                        <p>Área total: {{$listingproject->land_area}} m<sup>2</sup></p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-ruler-vertical" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                        <p style="margin-left: 6px">Área interior: {{$listingproject->construction_area}} m<sup>2</sup></p>
                                    </div>
                                    @if(isset($listingproject->garage) && $listingproject->garage > 0)
                                    <div class="d-flex">
                                        <i class="fas fa-car" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                        <p>Parqueaderos: {{$listingproject->garage}}</p>
                                    </div>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    @if(isset($listingproject->bedroom) && $listingproject->bedroom > 0)
                                    <div class="d-flex">
                                        <i class="fas fa-bed" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                        <p>{{$listingproject->bedroom}} dormitorio(s)</p>
                                    </div>
                                    @endif
                                    @if(isset($listingproject->bathroom) && $listingproject->bathroom >0)
                                    <div class="d-flex">
                                        <i class="fas fa-tree" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                        <p>{{$listingproject->bathroom}} baños</p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-outline-danger" href="{{ route('web.project.show', $listingproject->slug) }}">Ver proyecto <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-sm-12 col-md-12 col-lg-6 d-flex align-items-center justify-content-center">
                        <div style="background-color: rgb(249, 249, 249); padding: 25px; width: 100%">
                            <h2 class="fw-bold pt-1" style="color: #ffffff; -webkit-text-stroke: 0.5px rgb(162, 157, 157);">{{$listingproject->listing_title}} - {{$listingproject->product_code}}</h2>
                            <h3 style="font-weight: bold">{{strtoupper($listingproject->listingtype)}}</h3>
                            <i class="fas fa-map-marker-alt mx-1" style="color: red"></i><b>@if(str_contains($listingproject->address, ",")) {{$listingproject->address}} @else {{$listingproject->state.", ".$listingproject->city.", ".$listingproject->address}} @endif</b>
                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <div class="d-flex">
                                        <i class="fas fa-expand-arrows-alt" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                        <p>Área total: {{$listingproject->land_area}} m<sup>2</sup></p>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-ruler-vertical" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                        <p style="margin-left: 6px">Área interior: {{$listingproject->construction_area}} m<sup>2</sup></p>
                                    </div>
                                    @if(isset($listingproject->garage) && $listingproject->garage > 0)
                                    <div class="d-flex">
                                        <i class="fas fa-car" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                        <p>Parqueaderos: {{$listingproject->garage}}</p>
                                    </div>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    @if(isset($listingproject->bedroom) && $listingproject->bedroom > 0)
                                    <div class="d-flex">
                                        <i class="fas fa-bed" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                        <p>{{$listingproject->bedroom}} dormitorio(s)</p>
                                    </div>
                                    @endif
                                    @if(isset($listingproject->bathroom) && $listingproject->bathroom >0)
                                    <div class="d-flex">
                                        <i class="fas fa-tree" style="margin-top: 3px; margin-right: 4px; color: gray"></i>
                                        <p>{{$listingproject->bathroom}} baños</p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-outline-danger" href="{{ route('web.project.show', $listingproject->slug) }}">Ver proyecto <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 position-relative float-right">
                        <img class="img-fluid rounded mx-auto d-block img-project" src="https://casacredito.com/uploads/listing/600/{{strtok($listingproject->images, '|')}}" alt="{{$listingproject->listing_title}}-img">
                        <div class="position-absolute top-0 end-0 border" style="margin-right: 0px; margin-top: 20px; font-size: 15px; background-color: rgb(219, 219, 224); padding-right: 5px; padding-left:10px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                            <i class="fas fa-building" style="margin-right: 5px; color: gray"></i><label style="color: gray; font-size:12px; padding-right: 40px;">{{strtoupper($listingproject->listingtypestatus)}}</label>
                        </div>
                    </div>
                    @endif
                </div>
            @endforeach
        @endif --}}
    </div>
@endsection

@section('section-scripts')
    <script src="{{ URL::asset('js/homepage.js') }}"></script>
    <script>
        let btnTramite = document.getElementById('btnmoreinformation');
        btnTramite.addEventListener('click', clickHandler);

        function clickHandler(e) {
            e.preventDefault();
            const href = this.getAttribute("href");
            const offsetTop = document.querySelector(href).offsetTop;
            scroll({
                top: offsetTop - 60,
                behavior: "smooth"
            });
        }
    </script>
@endsection