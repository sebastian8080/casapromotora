@extends('layouts.plantilla')
@if(isset($data)) @section('title', $data['tipo']."s " . $data['nombreProyecto']) @elseif(isset($listing)) @section('title', $listing->listing_title) @elseif(isset($project)) @section('title', $project->project_name) @endif

@section('content-head')

<meta name="title" content="Casa Crédito Promotora - @if(isset($data)) {{ $data['tipo'] }}s {{ $data['nombreProyecto']}} @elseif(isset($listing)) {{$listing->listing_title}} @elseif(isset($project)) @section('title', $project->project_name) @endif">
<meta name="description" content="@if(isset($data)){!! $data['descripcion'] !!} @elseif(isset($listing)) {{$listing->listing_description}} @elseif(isset($project)) {{$project->description}} @endif">

<meta property="og:type" content="website">
<meta property="og:url" content="@if(isset($data))https://casacreditopromotora.com/proyectos/{{$data['nombreProyecto']}}@elseif(isset($listing)) https://casacreditopromotora.com/proyectos-nuevos/{{$listing->slug}} @elseif(isset($project)) https://casacreditopromotora.com/proyectos/{{strtolower($project->type)}}/{{$project->slug}} @endif">
<meta property="og:title" content="Casa Crédito Promotora - @if(isset($data)) {{ $data['tipo']}}s {{ $data['nombreProyecto'] }} @elseif(isset($listing)) {{$listing->listing_title}} @elseif(isset($project)) {{ $project->project_name }} @endif">
<meta property="og:description" content="@if(isset($data)){!! $data['descripcion'] !!} @elseif(isset($listing)) {{$listing->listing_description}} @elseif(isset($project))  {{ $project->project_name }} @endif">
<meta property="og:image" content="@if(isset($data)){{url('img/projects/'.$data['name_folder'].'/1.webp')}}@elseif(isset($listing)) https://casacredito.com/uploads/listing/600/{{strtok($listing->images, '|')}}@elseif(isset($project)) https://casacreditopromotora.com/uploads/projects/{{strtok($project->images, '|')}} @endif">

{{-- <meta property="product:availability" content="in stock">
<meta property="product:price:amount" content="@if($data['nombreProyecto'] === "Adra") {{$data['departamentos'][2]['precio']}} @elseif($data['nombreProyecto'] === "Futura Narancay") {{$data['departamentos'][1]['precio']}} @elseif($data['nombreProyecto'] === "Toscana") {{$data['departamentos'][7]['precio']}} @endif">
<meta property="product:retailer_item_id" content="{{ strtoupper(substr($data['nombreProyecto'], 0, 3)) }}-001">
<meta property="product:price:currency" content="USD"> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
      body{color: rgb(45, 67, 71)}
      .row > .column {padding: 0 8px;}
      .row:after {content: "";display: table;clear: both;}
      /* Create four equal columns that floats next to eachother */
      .column {float: left;width: 100%;}
      img.demo {opacity: 0.6;}
      .active,
      .demo:hover {opacity: 1;}
      img.hover-shadow {transition: 0.3s;}
      .hover-shadow:hover {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.074), 0 6px 20px 0 rgba(0, 0, 0, 0.109);}
      .imgs-header{/* background-color: #e2e0e0;  */padding: 10px;}
      @media screen and (max-width: 720px){
        #btnVerMasFotos{
          font-size: 10px;
        }
      }

      .inputs input, .inputs textarea{
        font-size: 13px;
      }

      .inputs #btnEnviar{
        background-color: rgb(224, 81, 78);
        text-decoration: none;
        color: #ffffff;
      }

      .inputs #btnWhatsapp{
        background-color: rgb(107, 191, 163);
        text-decoration: none;
        color: #ffffff;
      }

      #iconwpp{
        color: #ffffff;
      }

      .formEmail{
        background-color: rgb(244, 247, 248);
        position: sticky;
        top: 0;
      }

      #textoCondicionesEmail{
        font-size: 13px;
        margin-top: 10px;
      }

      .row .card-project h4{
        color: rgb(224, 81, 78);
        font-weight: bold;
      }

      .row .card-project h5{
        font-weight: bold;
      }

      .row i{
        color: gray;
      }

      .row .col-sm-2 button{
        position: absolute;
        right: 0;
        bottom: 10px;
        background-color: rgb(224, 81, 78);
        color: #ffffff;
      }
      .row > .col-sm-6 > h5{
        font-weight: bold;
      }

      .row > .col-sm-6 > h5, .row > .col-sm-6 > p, .row > .col > ul > li{
        margin: 2px;
        font-size: 15px;
      }

      #cardSimilarProject{
        border: solid 1px lightblue;
      }

      .card-body .card-title{
        font-size: 15px;
        font-weight: bold;
        margin-bottom: 10%;
      }

      .card-body .card-text{
        font-size: 14px;
        margin: 0;
      }

      .card > .position-absolute > p{
        font-size: 13px;
        margin-top: 5px;
        margin-left: 5px;
        padding: 5px;
        border-radius: 90px;
        background-color: rgb(8, 8, 49);
        color: #ffffff;
      }

      .headerForm{
        color: #999;
        font-weight: bold;
      }

      .headerForm h5{
        font-size: 20px;
        margin: 0%;
      }
      .headerForm h3{
        font-size: 35px;
      }
      @media screen and (max-width: 1200px){.img-top{ height: auto !important}.txt-inside-image-top{margin-top: 0px !important; margin-right: 0px !important;}.txt-inside-image-top > div {width: 100% !important}.txt-vertical{writing-mode: horizontal-tb !important; transform: rotate(360deg) !important}}
      @media screen and (max-width: 991px){.txt-inside-image-top > div > h2 {font-size: 4rem !important}.txt-short-description{height: auto !important; padding-bottom: 5rem !important}.container{padding-left: 10px !important; padding-right: 10px !important}.txt-type{font-size: 15px !important}}
    </style>
