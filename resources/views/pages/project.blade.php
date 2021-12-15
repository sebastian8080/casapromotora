@extends('layouts.plantilla')

@section('title', 'Proyecto ' . $data['nombreProyecto'])

@section('content-head')
    <style>
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

      .div-departments:hover{
        background-color: #e2e0e0;
      }
    </style>
@endsection

@section('content')

  {{-- <div class="container mt-5 pt-5"> --}}

    <div class="imgs-header mt-5">
     <!-- Images used to open the lightbox -->
    <div class="row mb-3">
      <div class="col-sm-6 col-12 mt-3">
        <div class="column">
          <img class="img-fluid rounded" src="{{url('img/projects/'.$data['name_folder'].'/1.avif')}}" onclick="openModal();currentSlide(1)" class="hover-shadow">
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

    <div class="row">
    <!-- Thumbnail image controls -->
      {{-- @for($i = 1; $i <= $num_imagenes; $i++)
      <div class="column col-sm-3 col-6">
        <img class="demo" style="width: 100%" src="{{url('img/projects/'.$name_folder.'/'.$i.'.'.$extension)}}" onclick="currentSlide({{$i}})" alt="Proyecto {{$nombreProyecto}}">
      </div>
      @endfor --}}
    </div>


  </div> 
</div> 

  <div class="container">
    <div class="row mt-5">
        <div class="col-sm-8">
          <div class="row">
            <div class="col-sm-8">
              <h1 class="text-muted">{{ Str::upper($data['nombreProyecto']) }}</h1>
            </div>
            <div class="col-sm-4"></div>
          </div>

          <div data-aos="slide-up">
            <hr>
            <div class="row">
              @foreach ($data['departamentos'] as $departamento)
                  <div class="col text-center div-departments rounded">
                    <a class="active" style="text-decoration: none; color: black" href="{{ route('projects.viewProject', ['nombreProyecto' => $data['nombreProyecto'], 'num_department' => $departamento['num_departamento']] )}}"><i class="far fa-building mt-3"></i><h5>{{ $data['tipo'] }} {{ $departamento['num_departamento']}}</h5></a>
                  </div>
              @endforeach
            </div>
          </div>

          <div data-aos="slide-up">
            <hr>
            <div class="row">
              <div class="col-sm-6">
                <h1>{{ $data['tipo'] }} {{ $num_department}}</h1>
              </div>
              <div class="col-sm-6">
                <p class="h1 text-danger float-end">${{ $data['departamentos'][$num_department]['precio'] }}</p>
              </div>
            </div>
            @if ($data['departamentos']['1']['alicuota'] != null)
              <div class="row">
                <div class="col-sm-12">
                  <p class="h3 float-end">Alicuota <b>${{ $data['departamentos'][$num_department]['alicuota'] }}</b></p>
                </div>
              </div>
            @endif
            <div class="row mt-5 text-center">
              <div class="col-sm-3 col-6">
                <i class="fas fa-bed fa-2x" style="color: gray"></i><p>{{$data['departamentos'][$num_department]['num_habitaciones']}} habitaciones</p>
              </div>
              <div class="col-sm-3 col-6">
                <i class="fas fa-bath fa-2x" style="color: gray"></i><p>{{$data['departamentos'][$num_department]['num_baños']}} baños</p>
              </div>
              <div class="col-sm-3 col-6">
                <i class="fas fa-expand-arrows-alt fa-2x" style="color: gray"></i><p>{{ $data['departamentos'][$num_department]['area_total'] }} m2</p>
              </div>
              <div class="col-sm-3 col-6">
                <i class="fas fa-parking fa-2x" style="color: gray"></i><p>{{ $data['departamentos'][$num_department]['parqueadero'] }} parqueaderos</p>
              </div>
            </div>
          </div>

          <div data-aos="slide-up">
            <hr>
            @if ($data['departamentos'][$num_department]['contains_area'])
              <div class="row text-center">
                @if ($data['departamentos'][$num_department]['area_interior'] != null)
                  <div class="col">
                    <p class="h5 mt-5"><i class="fas fa-compress-arrows-alt m-1" style="color: rgb(206, 168, 87)"></i> Área Interior <b>{{ $data['departamentos'][$num_department]['area_interior'] }} m2</b></p>
                  </div>
                @endif

                @if ($data['departamentos'][$num_department]['area_verde'] != null)
                <div class="col">
                  <p class="h5 mt-5"><i class="fas fa-tree m-1" style="color: rgb(24, 198, 59)"></i> Área Verde <b>{{ $data['departamentos'][$num_department]['area_verde'] }} m2</b></p>
                </div>
                @endif
                @if ($data['departamentos'][$num_department]['area_parqueo'] != null)
                <div class="col">
                  <p class="h5 mt-5"><i class="fas fa-arrows-alt" style="color: rgb(155, 139, 139)"></i>  Área Parqueo <b>{{ $data['departamentos'][$num_department]['area_parqueo'] }} m2</b></p>
                </div>
                @endif
                @if ($data['departamentos'][$num_department]['area_bodega'] != null)
                <div class="col">
                  <p class="h5 mt-5"><i class="fas fa-warehouse" style="color: rgb(128, 73, 21)"></i> Área Bodega <b>{{ $data['departamentos'][$num_department]['area_bodega'] }} m2</b></p>
                </div>
                @endif
                @if ($data['departamentos'][$num_department]['area_terraza'] != null)
                <div class="col">
                  <p class="h5 mt-5"><i class="fas fa-expand-alt" style="color: rgb(50, 187, 167)"></i> Área Terraza <b>{{ $data['departamentos'][$num_department]['area_terraza'] }} m2</b></p>
                </div>
                @endif
              </div>  
              <div class="row text-center">
                @if ($data['departamentos'][$num_department]['area_total'] != null)
                <div class="col">
                  <p class="h4 mt-5"><i class="fas fa-building" style="color: rgb(202, 62, 62)"></i> ÁREA TOTAL <b>{{ $data['departamentos'][$num_department]['area_total'] }} m2</b></p>
                </div>
                @endif  
              </div>            
            @endif
          </div>

          <div data-aos="slide-up">
            <hr>
            <!--DIV MAPA DEL DEPARTAMENTO PLANO-->
            <div class="row d-flex align-items-center justify-content-center text-center">
              <h2 class="mt-4">Mapa del {{ $data['tipo'] }} </h2>
              <img class="img-fluid" style="width: 50%" src="{{ asset('img/projects/'.$data['name_folder'].'/'.$data['departamentos'][$num_department]['img_plano']) }}" alt="Mapa del departamento">
            </div>
          </div>

          <hr>
          <!--DIV IFRAME DE GOOGLE MAPS DEL LUGAR-->
          @if ($data['url_google_maps'] != null)
            <div class="text-center">
              <h2>Ubicación</h2>
              <iframe 
                src="{{ $data['url_google_maps']}}" 
                width="300" 
                height="300" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
                >
              </iframe>
            </div>
          @endif
        </div>


        <div class="col-sm-1"></div>


        <div class="col-sm-3 rounded mb-5" style="background: #f4f4f4">

          <h3 class="mt-3 text-center fw-bold">Deseo saber más</h3>

          <form class="mt-3" action="{{ route('sendEmail.projects') }}" method="POST">
            @csrf
            <div class="form-outline mb-4">
              <input type="text" id="nombre" name="nombre" class="form-control" autocomplete="off" required/>
              <label class="form-label" for="nombre">Nombre y Apellido</label>
            </div>
        
            <div class="form-outline mb-4">
              <input type="email" id="email" name="email" class="form-control" autocomplete="off" required />
              <label class="form-label" for="email">Correo electrónico</label>
            </div>

            <div class="form-outline mb-4">
              <input type="number" id="telefono" name="telefono" class="form-control" autocomplete="off" required/>
              <label class="form-label" for="telefono">Teléfono</label>
            </div>
          
            <div class="form-outline mb-4">
              <textarea class="form-control" name="mensaje" id="mensaje" rows="4" autocomplete="off" required>Me interesa saber más sobre el proyecto {{ $data['nombreProyecto'] }}</textarea>
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