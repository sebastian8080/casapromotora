@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content-head')
    <style>
      .link:hover{
        border-bottom: 1px solid;
        font-size: 40px;
      }

      @media only screen and (max-width: 580px){
      
        .link{
          margin-left: 40%;
        }

      }
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
                  <img src="img/home/01.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First Project</h5>
                    <p>Description First Project</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/home/6b578015c6ddf83596b9ebc724bd576d.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second Project</h5>
                    <p>Description Second Project</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/home/e68756b224c6a89424742d207a87e30e.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third Project</h5>
                    <p>Description Third Project</p>
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
          {{-- <img src="https://www.cuerpomente.com/medio/2019/11/04/familia_db408d1a_1200x630.jpg" class="img-fluid" alt=""> --}}
          <img src="img/home/FAMILIA-CREDITOS - copia.jpg" class="img-fluid" alt="Imagen de una familia">
          <div id="row6" class="position-absolute">
            <h1 id="text-row6" class="text-light">¡Lo que siempre <br>has querido!</h1>
            <button id="btn-row6" class="btn btn-danger">Solicite un credito ></button>
          </div>
        </div>
      </div>


        <div data-aos="fade-right" class="row mt-3 mb-3">
          <div class="col-sm-2"></div>
          <div id="card-form" class="col-sm-4 text-center rounded-3">
            <h3 id="title-row7" class="mt-5 pt-5 fw-bold">INFORMACION <br> DE CONTACTO</h3>
            <p id="text1-row7">info@casacreditopromotora.com</p>
            <p id="text2-row7" >+593 983 849 073</p>
          </div>
          <div id="form" class="col-sm-5 pb-5">
            <form class="p-5">
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre">
              </div>
              <div class="mb-3">
                <label for="telefono-celular" class="form-label">Telefono / Celular</label>
                <input type="number" class="form-control" id="telefono-celular">
              </div>
              <div class="mb-3">
                <label for="correo" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" id="correo" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <input type="text" class="form-control" id="mensaje">
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-danger me-md-2 rounded-pill">Enviar mensaje</button>
              </div>
            </form>
          </div>
          <div class="col-sm-2"></div>
        </div>

@endsection

@section('section-scripts')
  <script src="{{ URL::asset('js/homepage.js'); }}"></script>
@endsection