@endsection

@php
    if(isset($listing)){
      $images = explode("|", $listing->images);
      $images = array_combine(range(1, count($images)), $images);
      $count_images = count($images);
    } elseif(isset($data)) {
      $count_images = $data['num_imagenes'];
    } elseif(isset($project)){
      $images = explode("|", $project->images);
      $images = array_combine(range(1, count($images)), $images);
      $count_images = count($images);
    }
@endphp

@section('content')
  @if(isset($listing) || isset($data))
    <div class="container pt-5 mt-3">
      <h1>@if(isset($data)) {{ Str::upper($data['tipo'] . "S " . $data['nombreProyecto']) }} @else {{$listing->listing_title}} @endif</h1>
      <h5><i class="fas fa-map-marker-alt mx-1" style="color: red"></i><b> Ubicación:</b> @if(isset($data)) {{ $data['canton'] }} > {{ $data['ciudad'] }} > {{ $data['sector'] }} @else {{$listing->address}} @endif</h5>
    </div>

      <div class="imgs-header mt-3">
      <!-- Images used to open the lightbox -->
      <div class="row">
        <div class="col-sm-6 col-12 mt-3">
          <div class="column">
            <img class="img-fluid w-100 h-100 rounded" src="@if(isset($data)){{url('img/projects/'.$data['name_folder'].'/1.webp')}} @else https://casacredito.com/uploads/listing/600/{{$images[1]}}@endif" class="hover-shadow">
          </div>
        </div>

      <div class="col-sm-6 col-12 mt-3">
        <div class="align-items-center">
          <div class="row align-items-center">
            <div class="col-sm-6 col-6">
              <div class="column">
                <img width="100%" class="img-fluid rounded" src="@if(isset($data)){{url('img/projects/'.$data['name_folder'].'/2.webp')}} @else https://casacredito.com/uploads/listing/600/{{$images[2]}}@endif" class="hover-shadow">
              </div>
            </div>
            <div class="col-sm-6 col-6">
              <div class="column">
                <img class="img-fluid rounded" src="@if(isset($data)){{url('img/projects/'.$data['name_folder'].'/3.webp')}} @else https://casacredito.com/uploads/listing/600/{{$images[3]}}@endif" class="hover-shadow">
              </div>
            </div>
          </div>
  
          <div class="row mt-3">
            <div class="col-sm-6 col-6">
              <div class="column">
                <img class="img-fluid rounded" src="@if(isset($data)){{url('img/projects/'.$data['name_folder'].'/4.webp')}} @else https://casacredito.com/uploads/listing/600/{{$images[4]}}@endif" class="hover-shadow">
              </div>
            </div>
            <div class="col-sm-6 col-6">
              <div class="column position-relative">
                <img class="img-fluid rounded" style="filter: brightness(50%)" src="@if(isset($data)){{url('img/projects/'.$data['name_folder'].'/5.webp')}} @else https://casacredito.com/uploads/listing/600/{{$images[5]}}@endif" onclick="openModal();currentSlide(5)" class="hover-shadow">
                <div class="position-absolute top-50 start-50 translate-middle">
                  <button id="btnVerMasFotos" type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalImages">Ver más fotos</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="modalImages">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <p>@if(isset($data)){{ $data['nombreProyecto']}}@else{{$listing->listing_title}}@endif</p>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              {{-- @for ($i = 1; $i <= $data['num_imagenes']; $i++) --}}
              @for ($i = 1; $i <= $count_images; $i++)
                <div class="carousel-item @if($i == 1) active @endif position-relative">
                  <img src="@if(isset($data)){{url('img/projects/'.$data['name_folder'].'/'.$i.'.'.$data['extension'])}}@else https://casacredito.com/uploads/listing/600/{{$images[$i]}}@endif" class="d-block w-100" alt="...">
                  <div class="position-absolute bg-danger text-light rounded-pill px-2" style="top: 8px; left: 5px">
                    {{$i}}/{{$count_images}}
                  </div>
                </div>
              @endfor
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--CONTENIDO-->
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="row">
          <p>
            @if(isset($data)){!! $data['descripcion'] !!} @elseif(isset($listing)) {!!$listing->listing_description!!} @elseif(isset($project)) {{$project->description}} @endif
          </p>
        </div>
        @if(isset($data))
          @foreach ($data['departamentos'] as $departamento)
          <div class="row">
            <div class="card-project">
              <h5>{{ Str::upper($data['tipo']) . " " . $departamento['num_departamento']}}</h5>
              <h4>${{ $departamento['precio'] }}</h4>
            </div>
            <div class="row">
              <div class="col-sm-5">
                <div class="mb-3">
                  <i class="fas fa-expand-arrows-alt d-inline"></i>
                  <p class="d-inline">Area Total {{ $departamento['area_total'] }} m<sup>2</sup></p>
                </div>
                <div class="mb-3">
                  <i class="fas fa-ruler-vertical d-inline"></i>
                  <p class="d-inline">Area Interior {{ $departamento['area_interior']}} m<sup>2</sup></p>
                </div>
                <div class="mb-3">
                  <i class="fas fa-car d-inline"></i>
                  <p class="d-inline">{{ $departamento['parqueadero'] }} Parqueadero(s)</p>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="mb-3">
                  <i class="fas fa-bed d-inline"></i>
                  <p class="d-inline">{{ $departamento['num_habitaciones'] }} habitaciones</p>
                </div>
                <div class="mb-3">
                  <i class="fas fa-bath d-inline"></i>
                  <p class="d-inline">{{ $departamento['num_baños']}} baños</p>
                </div>
              </div>
              <div class="col-sm-2" style="position: relative">
                <button type="button" class="btn btn-warning rounded" data-bs-toggle="modal" data-bs-target="#modalPlanos" onclick="setSrcImage('@php echo $departamento['img_plano'] @endphp', '@php echo $data['name_folder'] @endphp')">Ver planos ></button>
              </div>
            </div>
            <hr>
          </div>

          <div class="modal" id="modalPlanos">
            <div class="modal-dialog">
              <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">{{ Str::upper($data['tipo'] . "S " . $data['nombreProyecto']) }}</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                  <img id="imgPlanos" class="img-fluid" src="" alt="">
                </div>
              </div>
            </div>
          </div>
            
          @endforeach
        @endif
        <div class="row">
          <h4>Características</h4>
          @if(isset($data))
          <div class="col-sm-6">
            <h5>Generales</h5>
              @foreach ($data['caracteristicas']['generales'] as $general)
                <p>{{ $general }}</p>  
              @endforeach
            </div>
          @endif
          @if(isset($data))
          <div class="col-sm-6">
            <h5>Servicios</h5>
              @foreach ($data['caracteristicas']['servicios'] as $services)
                <p>{{ $services }}</p>
              @endforeach
            </div>
          @endif
          @if(isset($listing->construction_area))
            <div class="col-sm-6">
              <p><i class="fas fa-expand-arrows-alt"></i> Área de Construcción: {{$listing->construction_area}} m<sup>2</sup></p>
            </div>
          @endif
          @if(isset($listing->land_area))
            <div class="col-sm-6">
              <p><i class="fas fa-compress-arrows-alt"></i> Área de Terreno: {{$listing->land_area}} m<sup>2</sup></p>
            </div>
          @endif
          @if(isset($listing->Front))
            <div class="col-sm-6">
              <p><i class="fas fa-arrow-up"></i> Frente: {{$listing->Front}} m</p>
            </div>
          @endif
          @if(isset($listing->Fund))
            <div class="col-sm-6">
              <p><i class="fas fa-arrow-down"></i> Fondo: {{$listing->Fund}} m</p>
            </div>
          @endif
          @if(isset($listing) && $listing->bedroom > 0)
            <div class="col-sm-6">
              <p><i class="fas fa-bed"></i> Habitaciones: {{$listing->bedroom}}</p>
            </div>
          @endif
          @if(isset($listing) && $listing->bathroom > 0)
            <div class="col-sm-6">
              <p><i class="fas fa-bath"></i> Baños: {{$listing->bathroom}}</p>
            </div>
          @endif
          @if(isset($listing) && $listing->garage > 0)
            <div class="col-sm-6">
              <p><i class="fas fa-parking"></i> Parqueadero: {{$listing->garage}}</p>
            </div>
          @endif
        </div> 
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-3">
        <div class="headerForm">
          @if(isset($data))
            <h5>SEPARE SU DEPARTAMENTO</h5>
            <h3>${{ $data['monto_reserva']}}</h3>
          @else
            <h5>PRECIO</h5>
            <h3>${{number_format($listing->property_price)}}</h3>
            @endif
        </div>
        <div class="formEmail rounded" id="myHeader">
          <div style="padding-top: 20px; padding-left: 15px; padding-right: 15px; padding-bottom: 15px;">
            <p class="fw-bold">QUIERO MAS INFORMACION</p>
            <hr>
            <p>Contáctanos y recibe la mejor asesoría</p>
            <form id="form" class="inputs" action="@if(isset($data)){{ route('sendEmail.projects', [$data['nombreProyecto']]) }} @else {{route('sendEmail.projects', $listing->product_code)}} @endif" method="POST">
              @csrf
              <div class="mb-3 d-flex">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" autocomplete="off" required>
                <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" autocomplete="off" required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" required>
              </div>
              <div class="mb-3">
                <textarea class="form-control" name="mensaje" id="mensaje" rows="4">Hola, me interesa este inmueble y quiero que me contacten. Gracias</textarea>
              </div>
              <div class="d-grid gap-2">
                <button id="btnEnviar" type="submit" class="btn">Enviar</button>
                {{-- <a id="btnWhatsapp" target="_blank" class="btn" href="https://api.whatsapp.com/send?phone=+593983849073&text=Me%20gustaria%20conocer%20los%20{{Str::lower($data['tipo'])}}s%20del%20conjunto%20residencial%20{{$data['nombreProyecto']}}">Contactar por Whatsapp <i id="iconwpp" class="fab fa-whatsapp"></i></a> --}}
                <a id="btnWhatsapp" target="_blank" class="btn" href="https://api.whatsapp.com/send?phone=+593983849073">Contactar por Whatsapp <i id="iconwpp" class="fab fa-whatsapp"></i></a>
              </div>
            </form>
            <p id="textoCondicionesEmail">Al enviar estás aceptando los términos de Uso y la Política de privacidad</p>
          </div>
        </div>
      </div>
    </div>
    <div>
      @if(isset($data))
        <div class="row mt-5">
          <h4>Areas Comunales</h4>
          <div class="col">
            <ul>
              <li>Salon de uso multiple</li>
              <li>Lobby y Recepción</li>
            </ul>
          </div>
          <div class="col">
            <ul>
              <li>Jardines Comunales</li>
              <li>Sala Comunal</li>
            </ul>
          </div>
          <div class="col">
            <ul>
              <li>Gameroom</li>
              <li>Balcones Comunales</li>
            </ul>
          </div>  
        </div>
      @endif
      @if(isset($data))
      <div class="mt-5">
        <h4>UBICACION</h4>
          <iframe 
          src="{{ $data['url_google_maps']}}" 
          width="100%" 
          height="300" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy"></iframe>
        </div>
      @endif
      
      </div>
      <div class="row mt-5 mb-3">
        <h4>PROYECTOS SIMILARES</h4>
        @foreach ($similarprojects as $similarproject)
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div id="cardSimilarProject" class="card mb-2 position-relative" style="width: 17rem;">
                <a style="text-decoration: none" href="{{ route('projects.viewProject', 'Adra') }}">
                  <img class="img-fluid" style="height: 180px" src="{{ asset('/img/projects/adra/1.webp') }}" class="card-img-top" alt="Proyecto Adra - Casa Credito Promotora">
                </a>
                  <div class="position-absolute">
                  <p>Venta</p>
                </div>
                <div class="card-body bg-light">
                  <h4>ADRA</h4>
                  <h5 class="card-title">Desde USD 99.000</h5>
                  <p class="card-text fw-bold">Sector Edificio Vista Linda</p>
                  <p class="card-text text-muted">Cuenca, Azuay</p>
                  <div class="row mt-3">
                    <div class="col-sm-6 d-flex align-items-center">
                      <i class="fas fa-building"></i>
                      <p>Venta</p>
                    </div>
                    <div class="col-sm-6 d-flex align-items-center">
                      <i class="fas fa-calendar-week"></i>
                      <p>Inmediata</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        @endforeach
        <div class="col-12 col-sm-6 col-md-6 col-lg-3" style="display: none">
          <div id="cardSimilarProject" class="card mb-2 position-relative" style="width: 17rem;">
            <a style="text-decoration: none" href="{{ route('projects.viewProject', 'Futura Narancay') }}">
              <img class="img-fluid" style="height: 180px" src="{{ asset('/img/projects/futuranarancay/1.webp') }}" class="card-img-top" alt="Proyecto Futura Narancay - Casa Credito Promotora">
            </a>
            <div class="position-absolute">
              <p>Venta</p>
            </div>
            <div class="card-body bg-light">
              <h4>FUTURA NARANCAY</h4>
              <h5 class="card-title">Desde USD 78.000</h5>
              <p class="card-text fw-bold">Narancay</p>
              <p class="card-text text-muted">Cuenca, Azuay</p>
              <div class="row mt-3">
                <div class="col-sm-6 d-flex align-items-center">
                  <i class="fas fa-building"></i>
                  <p>Venta</p>
                </div>
                <div class="col-sm-6 d-flex align-items-center">
                  <i class="fas fa-calendar-week"></i>
                  <p>Inmediata</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-none">
          <div id="cardSimilarProject" class="card mb-2 position-relative" style="width: 17rem;">
            <a style="text-decoration: none" href="{{ route('projects.viewProject', 'Toscana') }}">
              <img class="img-fluid" style="height: 180px" src="{{ asset('/img/projects/toscana/1.webp') }}" class="card-img-top" alt="Proyecto Toscana - Casa Credito Promotora">
            </a>
            <div class="position-absolute">
              <p>Venta</p>
            </div>
            <div class="card-body bg-light">
              <h4>TOSCANA</h4>
              <h5 class="card-title">Desde USD 150.000</h5>
              <p class="card-text fw-bold">Challuabamba</p>
              <p class="card-text text-muted">Cuenca, Azuay</p>
              <div class="row mt-3">
                <div class="col-sm-6 d-flex align-items-center">
                  <i class="fas fa-building"></i>
                  <p>Venta</p>
                </div>
                <div class="col-sm-6 d-flex align-items-center">
                  <i class="fas fa-calendar-week"></i>
                  <p>Inmediata</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @elseif(isset($project))

  <section style="height: 800px; margin-top: 50px; background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url('{{ $project->img_header != null ? asset('uploads/projects/900/'.$project->img_header) : asset('uploads/projects/'.$images[1]) }}')">
    <div class="d-flex justify-content-center align-items-center" style="height: 900px">
      <div>
        <h1 class="text-white display-1 fw-bold" style="margin-bottom: 0px">{{ strtoupper($project->project_name) }}</h1>
        <p class="w-100 text-white fw-bold txt-type" style="text-align: right; margin-top:-10px; font-size: 25px">{{ strtoupper($project->type) }}</p>
        <div class="mt-5 text-center">
          <a href="#contact_form" class="btn btn-light fw-bold px-5" style="scroll-behavior: smooth">CONSULTAR</a href="#contact_form">
        </div>
      </div>
    </div>
  </section>

  <section class="container px-5 mt-5">
    <div class="row">
      <div class="col-sm-8 position-relative">
        <img data-aos="fade-up" class="img-top" width="100%" height="500px" src="{{ $project->img_top != null ? asset('uploads/projects/900/'.$project->img_top) : asset('uploads/projects/900/'.$images[2]) }}" alt="">
        <div data-aos="fade-left" class="d-flex justify-content-end txt-inside-image-top" style="margin-top: -150px; margin-right: -200px;">
          <div class="bg-white d-flex align-items-center">
            @php
              $test = explode(" ", $project->txt_description);
              $media = count($test) / 2;

              $test2 = explode(" ", $project->txt_inside_img);
              $media2 = count($test2) / 2;
            @endphp
            <h2 style="-webkit-text-stroke: 1px black; color: white; font-size: 7rem; font-weight: bold; line-height: 5rem; padding-top: 50px; padding-bottom: 50px; padding-left: 50px"> {{ $test2[0] }} <br> <span class="subtitles" style="color: #000000; font-size: 4rem;">{{ $test2[1]}}</span></h2>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div data-aos="fade-up" class="d-flex align-items-center justify-content-center txt-short-description" style="height: 400px">
          <p class="h4" style="font-style: italic">{{ $project->txt_description }}</p>
        </div>
      </div>
    </div>
  </section>

