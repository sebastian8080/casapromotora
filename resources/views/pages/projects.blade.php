@extends('layouts.plantilla')

@section('title', 'Proyectos')

@section('content-head')
    <link rel="stylesheet" href="{{asset('css/projects.css'); }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap');
        .inputs{background-color: #d5d5d5}.labels{font-size: 12px; font-weight: 900}
        @media only screen and (max-width: 994px){#tagprojects{font-size: 40px !important; text-align: center;}#titleform{font-size: 40px !important; text-align: center}#title{font-size: 19px !important}}
        .form-control:focus, .form-select:focus, .btnSearch:focus {border-color: #FF0000;box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);}
    </style>
    @livewireStyles
@endsection

@section('content')

    @if(session('status'))
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire(
            'Información enviada con éxito',
            'Un asesor se comunicará con usted lo antes posible',
            'success'
        )
    </script>
    @endif


    <section>
        <div class="d-flex align-items-center justify-content-center w-100" style="margin-top: 130px !important">
            <livewire:show-projects />
        </div>
    </section>

    {{-- <div class="position-relative" style="width: 100%;">
        <video style="top: 0; left:0; width: 100%; opacity:1; filter: brightness(60%)" muted autoplay loop>
            <source src="{{asset('video/projectsnew.mp4')}}" type="video/mp4">
        </video>
        <div class="position-absolute top-50 start-50 translate-middle text-white">
            <h1 id="title" class="text-center" style="font-size: 40px;">Encuentre los mejores proyectos inmobiliarios por estrenar</h1>
        </div>
    </div> --}}

    <div class="container">
        {{-- <div class="row text-center">
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
                    <p class="text-muted"><i>Contamos con proyectos de arquitectos y diseñadores líderes en todo el Ecuador, los cuáles se han convertido en nuevos puntos destacados del creciente horizonte del país</i></p>
                    <button class="btn btn-outline-secondary rounded-0 fw-bold shadow-sm d-none">Ver proyectos</button>
                </div>
            </div>
        </div> --}}

        <div class="row mt-5 py-4" style="background-color: #f1f1f1">
            <div class="col-sm-4 d-flex align-items-center">
                <div id="carouselCountryInfo" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="img-fluid" src="{{asset('img/projects/cuenca_iglesia_cupula.jpg')}}" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Cuenca</h5>
                            <p>Ciudad de Historia y Belleza</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="img-fluid" src="{{asset('img/projects/quito.jpg')}}" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Quito</h5>
                            <p>Cuna de cultura y paisajes</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="img-fluid" src="{{asset('img/projects/guayaquil.jpg')}}" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Guayaquil</h5>
                            <p>Puerto dinámico y encanto costeño</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCountryInfo" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCountryInfo" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col-sm-8">
                <div class="mx-5 mt-3">
                    <p class="h4" style="color: rgb(83, 83, 83) !important"><b style="font-family: 'Raleway', sans-serif;">¿Por qué</b> comprar su casa en</p>
                    <p style="color: transparent; -webkit-text-stroke: 1px rgb(162, 157, 157);font-family: 'Raleway', sans-serif" class="h1"> ECUADOR?</p>
                    <hr class="text-danger w-50">
                    <div>
                        <i class="text-muted" style="font-size: 14px">
                            <p>Ecuador es el destino perfecto para comprar una casa debido a sus lugares llenos de encanto y belleza natural</p>
                            <p>Es un país conocido por su impresionante diversidad geográfica que va desde playas doradas hasta picos nevados. Posee una cultura vibrante y una historia rica, por lo cual es el lugar perfecto para vivir nuevas experiencias y oportunidades emocionantes.</p>
                            <p>Comprar una casa nueva en Ecuador le brinda la oportunidad de vivir en una ubicación que se adapte a sus deseos, ya sea cerca de la playa, en la montaña o en la ciudad.</p>
                            <p style="font-weight: 500">Una casa nueva es una inversión en su futuro y el de su familia</p>
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
                {!! Form::open(['route' => 'sendlead', 'method' => 'POST']) !!}
                @csrf
                <div>
                    <div class="form-group d-flex w-100">
                        <div class="me-1 w-100">
                            {!! Form::label('name', 'NOMBRE', ['class' => 'text-muted labels']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control rounded-0 inputs', 'required']) !!}
                        </div>
                        <div class="ms-1 w-100">
                            {!! Form::label('lastname', 'APELLIDO', ['class' => 'text-muted labels']) !!}
                            {!! Form::text('lastname', null, ['class' => 'form-control rounded-0 inputs', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('email', 'CORREO ELECTRÓNICO', ['class' => 'text-muted labels']) !!}
                        {!! Form::email('email', null, ['class' => 'form-control rounded-0 inputs', 'required']) !!}
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('phone', 'NÚMERO DE TELÉFONO', ['class' => 'text-muted labels']) !!}
                        {!! Form::number('phone', null, ['class' => 'form-control rounded-0 inputs', 'required']) !!}
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('type', '¿EN QUÉ TIPO DE UNIDAD ESTÁ INTERESADO?', ['class' => 'text-muted labels']) !!}
                        <select name="type" id="type" class="form-control rounded-0 inputs" required>
                            <option value="">Seleccione</option>
                            @foreach ($projects as $project)
                                <option value="{{$project->type . " " . $project->project_name}}">{{$project->type . " " . $project->project_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('city', 'CIUDAD DE RESIDENCIA', ['class' => 'text-muted labels']) !!}
                        {!! Form::text('city', null, ['class' => 'form-control rounded-0 inputs', 'required']) !!}
                    </div>
                    <div class="form-group mt-3">
                        {!! Form::label('comment', 'COMENTARIOS', ['class' => 'text-muted labels']) !!}
                        {!! Form::textarea('comment', null, ['class' => 'form-control rounded-0 inputs', 'rows' => 2, 'placeholder' => 'Ej: Me interesa este proyecto y deseo que me contacten', 'required']) !!}
                    </div>
                    <div class="form-group mt-4 text-center">
                        {!! Form::submit('Solicitar información', ['class' => 'btn btn-secondary rounded-0']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
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
    </div>
@endsection

@section('section-scripts')
    @livewireScripts
    <script src="{{ URL::asset('js/navbar-projects.js') }}"></script>
    <script>
        let btnTramite = document.getElementById('btnmoreinformation');

        if(btnTramite){
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
        }
    </script>
@endsection