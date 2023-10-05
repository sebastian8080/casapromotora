@extends('layouts.plantilla')

@section('title', 'Encuentre su Proyecto Ideal 🏙')

@section('content-head')

  <meta name="title" content="Casa Promotora - Encuentre su Proyecto Ideal" />
  <meta name="description" content="Proyectos Inmobiliarios modernos y elegantes para disfrutar de la comodidad con su familia. Consulte para más información ✅ " />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{{ URL::current() }}" />
  <meta property="og:title" content="Casa Promotora - Encuentre su Proyecto Ideal" />
  <meta property="og:description" content="Proyectos Inmobiliarios modernos y elegantes para disfrutar de la comodidad con su familia. Consulte para más información ✅ " />
  <meta property="og:image" content="{{ asset('img/about/oficinasnuevas-min.jpg') }}" />

  <meta name="keywords" content="proyectos inmobiliarios en cuenca, proyectos inmobiliarios cuenca, proyectos de vivienda en cuenca, inmobiliarias en cuenca ecuador, casas nuevas en venta, casas nuevas en venta cuenca, casas de venta, casas de venta en cuenca, casas de venta nuevas cuenca, casas de venta nuevas en cuenca, casas en venta en cuenca, casas de venta en ecuador cuenca, venta de casas en ecuador cuenca, casas en venta en cuenca ecuador, casas en venta ecuador cuenca, cuenca ecuador casas en venta, venta de casa cuenca">

  <style>
      .text-shadow {
        text-shadow: 1px 0px 0px black, -1px 0px 0px black, 0px 1px 0px black,  0px -1px 0px black; }
       input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {-webkit-appearance: none;margin: 0;}
      /* FIREFOX */
      input[type="number"] {-moz-appearance: textfield;}input[type="number"]:hover,input[type="number"]:focus {-moz-appearance: number-input;}
      /* OTHER */
      input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {-webkit-appearance: none;margin: 0;}
      .form-control:focus {border-color: #FF0000;box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);}
      #background-video {width: 100vw;height: 730px;object-fit: cover;left: 0;right: 0;top: 0;bottom: 0;z-index: -1;}
      @media screen and (max-width: 758px){
        #section-video, #background-video{
          height: 520px !important;
        }
        .carousel-inner, .carousel-item > section { height: 730px !important}
        .btncontact { top: 45% !important; right: 25% !important}
        .carousel-projects{justify-content: center !important}
      }
      input{
        outline: none;
        border: none;
      }
  </style>
@endsection
    
@section('content')


<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
      <button style="width: 10px; height: 10px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active rounded-circle" aria-current="true" aria-label="Slide 1"></button>
      <button style="width: 10px; height: 10px;" type="button" class="rounded-circle" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button style="width: 10px; height: 10px;" type="button" class="rounded-circle" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner position-relative" style="height: 850px">
      <article class="carousel-item active">
        <section style="height: 850px; background-position: center center; background-size: cover; background-image: url('{{ asset('img/home/carousel1.jpg') }}');"></section>
      </article>
      <article class="carousel-item">
        <section style="height: 850px; background-position: center center; background-size: cover; background-image: url('{{ asset('img/home/carousel4.jpg') }}');"></section>
      </article>
      <article class="carousel-item">
        <section style="height: 850px; background-position: center center; background-size: cover; background-image: url('{{ asset('img/home/carousel3.jpg') }}');"></section>
      </article>
      <div class="position-absolute top-50 start-50 translate-middle text-white display-1 text-center" style="font-family: Montserrat">
        <span>UN NUEVO</span> <br>
        <span class="fw-bold">ESTILO DE VIDA</span> <br>
        <a href="{{ route('pages.projects') }}" class="btn btn-outline-light rounded-pill">VER PROYECTOS</a>
      </div>
    </div>
  </div>
</section>

<section class="container mt-4" id="scroll">
  <a href="#scroll" style="text-decoration: none; color:  #000000">
    <div class="text-center">
      <span style="font-weight: normal">Desplazar</span> <br>
      <img width="50px" height="40px" src="{{ asset('img/desplazar.gif') }}" alt="">
    </div>
  </a>
</section>

{{-- <section id="section-video" style="height: 730px">
  <video id="background-video" autoplay loop muted>
    <source src="{{ asset('video/home-video.mp4')}}" type="video/mp4">
    </video>
</section> --}}

