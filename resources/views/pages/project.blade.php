@extends('layouts.plantilla')

@section('title', $data['tipo']."s " . $data['nombreProyecto'])

@section('content-head')

<meta name="title" content="Casa Crédito Promotora - {{ $data['tipo'] }}s {{ $data['nombreProyecto']}}">
<meta name="description" content="{!! $data['descripcion'] !!}">

<meta property="og:type" content="website">
<meta property="og:url" content="https://casacreditopromotora.com/proyectos/{{$data['nombreProyecto']}}">
<meta property="og:title" content="Casa Crédito Promotora - {{ $data['tipo']}}s {{ $data['nombreProyecto'] }}">
<meta property="og:description" content="{!! $data['descripcion'] !!}">
<meta property="og:image" content="{{url('img/projects/'.$data['name_folder'].'/1.webp')}}">

<meta property="product:availability" content="in stock">
<meta property="product:price:amount" content="@if($data['nombreProyecto'] === "Adra") {{$data['departamentos'][2]['precio']}} @elseif($data['nombreProyecto'] === "Futura Narancay") {{$data['departamentos'][1]['precio']}} @elseif($data['nombreProyecto'] === "Toscana") {{$data['departamentos'][7]['precio']}} @endif">
<meta property="product:retailer_item_id" content="{{ strtoupper(substr($data['nombreProyecto'], 0, 3)) }}-001">
<meta property="product:price:currency" content="USD">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
      body{
        color: rgb(45, 67, 71)
      }

      .row > .column {
        padding: 0 8px;
      }

      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* Create four equal columns that floats next to eachother */
      .column {
        float: left;
        width: 100%;
      }

      img.demo {
        opacity: 0.6;
      }

      .active,
      .demo:hover {
        opacity: 1;
      }

      img.hover-shadow {
        transition: 0.3s;
      }

      .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.074), 0 6px 20px 0 rgba(0, 0, 0, 0.109);
      }

      .imgs-header{
          /* background-color: #e2e0e0;  */
          padding: 10px;
        }

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
    </style>
@endsection

@section('content')

  <div class="container pt-5 mt-3">
    <h1> {{ Str::upper($data['tipo'] . "S " . $data['nombreProyecto']) }}</h1>
    <h5><i class="fas fa-map-marker-alt mx-1" style="color: red"></i><b> Ubicación:</b> {{ $data['canton'] }} > {{ $data['ciudad'] }} > {{ $data['sector'] }}</h5>
  </div>

    <div class="imgs-header mt-3">
     <!-- Images used to open the lightbox -->
    <div class="row mb-3">
      <div class="col-sm-6 col-12 mt-3">
        <div class="column">
          <img class="img-fluid rounded" src="{{url('img/projects/'.$data['name_folder'].'/1.webp')}}" class="hover-shadow">
        </div>
      </div>

    <div class="col-sm-6 col-12 mt-3">
      <div class="row">
        <div class="col-sm-6 col-6">
          <div class="column">
            <img width="100%" class="img-fluid rounded" src="{{url('img/projects/'.$data['name_folder'].'/2.'.$data['extension'])}}" class="hover-shadow">
          </div>
        </div>
        <div class="col-sm-6 col-6">
          <div class="column">
            <img class="img-fluid rounded" src="{{url('img/projects/'.$data['name_folder'].'/3.'.$data['extension'])}}" class="hover-shadow">
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-sm-6 col-6">
          <div class="column">
            <img class="img-fluid rounded" src="{{url('img/projects/'.$data['name_folder'].'/4.'.$data['extension'])}}" class="hover-shadow">
          </div>
        </div>
        <div class="col-sm-6 col-6">
          <div class="column position-relative">
            <img class="img-fluid rounded" style="filter: brightness(50%)" src="{{url('img/projects/'.$data['name_folder'].'/5.'.$data['extension'])}}" onclick="openModal();currentSlide(5)" class="hover-shadow">
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

      <!-- Modal Header -->
      <div class="modal-header">
        <h1>{{ $data['nombreProyecto']}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            @for ($i = 1; $i <= $data['num_imagenes']; $i++)
              <div class="carousel-item @if($i == 1) active @endif">
                <img src="{{url('img/projects/'.$data['name_folder'].'/'.$i.'.'.$data['extension'])}}" class="d-block w-100" alt="...">
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
          {!! $data['descripcion'] !!}
        </p>
      </div>
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
      <div class="row">
        <h4>Características</h4>
        <div class="col-sm-6">
          <h5>Generales</h5>
          @foreach ($data['caracteristicas']['generales'] as $general)
            <p>{{ $general }}</p>  
          @endforeach
        </div>
        <div class="col-sm-6">
          <h5>Servicios</h5>
          @foreach ($data['caracteristicas']['servicios'] as $services)
            <p>{{ $services }}</p>
          @endforeach
        </div>
      </div> 
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-3">
      <div class="headerForm">
        <h5>SEPARE SU DEPARTAMENTO</h5>
        <h3> CON ${{ $data['monto_reserva']}}</h3>
      </div>
      <div class="formEmail rounded" id="myHeader">
        <div style="padding-top: 20px; padding-left: 15px; padding-right: 15px; padding-bottom: 15px">
          <p class="fw-bold">QUIERO MAS INFORMACION</p>
          <hr>
          <p>Contáctanos y recibe la mejor asesoría</p>
          <form id="form" class="inputs" action="{{ route('sendEmail.projects', [$data['nombreProyecto']]) }}" method="POST">
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
              <a id="btnWhatsapp" target="_blank" class="btn" href="https://api.whatsapp.com/send?phone=+593983849073&text=Me%20gustaria%20conocer%20los%20{{Str::lower($data['tipo'])}}s%20del%20conjunto%20residencial%20{{$data['nombreProyecto']}}">Contactar por Whatsapp <i id="iconwpp" class="fab fa-whatsapp"></i></a>
            </div>
          </form>
          <p id="textoCondicionesEmail">Al enviar estás aceptando los términos de Uso y la Política de privacidad</p>
        </div>
      </div>
    </div>
  </div>
  <div>
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
    
    </div>
    <div class="row mt-5 mb-3">
      <h4>PROYECTOS SIMILARES</h4>
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
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
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
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
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