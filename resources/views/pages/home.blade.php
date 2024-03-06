@extends('layouts.plantilla')

@section('title', 'Encuentre su Proyecto Ideal 🏙')

@section('content-head')

  <meta name="title" content="Casa Promotora - Encuentre su Proyecto Ideal" />
  <meta name="description" content="Proyectos Inmobiliarios modernos y elegantes para disfrutar de la comodidad con su familia. Consulte para más información ✅ " />
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">

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

  <!-- BANNER -->
  <section class="d-flex align-items-center justify-content-center" style="height: 100vh; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('img/banner-home.webp') }}')">
    <section>
      <h1 class="text-white title text-center">ENCUENTRA <br> <span class="fw-bold title-bold">TU HOGAR</span></h1>
      <section class="card py-4 d-flex justify-content-center">
        <form action="{{ route('search') }}" method="GET">
          @csrf
          <section class="d-flex justify-content-center gap-4">
            <div>
              <label for="type" class="mb-2">Seleccione el tipo de propiedad:</label>
              <select name="type" id="type" class="form-select rounded-inputs ps-4">
                <option value="Departamentos">DEPARTAMENTOS</option>
                <option value="Casas">CASAS</option>
              </select>
            </div>
            <div>
              <label for="location" class="mb-2">Ingrese ubicación o características (ej: garage)</label>
              <input type="text" id="location" name="location" class="form-control rounded-inputs">
            </div>
          </section>
          <section class="text-center mt-4">
            <button class="btn btn-search rounded-pill">INICIAR BÚSQUEDA</button>
          </section>
        </form>
      </section>
    </section>
  </section>
  <!--END BANNER-->

  <section class="py-5">
    <h2 class="text-center subtitle py-5"> <span class="fw-bold">Descubra</span> <span>lo que tenemos para usted</span></h2>
  </section>
  <section class="row px-5">
    <article class="col-sm-4 position-relative">
      <img class="img-fluid" src="{{ asset('img/home/card-casas.png') }}" alt="">
      <div class="position-absolute top-0 start-50 translate-middle-x mt-5 text-center">
        <h3 class="fw-bold">Casas</h3>
        <a href="#" class="btn btn-cards rounded-pill">VER CATALOGO</a>
      </div>
    </article>
    <article class="col-sm-4 position-relative">
      <img class="img-fluid" src="{{ asset('img/home/card-departamentos.png') }}" alt="">
      <div class="position-absolute top-0 start-50 translate-middle-x mt-5 text-center">
        <h3 class="text-center fw-bold">Departamentos</h3>
        <a href="#" class="btn btn-cards rounded-pill">VER CATALOGO</a>
      </div>
    </article>
    <article class="col-sm-4 position-relative">
      <img class="img-fluid" src="{{ asset('img/home/card-suites.png') }}" alt="">
      <div class="position-absolute top-0 start-50 translate-middle-x mt-5 text-center">
        <h3 class="text-center fw-bold">Suites</h3>
        <a href="#" class="btn btn-cards rounded-pill">VER CATALOGO</a>
      </div>
    </article>
    <article class="col-sm-12 text-center mt-5">
      <a class="w-auto btn-show-properties rounded-pill px-5 py-2" href="{{ route('projects.viewProject', 'casas') }}">VER TODAS LAS PROPIEDADES</a>
    </article>
  </section>

  <section class="my-5rem">
    <p class="text-center">LO INVITAMOS A EXPLORAR NUESTROS</p>
    <h2 class="subtitle mb-5 text-center"><span class="fw-bold">Proyectos </span> <span>Destacados</span></h2>
      @foreach ($outstanding_projects as $project)
        <section class="row bg-light mb-5">
          @if(($loop->index % 2) == 0)
          <article class="col-sm-7 p-5">
            <div class="section-image-project" style="height: 600px; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('uploads/projects/900/'. explode('|', $project->images)[0]) }}')"></div>
          </article>
          <article class="col-sm-5 d-flex align-items-center justify-content-center" style="height: 600px">
            <div>
              <p class="m-0 w-100 @if(($loop->index % 2) == 0) text-end @else text-start @endif">EN CONSTRUCCIÓN</p>
              <p class="title_outstanding_projects w-100 @if(($loop->index % 2) == 0) text-end @else text-start @endif">{{ $project->project_name }}</p>
              <div class="d-flex w-full align-items-center @if(($loop->index % 2) == 0) justify-content-end @else justify-content-start @endif gap-4">
                <div>
                  <img class="img-fluid" width="130px" src="{{ asset('img/home/icono-projectos-oficinas.png') }}" alt="">
                  <p>OFICINAS</p>
                </div>
                <div>
                  <img class="img-fluid" width="130px" src="{{ asset('img/home/icono-projectos-residencias.png') }}" alt="">
                  <p>RESIDENCIAS</p>
                </div>
                <div>
                  <img class="img-fluid" width="130px" src="{{ asset('img/home/icono-projectos-locales-comerciales.png') }}" alt="">
                  <p>LOCALES</p>
                </div>
              </div>
              <div class="d-flex justify-content-center mt-4">
                <a href="" class="btn-show-properties rounded-pill px-4 py-2">VER PROYECTO</a>
              </div>
            </div>
          </article>
          @else
          <article class="col-sm-5 d-flex align-items-center justify-content-center" style="height: 600px">
            <div>
              <p class="m-0 w-100 @if(($loop->index % 2) == 0) text-end @else text-start @endif">EN CONSTRUCCIÓN</p>
              <p class="title_outstanding_projects w-100 @if(($loop->index % 2) == 0) text-end @else text-start @endif">{{ $project->project_name }}</p>
              <div class="d-flex w-full align-items-center @if(($loop->index % 2) == 0) justify-content-end @else justify-content-start @endif gap-4">
                <div>
                  <img class="img-fluid" width="130px" src="{{ asset('img/home/icono-projectos-oficinas.png') }}" alt="">
                  <p>OFICINAS</p>
                </div>
                <div>
                  <img class="img-fluid" width="130px" src="{{ asset('img/home/icono-projectos-residencias.png') }}" alt="">
                  <p>RESIDENCIAS</p>
                </div>
                <div>
                  <img class="img-fluid" width="130px" src="{{ asset('img/home/icono-projectos-locales-comerciales.png') }}" alt="">
                  <p>LOCALES</p>
                </div>
              </div>
              <div class="d-flex justify-content-center mt-4">
                <a href="" class="btn-show-properties rounded-pill px-4 py-2">VER PROYECTO</a>
              </div>
            </div>
          </article>
          <article class="col-sm-7 p-5">
            <div class="section-image-project" style="height: 600px; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset('uploads/projects/900/'. explode('|', $project->images)[0]) }}')"></div>
          </article>
          @endif
        </section>
      @endforeach
  </section>

  <section class="bg-light mt-5 pt-5 pb-5">
    <section class="container">
      <h2 class="text-center"><span>¿Por qué comprar</span> <br> <span class="fw-bold">mi propiedad en Ecuador?</span></h2>
      <section class="row mt-5">
        <article class="col-sm-6 mb-5">
          <div class="d-flex gap-2">
            <img width="100px" height="70px" src="{{ asset('img/home/icono_diversidad.png') }}" alt="">
            <div>
              <p class="m-0 fw-bold" style="font-size: 20px">Diversidad geográfica</p>
              <p class="m-0">Ecuador ofrece una variedad de paisajes, desde playas hasta montañas y selvas, lo que brinda opciones para diversos gustos y estilos de vida.</p>
            </div>
          </div>
        </article>
        <article class="col-sm-6 mb-5">
          <div class="d-flex gap-2">
            <img width="110px" height="80px" src="{{ asset('img/home/icono_visa.png') }}" alt="">
            <div>
              <p class="m-0 fw-bold" style="font-size: 20px">Visa amigable</p>
              <p class="m-0">Ecuador cuenta con programas de visa que facilitan la residencia para extranjeros, incluyendo a aquellos que desean invertir en propiedades.</p>
            </div>
          </div>
        </article>
        <article class="col-sm-6 mb-5">
          <div class="d-flex gap-2">
            <img width="110px" height="80px" src="{{ asset('img/home/icono_moneda.png') }}" alt="">
            <div>
              <p class="m-0 fw-bold" style="font-size: 20px">Moneda dolarizada</p>
              <p class="m-0">Ecuador adoptó el dólar estadounidense como su moneda oficial, lo que proporciona estabilidad financiera y facilita las transacciones.</p>
            </div>
          </div>
        </article>
        <article class="col-sm-6 mb-5">
          <div class="d-flex gap-2">
            <img width="110px" height="80px" src="{{ asset('img/home/icono_clima.png') }}" alt="">
            <div>
              <p class="m-0 fw-bold" style="font-size: 20px">Clima agradable</p>
              <p class="m-0">Muchas regiones de Ecuador gozan de un clima agradable durante todo el año, lo que es atractivo para aquellos que buscan evitar climas extremos.</p>
            </div>
          </div>
        </article>
        <article class="col-sm-6 mb-5">
          <div class="d-flex gap-2">
            <img width="110px" height="80px" src="{{ asset('img/home/icono_cultura.png') }}" alt="">
            <div>
              <p class="m-0 fw-bold" style="font-size: 20px">Cultura y hospitalidad</p>
              <p class="m-0">Ecuador es conocido por su rica cultura, diversidad étnica y la hospitalidad de su gente, lo que hace que vivir allí sea una experiencia enriquecedora.</p>
            </div>
          </div>
        </article>
        <article class="col-sm-6 mb-5">
          <div class="d-flex gap-2">
            <img width="110px" height="80px" src="{{ asset('img/home/icono_inversion.png') }}" alt="">
            <div>
              <p class="m-0 fw-bold" style="font-size: 20px">Inversión en desarrollo</p>
              <p class="m-0">En ciertas áreas, especialmente en ciudades en crecimiento, hay oportunidades de inversión en propiedades que se aprecian con el tiempo.</p>
            </div>
          </div>
        </article>
      </section>
    </section>
  </section>

  <section class="container mt-5 pb-5">
    <h2 class="text-center" style="font-weight: 100"><span style="font-size: 1rem">¿ERES CONSTRUCTOR Y QUIERES GENERAR</span> <br> <span style="font-size: 3rem"><span class="fw-bold">Clientes</span> Potenciales?</span></h2>
    <p class="text-center">Accede a nuestra plataforma y publica tus proyectos</p>
    <section class="d-flex justify-content-center mt-5">
      <video class="img-fluid" src="{{ asset('video/SEASCAPE-VIDEO.mp4') }}" autoplay loop muted></video>
    </section>
    <section class="d-flex justify-content-center">
      <a href="" class="btn btn-show-properties mt-5 rounded-pill text-center">MÁS INFORMACIÓN</a>
    </section>
  </section>
</section>

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