<section class="container mt-5">
  <section class="row">
    <div class="col-sm-6 bg-light" style="padding-left: 0px !important; padding-right: 0px !important">
      <article class="p-5">
        <p style="font-weight: 500" class="fs-5">Contamos con  proyectos de arquitectos y diseñadores líderes en todo el Ecuador, los cuáles se han convertido en nuevos puntos destacados del creciente horizonte del país</p>
        <br> <br> <br>
        <a href="#consultar" class="btn btn-dark">Consultar más información</a>
      </article>
    </div>
    <div class="col-sm-6" style="padding-left: 0px !important; padding-right: 0px !important">
      <article>
        <video class="img-fluid" src="{{ asset('video/SEASCAPE-VIDEO.mp4') }}" autoplay loop muted></video>
      </article>
    </div>
  </section>
</section>

<section class="my-5" style="margin-top: 7% !important; margin-bottom: 7% !important">
  <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row justify-content-center carousel-projects">
            @for ($i = 0; $i < 3; $i++)
              <div class="col-sm-4 d-flex align-items-end justify-content-center" style="width: 20rem; height: 15rem">
                <div>
                  <a href="{{ route('projects.viewProject', [strtolower($projects[$i]['type']), $projects[$i]['slug']]) }}">
                    <img src="{{ asset('uploads/projects/cropped/'. $projects[$i]['cropped_image']) }}" class="card-img-top ing-fluid" alt="...">
                  </a>
                  <p class="fs-6 text-center mt-3">{{ strtoupper($projects[$i]['type']) }}</p>
                </div>
              </div>
            @endfor
          </div>
        </div>
      </div>
      @if(count($projects)>3)
      <div class="carousel-item">
        <div class="container">
          <div class="row justify-content-center carousel-projects">
            @for ($i = 3; $i < 6; $i++)
              <div class="col-sm-4 d-flex align-items-end justify-content-center" style="width: 20rem; height: 15rem">
                <div>
                  <a href="{{ route('projects.viewProject', [strtolower($projects[$i]['type']), $projects[$i]['slug']]) }}">
                    <img src="{{ asset('uploads/projects/cropped/'. $projects[$i]['cropped_image']) }}" class="card-img-top ing-fluid" alt="...">
                  </a>
                  <p class="fs-6 text-center mt-3">{{ strtoupper($projects[$i]['project_name']) }}</p>
                </div>
              </div>
            @endfor
          </div>
        </div>
      </div>
      @endif
      @if(count($projects)>6)
      <div class="carousel-item">
        <div class="container">
          <div class="row justify-content-center carousel-projects">
            @for ($i = 6; $i < 7; $i++)
              <div class="col-sm-4 d-flex align-items-end justify-content-center" style="width: 20rem; height: 15rem">
                <div>
                  <a href="{{ route('projects.viewProject', [strtolower($projects[$i]['type']), $projects[$i]['slug']]) }}">
                    <img src="{{ asset('uploads/projects/cropped/'. $projects[$i]['cropped_image']) }}" class="card-img-top ing-fluid" alt="...">
                  </a>
                  <p class="fs-6 text-center mt-3">{{ strtoupper($projects[$i]['type']) }}</p>
                </div>
              </div>
            @endfor
          </div>
        </div>
      </div>
      @endif
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>
  <div class="d-flex justify-content-center mt-5">
    <a href="{{ route('pages.projects') }}" class="btn btn-dark">VER PROYECTOS</a>
  </div>
</section>

<section class="container pt-4">
  <section class="position-relative">
    <section style="height: 600px; background-position: center bottom; background-image: url('{{ asset('img/home/sala-de-estar.jpg') }}');"></section>
    <div class="position-absolute" style="top:20px; left: 35px">
      <p class="display-3 text-white">INVIERTA EN <br> SU CASA</p>
    </div>
    <div class="position-absolute btncontact" style="top:25px; right:40px">
      <a href="{{ route('pages.contact') }}" class="btn btn-outline-light fs-4 rounded-0 fw-bold">CONTACTAR</a>
    </div>
    <div class="position-absolute" style="bottom:20px; right: 35px">
      <p class="display-3 text-white">INVIERTA EN <br> SU FUTURO</p>
    </div>
  </section>
</section>

<section class="bg-light mt-5">
  <section class="container py-5">
    <p class="text-center fs-1">PROYECTOS <span class="fw-bold">NUEVOS</span></p>
    <section class="row pt-4">
      @foreach ($latest_projects as $p)
        <article class="col-sm-4 text-center mb-3">
          <p class="bg-dark text-white fs-5 py-1 rounded">PROYECTO {{ $p->abbr}}</p>
          <a href="{{ route('projects.viewProject', [strtolower($p->type), $p->slug]) }}">
            <img src="{{ asset('uploads/projects/300/'. strtok($p->images, '|'))}}" alt="" class="img-fluid">
          </a>
        </article>
      @endforeach
    </section>
  </section>