<section class="bg-light py-5">
  <section class="container">
    <div class="row">
      @if(count($list_properties)>0)
        @foreach($list_properties as $propertie)
          <div data-aos="fade-up" data-aos-duration="2000" class="col-sm-4 mb-5">
            <article class="text-center">
              <p class="h5 fw-bold mb-4">{{ strtoupper($propertie->title) }}</p>
              <div class="row">
                <div class="col-4 col-sm-4 border-end">
                  <div class="position-relative">
                    <img width="50px" src="{{ asset('img/bath-project.png') }}" alt="">
                  </div>
                  <div class="mt-3">
                    <span>{{ $propertie->bathrooms }}</span>
                  </div>
                </div>
                <div class="col-4 col-sm-4 border-end">
                  <img width="60px" src="{{ asset('img/bed-projects.png') }}" alt="">
                  <br>
                  <div class="mt-2">
                    <span>{{ $propertie->bedrooms }}</span>
                  </div>
                </div>
                <div class="col-4 col-sm-4">
                  <img width="50px" src="{{ asset('img/garaje-projects.png') }}" alt="">
                  <br>
                  <div class="mt-3">
                    <span>{{ $propertie->garage }}</span>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-center mt-4">
                <a href="#" class="btn btn-outline-dark rounded-0">MÁS INFO</a>
              </div>
            </article>
          </div>
        @endforeach
      @endif
    </div>
  </section>
