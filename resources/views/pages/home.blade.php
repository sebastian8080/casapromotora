@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content-head')
    <style>
      
    </style>
@endsection
    
@section('content')
    
  <div class="position-relative">
    <div class="div-carousel">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div id="carousel-indicators" class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="filter: brightness(60%)" src="img/home/img1-home.jpg" class="d-block w-100" alt="img1">
          </div>
          <div class="carousel-item">
            <img style="filter: brightness(60%)" src="img/home/img2-home.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img style="filter: brightness(60%)" src="img/home/img3-home.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div id="links" class="row position-absolute top-50 start-50 translate-middle pt-4" style="z-index: 1;">
      <div class="col-sm-3">
        <h4 style="font-size: 2.5vw"><a href="#" class="text-white link" style="text-decoration: none; margin-left: -30%">QUITO</a></h4>
      </div>
      <div class="col-sm-3">
        <h4 style="font-size: 2.5vw"><a href="#" class="text-white link" style="text-decoration: none; margin-left: -25%">GUAYAQUIL</a> </h4>
      </div>
      <div class="col-sm-3">
        <h4 style="font-size: 2.5vw"><a href="#" class="text-white link" style="text-decoration: none; margin-left: 25%">CUENCA</a></h4>
      </div>
      <div class="col-sm-3">
        <h4 style="font-size: 2.5vw"><a href="#" class="text-white link" style="text-decoration: none; margin-left: 45%">MANTA</a></h4>
      </div>
    </div>
  </div>

    <div class="row mt-3" data-aos="slide-up">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 second-row rounded">
        <p class="text-justify m-5">
          <b>CASA CREDITO</b> es una empresa Promotora de Proyectos Inmobiliarios en Ecuador. Desarrollamos Soluciones Inmobiliarias Integrales en Vivienda,
          Comercio, Oficinas, Servicios y Hospitalidad, que se diferencian por la calidad e innovación percibida por el cliente, convirtiendo lo excepcional en un estilo de vida.
        </p>
        <hr id="linea_pequeña" class="position-absolute bottom-0 start-50 translate-middle-x">
      </div>
      <div class="col-sm-3"></div>
    </div>

      <div data-aos="fade-up-left" class="row">
        <div class="col-sm-6"> 
          <div class="mt-5 pt-5" style="margin-left: 5%">
            <h2 class="fw-bold">Proyectos en Venta</h2>
            <p>Conoce cada uno de los proyectos que tenemos y conoce la nueva experiencia en proyectos inmobiliarios</p>
            <br>
            <a class="link-row3" style="text-decoration: none" href="{{ route('pages.projects') }}">Ver todos los proyectos ></a>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="carrusel m-4">
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                {{-- @forelse ($projects as $project) --}}
                          {{-- @if ($loop->index==0)  @endif--}}
                <div class="carousel-item active">
                  <img src="{{ asset('img/projects/adra/1.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                  <div class="carousel-caption d-md-block">
                    <a style="text-decoration: none" href="{{ route('projects.viewProject', 'Adra') }}"><h3 class="texto-imagenes">ADRA</h3></a>
                    <p>Departamentos de lujo con una vista insuperable</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img style="width: 100%" src="{{ asset('img/projects/futuranarancay/1.jpeg') }}" class="d-block w-100 img-fluid" alt="...">
                  <div class="carousel-caption d-md-block">
                    <a style="text-decoration: none" href="{{ route('projects.viewProject', 'Futura Narancay') }}"><h3 class="texto-imagenes">FUTURA NARANCAY</h3></a>
                    <p>Departamentos con una  experiencia única en diseñoy comodidad</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('img/projects/toscana/1.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                  <div class="carousel-caption d-md-block">
                    <a style="text-decoration: none" href="{{ route('projects.viewProject', 'Toscana') }}"><h3 class="texto-imagenes">TOSCANA</h3></a>
                    <p>Condominios con acabados modernos</p>
                  </div>
                </div>
                {{-- @empty
                @endforelse --}}
              </div>
              <button id="btn-left-home-carousel" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div data-aos="fade-down" class="row">
        <div class="col-sm-4 hover-zoomin">
          <h1 class="fw-bold texto-imagenes">VILLAS</h1>
          <a href="#">
            <img class="fila-imagenes" src="https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/270955089.jpg?k=0ff923c4d7ef12ce13b44cc582d44ac8ac4d424ef6871d492e96301d5b27211b&o=" alt="">
          </a>
        </div>

        <div class="col-sm-4 hover-zoomin">
          <h1 class="fw-bold texto-imagenes">DEPARTAMENTOS</h1>
          <a href="#">
            <img class="fila-imagenes" src="https://media-cdn.tripadvisor.com/media/vr-splice-j/0a/9a/35/22.jpg" alt="">
          </a>
        </div>

        <div class="col-sm-4 hover-zoomin">
          <h1 class="fw-bold texto-imagenes">SUITES</h1>
          <a href="#">
            <img class="fila-imagenes" src="https://images.adsttc.com/media/images/5a8e/392f/f197/cc42/b800/05bc/large_jpg/Maleku_3.jpg?1519270174" alt="">
          </a>
        </div>
      </div>

      <div data-aos="fade-left" class="text-center">
        <div class="position-relative">
          <h1 class="position-relative pb-4">
            Financiamiento
          </h1>
          <hr id="linea_pequeña" class="position-absolute bottom-0 start-50 translate-middle-x mt-5">
        </div>
        <p>Gozamos de excelente relación con todos los principales instituciones financieras del país, tanto privados como pública</p>
        <p>Asesoramos y facilitamos el proceso de precalificación, aprobación y tramitación de créditos.</p>
        <div class="row mt-5 mb-5">
          <div class="col-sm-3">
            <i class="fas fa-database fa-3x" style="color: rgb(223, 16, 16);"></i>
            <h3>Facilidad</h3>
            <p>Inicia tu opción de compra con el 5%</p>
          </div>
          <div class="col-sm-3">
            <i class="fas fa-money-bill-wave fa-3x" style="color: rgb(223, 16, 16);"></i>
            <h3>Planes de pago</h3>
            <p>Planes de pago de mutuo acuerdo. Flexibilidad en plazos, cuotas y montos para entrada</p>
          </div>
          <div class="col-sm-3">
            <i class="fas fa-signal fa-3x" style="color: rgb(223, 16, 16);"></i>
            <h3>Inversión inteligente</h3>
            <p>Tu inversión esta respaldada con fideicomiso constituido</p>
          </div>
          <div class="col-sm-3">
            <i class="far fa-check-circle fa-3x" style="color: rgb(223, 16, 16);"></i>
            <h3>Garantía Casa</h3>
            <p>Crédito 20 años de respaldo</p>
          </div>
        </div>
      </div>

      <div data-aos="fade-up-right" class="row position-relative">
          <img src="img/home/FAMILIA-CREDITOS - copia.jpg" class="img-fluid" alt="Imagen de una familia">
          <div id="row6" class="position-absolute">
            <h1 id="text-row6" class="text-light">¡Lo que siempre <br>has querido!</h1>
            <button id="btn-row6" class="btn btn-danger">Solicite un credito ></button>
          </div>
        </div>
      </div>

      @include('pages.partials.formhome')

@endsection

@section('section-scripts')
  <script src="{{ URL::asset('js/homepage.js'); }}"></script>
@endsection