</section>

<section class="container my-5" id="consultar">
  <p class="text-center fs-1">REALIZAR <span class="fw-bold">CONSULTA</span></p>
  <div class="row justify-content-center">
    <div class="col-sm-8">
      <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <div class="mt-5 row">
          <div class="col-sm-6 mb-5">
            <input type="text" name="nombre" placeholder="Nombre" class="border-bottom w-100 text-dark fw-bold">
          </div>
          <div class="col-sm-6 mb-5">
            <input type="text" name="apellido" placeholder="Apellido" class="border-bottom w-100 text-dark fw-bold">
          </div>
        </div>
        <div class="mb-5">
          <input type="email" name="correo" placeholder="Correo electrónico" class="border-bottom w-100 fw-bold">
        </div>
        <div class="my-5">
          <input type="number" name="telefono_celular" placeholder="Número de teléfono" class="border-bottom w-100 fw-bold">
        </div>
        <div class="my-5">
          <input type="text" name="mensaje" placeholder="Mensaje" class="border-bottom w-100 fw-bold">
        </div>
        <div class="d-flex justify-content-center">
          <button class="btn btn-light rounded-0 text-dark border fw-bold px-4">ENVIAR</button>
        </div>
      </form>
    </div>
  </div>
</section>

{{-- <section class="container my-5">
  <div class="row">
    <div class="col-sm-12 col-12 col-md-12 col-xl-6">
      <h1 class="subtitles text-shadow" style="color: white; font-size: 5rem; font-weight: bold; font-family: Montserrat">PROYECTOS <br> <span class="subtitles" style="color: #000000; font-size: 4rem;">EN VENTA</span></h1>
      <p style="font-size: 18px">Conozca cada uno de los proyectos que tenemos y la nueva experiencia en proyectos inmobiliarios</p>
      <a class="btn btn-outline-dark rounded-0 border border-danger" style="font-size: 15px; font-weight: bold" href="{{ route('pages.projects') }}">VER TODOS LOS PROYECTOS</a>
    </div>
  </div>
</section> --}}

{{-- <section class="container pt-5">
  <h2 class="subtitles text-shadow" style="color: white; font-size: 5rem; font-weight: bold; text-align: right">DEPARTAMENTOS</h2>
  <p class="h5 mt-3 mb-4 txt-subtitles" style="text-align: right;">Departamentos de venta en lugares prestigiosos</p>
  <div class="row mt-4 justify-content-end">
    @foreach ($departments as $department)
      <div class="col-12 col-sm-12 col-md-6 col-xl-4 mb-4" data-aos="flip-left">
        <a href="{{ route('projects.viewProject', [strtolower($department->type), $department->slug]) }}">
          <article class="position-relative">
            <img  width="100%" height="350px" src="{{ asset('uploads/projects/300/' . strtok($department->images, '|')) }}" alt="{{ $department->type }} en Venta en Cuenca">
            <p class="position-absolute @if($loop->index == 0)bottom-0 start-0 @elseif($loop->index == 1)bottom-0 start-50 translate-middle-x @elseif($loop->index == 2)bottom-0 end-0 @endif bg-white text-dark px-3 py-1 text-center" style="width: 70%; margin-bottom:0px; font-weight: 600">{{ strtoupper($department->abbr) }}</p>
          </article>
        </a>
      </div>
    @endforeach
  </div>
</section>
<section class="container mt-5">
  <h2 class="subtitles text-shadow" style="color: white; font-size: 5rem; font-weight: 700; text-align: right;">CONDOMINIOS</h2>
  <p class="h5 mt-3 mb-4 txt-subtitles" style="text-align: right">Casas en venta en ubicaciones ideales</p>
  <div class="row mt-4 justify-content-end">
    @foreach ($condominios as $condominio)
      <div class="col-12 col-sm-12 col-md-6 col-xl-4 mb-4" data-aos="fade-right">
        <a href="{{ route('projects.viewProject', [strtolower($condominio->type), $condominio->slug]) }}">
          <article class="position-relative">
            <img  width="100%" height="350px" src="{{ asset('uploads/projects/300/' . strtok($condominio->images, '|')) }}" alt="{{ $condominio->type }} en Venta en Cuenca">
            <p class="position-absolute @if($loop->index == 0)bottom-0 start-0 @elseif($loop->index == 1)bottom-0 start-50 translate-middle-x @elseif($loop->index == 2) bottom-0 end-0 @endif bg-white text-dark px-3 py-1 text-center" style="width: 70%; margin-bottom:0px; font-weight: 600">{{ strtoupper($condominio->abbr) }}</p>
          </article>
        </a>
      </div>
    @endforeach
  </div>
</section> --}}


