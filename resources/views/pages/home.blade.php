@extends('layouts.plantilla')

@section('title', 'Casa Credito')
    
@section('content')
    
    <div class="div-carousel">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner position-relative">
          <div class="carousel-item active">
            <img src="https://i2.wp.com/moovemag.com/wp-content/uploads/2020/12/inversion-inmobiliaria.jpg?fit=700%2C459&ssl=1&resize=1280%2C720" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block position-absolute top-50 start-50 translate-middle mt-4">
              <h2>Proyectos</h2>
              <p>Some representative placeholder content for the first slide.</p>
              <a class="btn btn-outline-light" href="{{ route('pages.projects') }}">Ver proyectos</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://www.100plandenegocios.com/wp-content/uploads/2021/07/negocio-inmobiliaria.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block position-absolute top-50 start-50 translate-middle mt-4">
              <h2>Nuestros socios</h2>
              <p>Some representative placeholder content for the first slide.</p>
              <a class="btn btn-outline-light" href="{{ route('pages.partners') }}">Ver socios</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://www.america-retail.com/static//2020/12/PropTech-el-futuro-del-mercado-inmobiliario-digital-723x400-1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block position-absolute top-50 start-50 translate-middle mt-4">
              <h2>Contactanos</h2>
              <p>Some representative placeholder content for the first slide.</p>
              <a class="btn btn-outline-light" href="{{ route('pages.contact')}} ">Contactar</a>
            </div>
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

      {{-- <h1 class="texto-carousel top-50 start-50 translate-middle text-center">ENCUENTRA EL LUGAR IDEAL PARA VIVIR
        <br>
        <button id="btn-carousel" class="btn btn-outline-light">Ver propiedades</button>
      </h1> --}}
      
    </div>

      <div data-aos="slide-up" class="second-row position-relative ">
          <p id="second-row" class="text-justify">
            <b>Lorem ipsum dolor</b> sit amet consectetur adipisicing elit. Corporis ipsam pariatur nulla possimus commodi at. Veritatis, ex. Beatae vel explicabo fugit earum, amet mollitia cum eligendi laboriosam, quis, saepe magnam?
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima consequatur fugit porro quasi officia quisquam, incidunt veritatis beatae tempora dolorem aliquid quam nihil asperiores ipsum exercitationem, necessitatibus, ratione distinctio dicta.
          </p>
          <hr id="linea_pequeña" class="position-absolute bottom-0 start-50 translate-middle-x">
          
      </div>

      <div data-aos="fade-up-left" class="row">
        <div class="col-sm-6">
          <div class="p-5 m-5">
            <h2 class="fw-bold">Proyectos en Venta</h2>
            <p>Conoce cada uno de los proyectos que tenemos y conoce la nueva experiencia en proyectos inmobiliarios</p>
            <br>
            <a class="link-row3" href="{{ route('pages.projects') }}">Ver todos los proyectos ></a>
          </div>
        </div>

        <div class="col-sm-6">
         
          <div class="carrusel m-4">
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                @forelse ($projects as $project)
                <div class="carousel-item @if ($loop->index==0) active @endif">
                  <img src="img/home/{{ $project->url_image }}" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $project->project_name }}</h5>
                    <p>{{ $project->description_project}}</p>
                  </div>
                </div>
                @empty
                @endforelse
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
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
        <div class="row m-5 p-5">
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
        <img src="https://www.cuerpomente.com/medio/2019/11/04/familia_db408d1a_1200x630.jpg" class="img-fluid" alt="">
        <div id="row6" class="position-absolute">
          <h1 id="text-row6" class="text-light">¡Lo que siempre <br>has querido!</h1>
          <button id="btn-row6" class="btn btn-danger">Solicite un credito ></button>
        </div>
      </div>


        <div data-aos="fade-right" class="row m-5">
          <div class="col-sm-2 col-1">

          </div>
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
          <div class="col-sm-2 col-1">

          </div>
        </div>

@endsection