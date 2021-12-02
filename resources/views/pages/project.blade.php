@extends('layouts.plantilla')

@section('title', 'Proyecto 1')

@section('content-head')
    <style>
      img:hover{
        transform: scale(1.1);
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
        padding-top: 30px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: black;
      }

      /* Modal Content */
      .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 60%;
      }

      /* The Close Button */
      .close {
        color: white;
        position: absolute;
        top: 10px;
        right: 25px;
        font-size: 35px;
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
        top: 35%;
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
        vertical-align: middle;
      }

      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
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
        background-color: black;
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
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
    </style>
@endsection

@section('content')

  <div class="container mt-5 pt-5">
     <!-- Images used to open the lightbox -->
  <div class="row">
    <div class="col-sm-6 col-6">
      <div class="column">
        <img class="img-fluid" src="{{url('img/projects/'.$name_folder.'/1.'.$extension)}}" onclick="openModal();currentSlide(1)" class="hover-shadow">
      </div>
    </div>

  <div class="col-sm-6 col-6">
    <div class="row">
      <div class="col-sm-6 col-6">
        <div class="column">
          <img width="100%" class="img-fluid" src="{{url('img/projects/'.$name_folder.'/2.'.$extension)}}" onclick="openModal();currentSlide(2)" class="hover-shadow">
        </div>
      </div>
      <div class="col-sm-6 col-6">
        <div class="column">
          <img class="img-fluid" src="{{url('img/projects/'.$name_folder.'/3.'.$extension)}}" onclick="openModal();currentSlide(3)" class="hover-shadow">
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-sm-6 col-6">
        <div class="column">
          <img class="img-fluid" src="{{url('img/projects/'.$name_folder.'/4.'.$extension)}}" onclick="openModal();currentSlide(4)" class="hover-shadow">
        </div>
      </div>
      <div class="col-sm-6 col-6">
        <div class="column">
          <img class="img-fluid" src="{{url('img/projects/'.$name_folder.'/5.'.$extension)}}" onclick="openModal();currentSlide(5)" class="hover-shadow">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    @for($i = 1; $i <= $num_imagenes; $i++)
    <div class="mySlides">
      <div class="numbertext">{{$i}} / {{$num_imagenes}}</div>
      <img class="img-fluid" src="{{url('img/projects/'.$name_folder.'/'.$i.'.'.$extension)}}" style="width:100%">
    </div>
    @endfor

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="row">
    <!-- Thumbnail image controls -->
      @for($i = 1; $i <= $num_imagenes; $i++)
      <div class="column col-sm-3 col-6">
        <img class="demo" style="width: 100%" src="{{url('img/projects/'.$name_folder.'/'.$i.'.'.$extension)}}" onclick="currentSlide({{$i}})" alt="Proyecto {{$nombreProyecto}}">
      </div>
      @endfor
    </div>


  </div>
</div> 

    <!--MODAL PARA VISUALIZAR LAS IMAGENES-->

    <div class="row mt-5">
        <div class="col-sm-8">
          <div class="row">
            <div class="col-sm-6">
              <h2>Proyecto {{ $nombreProyecto }}</h2>
            </div>
            <div class="col-sm-6">
                <p class="h1 text-danger float-end">$ 100.000</p>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-sm-3 col-6">
              <i class="fas fa-bed fa-2x" style="color: gray"></i><p>3 habitaciones</p>
            </div>
            <div class="col-sm-3 col-6">
              <i class="fas fa-bath fa-2x" style="color: gray"></i><p>1 baño</p>
            </div>
            <div class="col-sm-3 col-6">
              <i class="fas fa-expand-arrows-alt fa-2x" style="color: gray"></i><p>60 m2</p>
            </div>
            <div class="col-sm-3 col-6">
              <i class="fas fa-parking fa-2x" style="color: gray"></i><p>1 parquedero</p>
            </div>
          </div>

          <div class="row mt-5">
            <h4>Descripcion del proyecto</h4>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo aliquam delectus doloremque excepturi quia tempora eius laborum. 
              Praesentium minima aperiam ex, ab asperiores perferendis excepturi aut aliquam similique optio consequuntur!
            </p>
          </div>
        </div>

        <div class="col-sm-1"></div>


        <div class="col-sm-3 rounded mb-5" style="background: #f4f4f4">

          <h3 class="mt-3 text-center fw-bold">Deseo saber más</h3>

          <form class="mt-3">
            <div class="form-outline mb-4">
              <input type="text" id="nombre" class="form-control" />
              <label class="form-label" for="nombre">Nombre</label>
            </div>
        
            <div class="form-outline mb-4">
              <input type="email" id="email" class="form-control" />
              <label class="form-label" for="email">Correo electrónico</label>
            </div>

            <div class="form-outline mb-4">
              <input type="number" id="telefono" class="form-control" />
              <label class="form-label" for="telefono">Teléfono</label>
            </div>
          
            <div class="form-outline mb-4">
              <textarea class="form-control" id="mensaje" rows="4">Me interesa saber más sobre el proyecto {{ $nombreProyecto }}</textarea>
              <label class="form-label" for="mensaje">Mensaje</label>
            </div>
          
            <button type="submit" class="btn btn-outline-secondary btn-block mb-4 float-end">Enviar</button>
          </form>
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