{{-- <section class="my-5 container">
  <div>
    <h2 class="display-5 fw-bolder pb-3" style="max-width: min-content; border-bottom: 1px solid #89062E">FINANCIAMIENTO</h2>
  </div>
</section> --}}

{{-- <section class="bg-light my-5">
  <div class="container">
    <div class="row py-5 text-center">
      <div class="col-sm-3" data-aos="zoom-in">
        <i class="fas fa-database fa-3x" style="color: rgb(0, 0, 0);"></i>
        <p class="mt-4">FACILIDAD</p>
      </div>
      <div class="col-sm-3" data-aos="zoom-in">
        <i class="fas fa-money-bill-wave fa-3x" style="color: rgb(0, 0, 0);"></i>
        <p class="mt-4">PLANES DE PAGO</p>
      </div>
      <div class="col-sm-3" data-aos="zoom-in">
        <i class="fas fa-signal fa-3x" style="color: rgb(0, 0, 0);"></i>
        <p class="mt-4">INVERSION INTELIGENTE</p>
      </div>
      <div class="col-sm-3" data-aos="zoom-in">
        <i class="far fa-check-circle fa-3x" style="color: rgb(0, 0, 0);"></i>
        <p class="mt-4">GARANTIA CASA</p>
      </div>
    </div>
  </div>
</section> --}}

{{-- <section>
  <section class="row mx-5 contact-section">
    <article class="col-12 col-sm-12 col-md-12 col-xl-5 text-center d-flex align-items-center justify-content-center">
      <div>
        <div class="d-inline-flex">
          <h2 class="pb-3 subtitles text-shadow" style="color: white; font-size: 4rem; font-weight: bold;  border-bottom: 1px solid #89062E">INFORMACIÓN <br> <span style="color: #000000;">DE CONTACTO</span></h2>
        </div>
        <div class="mt-3" style="font-style: italic; font-size: 18px">
          <p>
            <a style="text-decoration: none;" class="text-dark" href="mailto:info@casapromotora.com">info@casapromotora.com</a>
          </p>
          <p>
            <a style="text-decoration: none;" class="text-dark" href="to:+593989798238">098 979 8238</a>
          </p>
        </div>
      </div>
    </article>
    <article class="col-12 col-sm-12 col-md-12 col-xl-7 px-5 bg-light py-5">
      <section>
        <div>
          <form action="{{route('contactanos.store')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col mb-4">
                <input type="text" name="nombre" placeholder="Nombre" class="form-control border-0" required>
              </div>
              <div class="col mb-4">
                <input type="text" name="apellido" placeholder="Apellido" class="form-control border-0" required>
              </div>
            </div>
            <div class="row">
              <div class="col mb-4">
                <input type="email" name="correo" placeholder="Correo electrónico" class="form-control border-0" required>
              </div>
              <div class="col mb-4">
                <input type="number" name="telefono_celular" placeholder="Teléfono" class="form-control border-0" required>
              </div>
            </div>
            <div class="row">
              <div class="col mb-4">
                <textarea name="mensaje" rows="4" placeholder="Comentario" class="form-control border-0" required></textarea>
              </div>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-dark fw-bolder">ENVIAR</button>
            </div>
          </form>
        </div>
      </section>
    </article>
  </section>
</section> --}}

{{-- <section class="mt-5">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1992.3422529348652!2d-79.01088986117757!3d-2.9068842205078607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd1911fa24b8a3%3A0x253fdcb31d8b1517!2sCasa%20Cr%C3%A9dito%20Promotora!5e0!3m2!1ses-419!2sec!4v1690924563410!5m2!1ses-419!2sec" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section> --}}
  @if (session('report'))
    @php
     echo "
          <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
          <script>
              swal('Se ha enviado el correo', 'Nos pondremos en contacto lo antes posible!', 'success');
          </script>
          ";    
    @endphp
  @endif

  @if (session('validGeneral'))
    @php
   echo "
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
        <script>
            swal('Información enviada con éxito', 'Nos pondremos en contacto lo antes posible!', 'success');
        </script>
        ";    
    @endphp
  @endif

  
    

@endsection

@section('section-scripts')
  <script src="{{ URL::asset('js/homepage.js'); }}"></script>
@endsection