</section>

<section class="container">
  <section class="row my-5">
    <div data-aos="fade-up" class="col-12 col-sm-12 col-md-12 col-xl-3 txt-vertical" style="text-orientation: mixed; writing-mode: vertical-lr; transform: rotate(180deg)">
      <section>
        <p class="subtitles" style="-webkit-text-stroke: 1px black; color: white; font-size: 5rem; font-weight: bold; width: 900px;">IT'S ALL <span class="subtitles" style="-webkit-text-stroke: 1px black; color: black; font-size: 3rem">YOURS</span></p>
      </section>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-xl-9 d-flex align-items-center justify-content-center">
      <div>
        <div class="row">
          <div class="col-6 col-sm-4 mb-3">
            <article class="position-relative">
              <img class="img-fluid" src="{{ asset('uploads/projects/900/'.$images[2]) }}" alt="">
              {{-- <div class="position-absolute top-0 start-0 bg-white" style="margin: 0px; padding: 0px">
                <span class="py-1 px-3">RESTAURANTE DE AUTOR</span>
              </div> --}}
            </article>
          </div>
          <div class=" col-6 col-sm-4 mb-3">
            <article>
              <img class="img-fluid" src="{{ asset('uploads/projects/900/'.$images[3]) }}" alt="">
            </article>
          </div>
          <div class=" col-6 col-sm-4 mb-3">
            <article>
              <img class="img-fluid" src="{{ asset('uploads/projects/900/'.$images[4]) }}" alt="">
            </article>
          </div>    
          <div class="col-6 col-sm-4 mb-3">
            <article>
              <img class="img-fluid" src="{{ asset('uploads/projects/900/'.$images[5]) }}" alt="">
            </article>
          </div>
          @if(count($images)>5)
            <div class=" col-6 col-sm-4 mb-3">
              <article>
                <img class="img-fluid" src="{{ asset('uploads/projects/900/'.$images[6]) }}" alt="">
              </article>
            </div>
          @endif
          @if(count($images)>6)
            <div class="col-6 col-sm-4 mb-3">
              <article>
                <img class="img-fluid" src="{{ asset('uploads/projects/900/'.$images[7]) }}" alt="">
              </article>
            </div>
          @endif
        </div>
        <div class="row">
        </div>
      </div>
    </div>
  </section>
