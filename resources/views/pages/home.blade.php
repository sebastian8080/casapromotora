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

  <style>
       input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {-webkit-appearance: none;margin: 0;}
      /* FIREFOX */
      input[type="number"] {-moz-appearance: textfield;}input[type="number"]:hover,input[type="number"]:focus {-moz-appearance: number-input;}
      /* OTHER */
      input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {-webkit-appearance: none;margin: 0;}
      .form-control:focus {border-color: #FF0000;box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);}
  </style>
@endsection
    
@section('content')
{{-- <section id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="position: relative; justify-content: center; display: flex;">
  <div class="carousel-inner position-relative">
    <div class="position-absolute text-white text-center" style="z-index: 3; left: 0; right: 0; margin: auto; top: 50%; transform: translateY(-50%);">
      <h1 style="-webkit-text-stroke: 1px rgb(255, 255, 255); color: rgba(255, 255, 255, 0.118); font-size: 4rem; font-weight: bold;">SU PROPIEDAD, <br> <span>Y SU FUTURO</span> <br> <span >NUESTRA EXPERIENCIA</span></h1>
    </div>
      <div class="carousel-item active position-relative"  style="background:rgba(2, 2, 2, 0.5);">
        <article style="height: 850px; background-repeat: no-repeat; background-size: cover; background-position: center; filter: brightness(60%); background-image: url('{{ asset('img/home/SLIDER-NUEVO-01-min.webp') }}');"></article>
      </div>
      <div class="carousel-item position-relative"  style="background:rgba(2, 2, 2, 0.5);">
        <article style="height: 850px; background-repeat: no-repeat; background-size: cover; background-position: center; filter: brightness(60%); background-image: url('{{ asset('img/home/img2-home.webp') }}');"></article>
      </div>
      <div class="carousel-item position-relative"  style="background:rgba(2, 2, 2, 0.5);">
        <article style="height: 850px; background-repeat: no-repeat; background-size: cover; background-position: center; filter: brightness(60%); background-image: url('{{ asset('img/home/img3-home.webp') }}');"></article>
      </div>
  </div>
</section> --}}

<section class="position-relative">
  <video width="100%" src="{{ asset('video/home-video.mp4')}}" autoplay loop muted></video>
  <div class="position-absolute bottom-0 start-50 translate-middle-x down-arrow"></div>
</section>

<section class="container my-5">
  <div class="row">
    <div class="col-sm-12 col-12 col-md-12 col-xl-6">
      <h2 class="subtitles" style="-webkit-text-stroke: 1px black; color: white; font-size: 5rem; font-weight: bold;">PROYECTOS <br> <span class="subtitles" style="color: #000000; font-size: 4rem;">EN VENTA</span></h2>
      <p style="font-size: 18px">Conozca cada uno de los proyectos que tenemos y la nueva experiencia en proyectos inmobiliarios</p>
      <a class="btn btn-outline-dark rounded-0 border border-danger" style="font-size: 15px; font-weight: bold" href="{{ route('pages.projects') }}">VER TODOS LOS PROYECTOS</a>
    </div>
  </div>
</section>

<section class="container">
  <h2 class="subtitles" style="-webkit-text-stroke: 1px black; color: white; font-size: 5rem; font-weight: bold; text-align: right">CONDOMINIOS</h2>
  <div class="row mt-4 justify-content-end">
    @foreach ($condominios as $condominio)
      <div class="col-12 col-sm-12 col-md-6 col-xl-4" data-aos="fade-right">
        <a href="{{ route('projects.viewProject', [strtolower($condominio->type), $condominio->slug]) }}">
          <article class="position-relative">
            <img  width="100%" height="350px" src="{{ asset('uploads/projects/300/' . strtok($condominio->images, '|')) }}" alt="{{ $condominio->type }} en Venta en Cuenca">
            <p class="position-absolute top-0 start-0 bg-white text-dark px-3 py-1 text-center" style="width: 70%; font-weight: 600">{{ strtoupper($condominio->project_name) }}</p>
          </article>
        </a>
      </div>
    @endforeach
  </div>
</section>

<section class="container pt-5">
  <h2 class="subtitles" style="-webkit-text-stroke: 1px black; color: white; font-size: 5rem; font-weight: bold; text-align: right">DEPARTAMENTOS</h2>
  <div class="row mt-4 justify-content-end">
    @foreach ($departments as $department)
      <div class="col-12 col-sm-12 col-md-6 col-xl-4 mb-4" data-aos="flip-left">
        <a href="{{ route('projects.viewProject', [strtolower($department->type), $department->slug]) }}">
          <article class="position-relative">
            <img  width="100%" height="350px" src="{{ asset('uploads/projects/300/' . strtok($department->images, '|')) }}" alt="{{ $department->type }} en Venta en Cuenca">
            <p class="position-absolute @if($loop->index == 0)bottom-0 start-0 @elseif($loop->index == 1)bottom-0 start-50 translate-middle-x @elseif($loop->index == 2)bottom-0 end-0 @endif bg-white text-dark px-3 py-1 text-center" style="width: 70%; margin-bottom:0px; font-weight: 600">{{ strtoupper($department->project_name) }}</p>
          </article>
        </a>
      </div>
    @endforeach
  </div>
</section>

<section class="my-5 container">
  <div>
    <h2 class="display-5 fw-bolder pb-3" style="max-width: min-content; border-bottom: 1px solid #89062E">FINANCIAMIENTO</h2>
  </div>
</section>

<section class="bg-light my-5">
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
</section>

<section>
  <section class="row mx-5 contact-section">
    <article class="col-12 col-sm-12 col-md-12 col-xl-5 text-center d-flex align-items-center justify-content-center">
      <div>
        <div class="d-inline-flex">
          <h2 class="pb-3 subtitles" style="-webkit-text-stroke: 1px black; color: white; font-size: 4rem; font-weight: bold;  border-bottom: 1px solid #89062E">INFORMACIÓN <br> <span style="color: #000000;">DE CONTACTO</span></h2>
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
</section>

<section class="mt-5">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1992.3422529348652!2d-79.01088986117757!3d-2.9068842205078607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd1911fa24b8a3%3A0x253fdcb31d8b1517!2sCasa%20Cr%C3%A9dito%20Promotora!5e0!3m2!1ses-419!2sec!4v1690924563410!5m2!1ses-419!2sec" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
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
  <script>
    const selState = document.getElementById('state');
    const selCity = document.getElementById('city');

    selState.addEventListener("change", async function() {
      selCity.options.length = 0;
    let id = selState.options[selState.selectedIndex].dataset.id;
    const response = await fetch("{{url('getcities')}}/"+id );
    const cities = await response.json();
    
    var opt = document.createElement('option');
          opt.appendChild( document.createTextNode('Seleccione Ciudad') );
          opt.value = '';
          selCity.appendChild(opt);
    cities.forEach(city => {
          var opt = document.createElement('option');
          opt.appendChild( document.createTextNode(city.name) );
          opt.value = city.name;
          selCity.appendChild(opt);
    });
  });
  </script>
@endsection
