@extends('layouts.plantilla')

@section('title', 'Proyecto ' . $data['nombreProyecto'])

@section('content-head')
    <style>
      body{
        color: rgb(45, 67, 71)
      }

      .imgs-header > .row > .col-sm-6 .column > img:hover{
        transform: scale(1.1);
        -webkit-transition: transform 1s ease-out;
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

      /* The Modal (background) */
      .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 120px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.523);
      }

      /* Modal Content */
      .modal-content {
        position: relative;
        background-color: #d8717100;
        margin: auto;
        padding: 0;
        width: 70%;
        max-width: 65%;
      }

      /* The Close Button */
      .close {
        color: white;
        position: absolute;
        top: 100px;
        right: 15px;
        font-size: 50px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
      }

      /* Hide the slides by default */
      .mySlides {
        display: none;
      }

      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
      }

      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.612);
      }

      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }

      /* Caption text */
      .caption-container {
        text-align: center;
        background-color: rgba(128, 126, 126, 0.19);
        padding: 2px 16px;
        color: white;
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

      @media screen and (max-width: 580px){
        .modal-content{
          max-width: 70%;
        }
      }

      .inputs input, .inputs textarea{
        font-size: 13px;
      }

      .inputs #btnLlamar{
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

      .card-body{
        background-color: rgb(239, 250, 253);
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

    </style>
@endsection

@section('content')

  <div class="container pt-5 mt-3">
    <h1>DEPARTAMENTOS ADRA</h1>
    <p>Ubicacion: Azuay > Cuenca > Sector Yanuncay - Universidad de Cuenca</p>
  </div>

    <div class="imgs-header mt-3">
     <!-- Images used to open the lightbox -->
    <div class="row mb-3">
      <div class="col-sm-6 col-12 mt-3">
        <div class="column">
          <img class="img-fluid rounded" src="{{url('img/projects/'.$data['name_folder'].'/1.webp')}}" onclick="openModal();currentSlide(1)" class="hover-shadow">
        </div>
      </div>

    <div class="col-sm-6 col-12 mt-3">
      <div class="row">
        <div class="col-sm-6 col-6">
          <div class="column">
            <img width="100%" class="img-fluid rounded" src="{{url('img/projects/'.$data['name_folder'].'/2.'.$data['extension'])}}" onclick="openModal();currentSlide(2)" class="hover-shadow">
          </div>
        </div>
        <div class="col-sm-6 col-6">
          <div class="column">
            <img class="img-fluid rounded" src="{{url('img/projects/'.$data['name_folder'].'/3.'.$data['extension'])}}" onclick="openModal();currentSlide(3)" class="hover-shadow">
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-sm-6 col-6">
          <div class="column">
            <img class="img-fluid rounded" src="{{url('img/projects/'.$data['name_folder'].'/4.'.$data['extension'])}}" onclick="openModal();currentSlide(4)" class="hover-shadow">
          </div>
        </div>
        <div class="col-sm-6 col-6">
          <div class="column">
            <img class="img-fluid rounded" src="{{url('img/projects/'.$data['name_folder'].'/5.'.$data['extension'])}}" onclick="openModal();currentSlide(5)" class="hover-shadow">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    @for($i = 1; $i <= $data['num_imagenes']; $i++)
      <div class="mySlides">
        <div class="numbertext">{{$i}} / {{$data['num_imagenes']}}</div>
        <img class="img-fluid" src="{{url('img/projects/'.$data['name_folder'].'/'.$i.'.'.$data['extension'])}}" style="width:100%">
      </div>
    @endfor

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div> 
</div> 

<!--CONTENIDO-->
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <div class="row">
        <p>¡Departamentos con la mejor vista a la ciudad!</p>
      </div>
      <div class="row">
        <p>
          El espacio perfecto para vivir!. Te ofrecemos 5 exclusivos departamentos para tu elección. Ubicación referencial: al Sur
          de la ciudad de Cuenca, disponen de una excelente y privilegiada vista a la ciudad debido a que se encuentra situada cerca
          del mirador de Turi
        </p>
      </div>
      <div class="row">
        <div class="card-project">
          <h5>DEPARTAMENTO 1</h5>
          <h4>$245.000</h4>
        </div>
        <!--SECOND CARD-->
        <div class="row">
          <div class="col-sm-5">
            <div class="mb-3">
              <i class="fas fa-expand-arrows-alt d-inline"></i>
              <p class="d-inline">Area Total 226.17m2</p>
            </div>
            <div class="mb-3">
              <i class="fas fa-ruler-vertical d-inline"></i>
              <p class="d-inline">Area Interior 143.42m2</p>
            </div>
            <div class="mb-3">
              <i class="fas fa-car d-inline"></i>
              <p class="d-inline">2 Parqueaderos</p>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="mb-3">
              <i class="fas fa-bed d-inline"></i>
              <p class="d-inline">3 habitaciones</p>
            </div>
            <div class="mb-3">
              <i class="fas fa-bath d-inline"></i>
              <p class="d-inline">4 baños</p>
            </div>
          </div>
          <div class="col-sm-2" style="position: relative">
            <button class="btn btn-warning rounded">Ver planos ></button>
          </div>
        </div>
        <hr>
      </div>
      <!--SECOND CARD-->
      <div class="row">
        <div class="card-project">
          <h5>DEPARTAMENTO 2</h5>
          <h4>$245.000</h4>
        </div>
        <div class="row">
          <div class="col-sm-5">
            <div class="mb-3">
              <i class="fas fa-expand-arrows-alt d-inline"></i>
              <p class="d-inline">Area Total 226.17m2</p>
            </div>
            <div class="mb-3">
              <i class="fas fa-ruler-vertical d-inline"></i>
              <p class="d-inline">Area Interior 143.42m2</p>
            </div>
            <div class="mb-3">
              <i class="fas fa-car d-inline"></i>
              <p class="d-inline">2 Parqueaderos</p>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="mb-3">
              <i class="fas fa-bed d-inline"></i>
              <p class="d-inline">3 habitaciones</p>
            </div>
            <div class="mb-3">
              <i class="fas fa-bath d-inline"></i>
              <p class="d-inline">4 baños</p>
            </div>
          </div>
          <div class="col-sm-2" style="position: relative">
            <button class="btn btn-warning rounded">Ver planos ></button>
          </div>
        </div>
        <hr>
      </div>
      <div class="row">
        <h4>Características</h4>
        <div class="col-sm-6">
          <h5>Generales</h5>
          <p>Jardin(es)</p>
          <p>Acabados de lujo</p>
          <p>Ascensor(es): 2</p>
          <p>Seguridad</p>
        </div>
        <div class="col-sm-6">
          <h5>Servicios</h5>
          <p>Video vigilancia</p>
          <p>Seguridad contra incendios</p>
          <p>Planta de emergencia</p>
          <p>Gimnasio</p>
        </div>
      </div> 
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-3">
      <h5>SEPARE SU DEPARTAMENTO</h5>
      <h3> CON $5.000</h3>
      <div class="formEmail rounded">
        <div style="padding-top: 20px; padding-left: 15px; padding-right: 15px; padding-bottom: 15px">
          <p class="fw-bold">QUIERO MAS INFORMACION</p>
          <hr>
          <p>Contáctanos y recibe la mejor asesoría</p>
          <form class="inputs">
            <div class="mb-3 d-flex">
              <input type="text" class="form-control" id="nombre" placeholder="Nombre y Apellido">
              <input type="number" class="form-control" id="telefono" placeholder="Teléfono">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="mensaje" id="mensaje" rows="4">Hola, me interesa este inmueble y quiero que me contacten. Gracias</textarea>
            </div>
            <div class="d-grid gap-2">
              <a id="btnLlamar" class="btn" href="">Llamar</a>
              <a id="btnWhatsapp" class="btn" href="">Contactar por Whatsapp <i id="iconwpp" class="fab fa-whatsapp"></i></a>
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
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6373817651033!2d-79.02524648539115!3d-2.9201979978730823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd22811a43422d%3A0x6730f8941aab3416!2sEdificio%20Vista%20Linda!5e0!3m2!1ses!2sec!4v1640116580170!5m2!1ses!2sec" 
        width="100%" 
        height="300" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy"></iframe>
    </div>
    <div class="row mt-3" style="background-color: gray; width: 100; height: 100px">
    
    </div>
    <div class="row mt-5 mb-3">
      <h4>PROYECTOS SIMILARES</h4>
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <div class="card mb-2 position-relative" style="width: 17rem;">
          <img class="img-fluid" style="height: 180px" src="{{ asset('/img/projects/adra/1.webp') }}" class="card-img-top" alt="Proyecto Adra - Casa Credito Promotora">
          <div class="position-absolute">
            <p>Venta</p>
          </div>
          <div class="card-body">
            <h5 class="card-title">USD 79.850</h5>
            <p class="card-text fw-bold">Calle Diego de Tapia</p>
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
        <div class="card mb-2 position-relative" style="width: 17rem;">
          <img class="img-fluid" style="height: 180px" src="{{ asset('/img/projects/futuranarancay/1.webp') }}" class="card-img-top" alt="Proyecto Futura Narancay - Casa Credito Promotora">
          <div class="position-absolute">
            <p>En planos</p>
          </div>
          <div class="card-body">
            <h5 class="card-title">USD 79.850</h5>
            <p class="card-text fw-bold">Calle Diego de Tapia</p>
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
        <div class="card mb-2 position-relative" style="width: 17rem;">
          <img class="img-fluid" style="height: 180px" src="{{ asset('/img/projects/toscana/1.webp') }}" class="card-img-top" alt="Proyecto Toscana - Casa Credito Promotora">
          <div class="position-absolute">
            <p>Construcción</p>
          </div>
          <div class="card-body">
            <h5 class="card-title">USD 79.850</h5>
            <p class="card-text fw-bold">Calle Diego de Tapia</p>
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

  
    
@endsection

@section('section-scripts')
    <script src="{{ asset('js/partners.js') }}"></script>
    <script>
      // Open the Modal
      function openModal() {
        document.getElementById("myModal").style.display = "block";
      }
      
      // Close the Modal
      function closeModal() {
        document.getElementById("myModal").style.display = "none";
      }
      
      var slideIndex = 1;
      showSlides(slideIndex);
      
      // Next/previous controls
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      
      // Thumbnail image controls
      function currentSlide(n) {
        console.log(n);
        showSlides(slideIndex = n);
      }
      
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
      }

      </script>
@endsection