</section>

@if($project->entrance != null || $project->dues != null || $project->bank_credit != null)
<section class="bg-light py-5">
  <section class="container my-5">
    <section class="d-flex justify-content-center">
      <h2 class="subtitles" style="-webkit-text-stroke: 1px black; color: white; font-size: 5rem; font-weight: bold;">FINANCIAMIENTO</h2>
    </section>
    <section class="row">
      <div class="col-sm-4">
        <article class="text-center">
          <span style="-webkit-text-stroke: 1px black; color: black; font-size: 5rem; font-weight: bold;">{{ $project->entrance }}%</span>
          <br>
          <span>ENTRADA</span>
        </article>
      </div>
      <div class="col-sm-4">
        <article class="text-center">
          <span style="-webkit-text-stroke: 1px black; color: black; font-size: 5rem; font-weight: bold;">{{ $project->dues }}</span>
          <br>
          <span>CUOTAS</span>
        </article>
      </div>
      <div class="col-sm-4">
        <article class="text-center">
          <span style="-webkit-text-stroke: 1px black; color: black; font-size: 5rem; font-weight: bold;">{{ $project->bank_credit }}%</span>
          <br>
          <span>CREDITO BANCARIO</span>
        </article>
      </div>
    </section>
  </section>
</section>
@endif

<section class="container my-5">
    <section class="d-flex justify-content-center">
      <h2 class="mb-5">CALCULA TU CRÉDITO</h2>
    </section>
    <section class="row">
      <div class="col-sm-4">
        <div class="mb-5">
          <p>CANTIDAD TOTAL</p>
          <div class="d-flex">
            <span class="d-flex align-items-center bg-light px-3 py-2 border-end rounded-0">$</span>
            <input type="number" class="form-control border-0 bg-light border-start rounded-0">
          </div>
        </div>
        <div class="mb-5">
          <p>TASA DE INTERES</p>
          <div class="d-flex">
            <span class="d-flex align-items-center bg-light px-3 py-2 border-end rounded-0">$</span>
            <input type="number" class="form-control border-0 bg-light border-start rounded-0">
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="mb-5">
          <p>ENTRADA</p>
          <div class="d-flex">
            <span class="d-flex align-items-center bg-light px-3 py-2 border-end rounded-0">$</span>
            <input type="number" class="form-control border-0 bg-light border-start rounded-0">
          </div>
        </div>
        <div class="mb-5">
          <p>TÉRMINOS DEL PRÉSTAMO (AÑOS)</p>
          <div class="d-flex">
              <span class="d-flex align-items-center bg-light px-3 py-2 border-end rounded-0">$</span>
              <input type="number" class="form-control border-0 bg-light border-start rounded-0">
            </div>
          </div>
        </div>
        <div class="col-sm-4 d-flex align-items-center">
          <div class="w-100">
            <p>ÍNTERES PRINCIPAL</p>
            <div class="d-flex">
              <span class="d-flex align-items-center bg-light px-3 py-2 border-end rounded-0">$</span>
              <input type="number" class="form-control border-0 bg-light border-start rounded-0">
            </div>
            <div class="d-flex justify-content-center mt-2">
              <button class="btn btn-dark">CALCULAR</button>
            </div>
          </div>
        </div>
      </section>
  </section>

<section class="mt-5">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1992.3422529348652!2d-79.01088986117757!3d-2.9068842205078607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd1911fa24b8a3%3A0x253fdcb31d8b1517!2sCasa%20Cr%C3%A9dito%20Promotora!5e0!3m2!1ses-419!2sec!4v1690924563410!5m2!1ses-419!2sec" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="container my-5" id="contact_form">
  <section class="row">
    <div class="col-sm-5">
      <h2 class="border-bottom border-danger subtitles" style="-webkit-text-stroke: 1px black; color: white; font-size: 5rem; font-weight: bold;">QUIERO MÁS <br> <span class="subtitles" style="color: black; font-size: 4rem">INFORMACIÓN</span></h2>
      <p style="font-style: italic; font-size: 20px; font-weight: 100">Contáctanos y recibe la mejor asesoría</p>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-xl-7 bg-light py-5 px-5">
      <section>
        <div>
          <form action="{{route('contactanos.store')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col mb-4">
                <input type="hidden" name="interest" value="{{ $project->project_name }}">
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
              <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=+593989798238&text=Deseo%20saber%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20proyecto%20{{$project->project_name}}">Contactar por WhatsApp</a>
            </div>
          </form>
        </div>
      </section>
    </div>
  </section>
</section>

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




    {{-- <div class="container pt-5">
      <h1>@if(isset($project)) {{ $project->type . " " . $project->project_name }} @endif</h1>
      <h5><i class="fas fa-map-marker-alt mx-1" style="color: red"></i><b> Ubicación:</b> {{$project->state." > ".$project->city." > ".$project->address}}</h5>
    </div>

      <div class="imgs-header mt-3">
      <div class="row mb-3">
        <div class="col-sm-6 col-12 mt-3">
          <div class="column">
            <img class="img-fluid w-100 h-100 rounded" src="@if(isset($data)){{url('img/projects/'.$data['name_folder'].'/1.webp')}} @elseif(isset($listing)) https://casacredito.com/uploads/listing/600/{{$images[1]}} @elseif(isset($project)) {{asset('uploads/projects/900/'.$images[1])}} @endif" class="hover-shadow">
          </div>
        </div>

      <div class="col-sm-6 col-12 mt-3 pt-4">
        <div class="row">
          <div class="col-sm-6 col-6">
            <div class="column">
              <img width="100%" class="img-fluid rounded" src="@if(isset($data)){{url('img/projects/'.$data['name_folder'].'/2.webp')}} @elseif(isset($listing)) https://casacredito.com/uploads/listing/600/{{$images[2]}} @elseif(isset($project)) {{asset('uploads/projects/600/'.$images[2])}} @endif" class="hover-shadow">
            </div>
          </div>
          <div class="col-sm-6 col-6">
            <div class="column">
              <img class="img-fluid rounded" src="@if(isset($data)){{url('img/projects/'.$data['name_folder'].'/3.webp')}} @elseif(isset($listing)) https://casacredito.com/uploads/listing/600/{{$images[3]}} @elseif(isset($project)) {{asset('uploads/projects/600/'.$images[3])}} @endif" class="hover-shadow">
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-sm-6 col-6">
            <div class="column">
              <img class="img-fluid rounded" src="@if(isset($data)){{url('img/projects/'.$data['name_folder'].'/4.webp')}} @elseif(isset($listing)) https://casacredito.com/uploads/listing/600/{{$images[4]}} @elseif(isset($project)) {{asset('uploads/projects/600/'.$images[4])}} @endif" class="hover-shadow">
            </div>
          </div>
          <div class="col-sm-6 col-6">
            <div class="column position-relative">
              <img class="img-fluid rounded" style="filter: brightness(50%)" src="@if(isset($data)){{url('img/projects/'.$data['name_folder'].'/5.webp')}} @elseif(isset($listing)) https://casacredito.com/uploads/listing/600/{{$images[5]}} @elseif(isset($project)) {{asset('uploads/projects/600/'.$images[5])}} @endif" onclick="openModal();currentSlide(5)" class="hover-shadow">
              <div class="position-absolute top-50 start-50 translate-middle">
                <button id="btnVerMasFotos" type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalImages">Ver más fotos</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="modalImages">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <p>@if(isset($data)){{ $data['nombreProyecto']}}@elseif(isset($listing)){{$listing->listing_title}}@elseif(isset($project)){{ $project->type . " " . $project->project_name}}@endif</p>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              @for ($i = 1; $i <= $count_images; $i++)
                <div class="carousel-item @if($i == 1) active @endif position-relative">
                  <img src="@if(isset($data)){{url('img/projects/'.$data['name_folder'].'/'.$i.'.'.$data['extension'])}}@elseif(isset($listing)) https://casacredito.com/uploads/listing/600/{{$images[$i]}} @elseif(isset($project)) {{asset('uploads/projects/600/'.$images[$i])}} @endif" class="d-block w-100" alt="...">
                  <div class="position-absolute bg-danger text-light rounded-pill px-2" style="top: 8px; left: 5px">
                    {{$i}}/{{$count_images}}
                  </div>
                </div>
              @endfor
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="row py-4">
          <p class="lh-lg" style="text-align: justify">
            @if(isset($data)){!! $data['descripcion'] !!} @elseif(isset($listing)) {!!$listing->listing_description!!} @elseif(isset($project)) {{$project->description}} @endif
          </p>
        </div>
        @if(count($list_properties)>0)
          @foreach ($list_properties as $propertie)
          <div class="row border-top border-bottom border-3 border-danger pt-3 mb-5">
            <div class="card-project">
              <h5>{{$propertie->title}}</h5>
              <h4>${{number_format($propertie->price)}}</h4>
            </div>
            <div class="row">
              <div class="col-sm-5">
                <div class="mb-3">
                  <i class="fas fa-expand-arrows-alt d-inline text-danger"></i>
                  <p class="d-inline">Area Total {{ $propertie->total_area }} m<sup>2</sup></p>
                </div>
                <div class="mb-3">
                  <i class="fas fa-ruler-vertical d-inline text-danger"></i>
                  <p class="d-inline">Area Interior {{ $propertie->indoor_area}} m<sup>2</sup></p>
                </div>
                <div class="mb-3">
                  <i class="fas fa-car d-inline text-danger"></i>
                  <p class="d-inline">{{ $propertie->garage }} Parqueadero(s)</p>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="mb-3">
                  <i class="fas fa-bed d-inline text-danger"></i>
                  <p class="d-inline">{{ $propertie->bedrooms }} habitaciones</p>
                </div>
                <div class="mb-3">
                  <i class="fas fa-bath d-inline text-danger"></i>
                  <p class="d-inline">{{ $propertie->bathrooms }} baños</p>
                </div>
              </div>
            </div>
          </div>

          <div class="modal" id="modalPlanos">
            <div class="modal-dialog">
              <div class="modal-content">
        
                <div class="modal-header">
                  <h4 class="modal-title">{{ $propertie->title }}</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
        
                <div class="modal-body">
                  <img id="imgPlanos" class="img-fluid" src="" alt="">
                </div>
              </div>
            </div>
          </div>
            
          @endforeach
        @endif
        <div class="border rounded shadow position-relative mt-3 mx-1">
          <h6 class="position-absolute bg-danger w-auto text-white fw-bold px-4 py-1">Características</h6>
          <div class="row mt-5">
            @if(isset($project->benefits))
            <div class="col-sm-6">
              <p class="fw-bold ms-3">Generales</p>
                @foreach (explode(',', $project->benefits) as $benefit)
                <ul class="mt-3">
                  <li>{{ $benefit }}</li>  
                </ul>
                @endforeach
              </div>
            @endif
            @if(isset($project->services))
            <div class="col-sm-6">
              <p class="fw-bold ms-3">Servicios</p>
                @foreach (explode(',', $project->services) as $service)
                <ul class="mt-3">
                  <li>{{ $service }}</li>
                </ul>
                @endforeach
              </div>
            @endif
          </div>
        </div> 
        <div class="mt-3 mb-3">
          @if(isset($project->communal_areas))
            <div class="postion-relative border mx-1 rounded shadow mt-3">
              <h6 class="mb-3 position-absolute bg-danger text-white w-auto px-4 py-1 fw-bold">Areas Comunales</h6>
              <div class="row mt-5">
                @foreach (explode(',', $project->communal_areas) as $communal_area)    
                <div class="col-sm-4">
                  <ul>
                    <li>{{$communal_area}}</li>
                  </ul>
                </div>  
                @endforeach
              </div>
            </div>
          @endif
          @if(isset($data))
          <div class="mt-5">
            <h4>UBICACION</h4>
              <iframe 
              src="{{ $data['url_google_maps']}}" 
              width="100%" 
              height="300" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy"></iframe>
            </div>
          @endif
          
          </div>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-3">
        <div class="headerForm">
          @if(isset($data))
            <h5>SEPARE SU DEPARTAMENTO</h5>
            <h3>${{ $data['monto_reserva']}}</h3>
          @elseif(isset($listing))
            <h5>PRECIO</h5>
            <h3>${{number_format($listing->property_price)}}</h3>
          @endif
        </div>
        <div class="formEmail rounded" id="myHeader">
          <div class="shadow" style="padding-top: 20px; padding-left: 15px; padding-right: 15px; padding-bottom: 15px;">
            <p class="fw-bold">QUIERO MAS INFORMACION</p>
            <hr>
            <p>Contáctanos y recibe la mejor asesoría</p>
            <form id="form" class="inputs" action="@if(isset($data)){{ route('sendEmail.projects', [$data['nombreProyecto']]) }} @elseif(isset($listing)) {{route('sendEmail.projects', $listing->product_code)}} @elseif(isset($project)) # @endif" method="POST">
              @csrf
              <div class="mb-3 d-flex">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" autocomplete="off" required>
                <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" autocomplete="off" required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" required>
              </div>
              <div class="mb-3">
                <textarea class="form-control" name="mensaje" id="mensaje" rows="4">Hola, me interesa este inmueble y quiero que me contacten. Gracias</textarea>
              </div>
              <div class="d-grid gap-2">
                <button id="btnEnviar" type="submit" class="btn">Enviar</button>
                <a id="btnWhatsapp" target="_blank" class="btn" href="https://api.whatsapp.com/send?phone=+593983849073">Contactar por Whatsapp <i id="iconwpp" class="fab fa-whatsapp"></i></a>
              </div>
            </form>
            <p id="textoCondicionesEmail">Al enviar estás aceptando los términos de Uso y la Política de privacidad</p>
          </div>
        </div>
      </div>
    </div>
      <div class="row mt-5 mb-3">
        <h4>PROYECTOS SIMILARES</h4>
        @foreach ($similarprojects as $similarproject)
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div id="cardSimilarProject" class="card mb-2 position-relative" style="width: 17rem;">
                <a style="text-decoration: none" href="{{ route('projects.viewProject', [strtolower($similarproject->type), $similarproject->slug]) }}">
                  <img class="img-fluid" style="height: 180px" src="{{ asset('/uploads/projects/300/'.strtok($similarproject->images, "|")) }}" class="card-img-top" alt="{{$similarproject->type . " " . $similarproject->project_name}} - Casa Credito Promotora">
                </a>
                  <div class="position-absolute">
                  <p>Venta</p>
                </div>
                <div class="card-body bg-light">
                  <h4>{{$similarproject->project_name}}</h4>
                  <p class="card-text fw-bold">Sector {{ $similarproject->address}}</p>
                  <p class="card-text text-muted">{{$similarproject->state . ", " . $similarproject->city}}</p>
                  <div class="row mt-3">
                    <div class="col-sm-6 d-flex align-items-center">
                      <i class="fas fa-building"></i>
                      <p style="font-size: 12px">{{$similarproject->type}}</p>
                    </div>
                    <div class="col-sm-6 d-flex align-items-center">
                      <i class="fas fa-calendar-week"></i>
                      <p style="font-size: 12px">Inmediata</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        @endforeach
      </div>
    </div>
  </div> --}}
  @endif

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


  
    
@endsection

@section('section-scripts')
<script src="{{ asset('js/partners.js') }}"></script>
    <script>
      // Open the Modal
      function openModal() {
        document.getElementById("modalImages").style.display = "block";
      }
      
      // Close the Modal
      function closeModal() {
        document.getElementById("modalImages").style.display = "none";
      }
      
      function setSrcImage(ruta, carpeta){
        var imagenPlano = document.getElementById('imgPlanos');
        console.log(ruta);
        imagenPlano.src = "../img/projects/"+carpeta+"/"+ruta;
      }
      </script>
@endsection