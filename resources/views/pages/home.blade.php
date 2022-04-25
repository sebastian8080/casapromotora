@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content-head')
  
@endsection
    
@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="position: relative; justify-content: center; display: flex">
  <div class="carousel-inner">
      <div class="carousel-item active position-relative"  style="background:rgba(2, 2, 2, 0.5);">
        <img src="{{ asset('img/home/SLIDER-NUEVO-01-min.webp') }}" class="d-block w-100" alt="..." style="height: 550px; object-fit: cover; object-position: left center; filter: brightness(60%)">
        <div class="position-absolute top-50 translate-middle-y text-white" style="margin-left: 20%">
          <h1>TU PROPIEDAD, <br> Y TU FUTURO <br> NUESTRA EXPERIENCIA</h1>
          <p>¡ENCUENTRA EL PROYECTO IDEAL!</p>
        </div>
      </div>
      <div class="carousel-item position-relative"  style="background:rgba(2, 2, 2, 0.5);">
        <img src="{{ asset('img/home/img2-home.webp') }}" class="d-block w-100" alt="..." style="height: 550px;object-fit: cover; object-position: left center; filter: brightness(60%)">
        <div class="position-absolute top-50 translate-middle-y text-white" style="margin-left: 20%">
          <h1>TU PROPIEDAD, <br> Y TU FUTURO <br> NUESTRA EXPERIENCIA</h1>
          <p>¡ENCUENTRA EL PROYECTO IDEAL!</p>
        </div>
      </div>
      <div class="carousel-item position-relative"  style="background:rgba(2, 2, 2, 0.5);">
        <img src="{{ asset('img/home/img3-home.webp') }}" class="d-block w-100" alt="..." style="height: 550px;object-fit: cover; object-position: left center; filter: brightness(60%)">
        <div class="position-absolute top-50 translate-middle-y text-white" style="margin-left: 20%">
          <h1>TU PROPIEDAD, <br> Y TU FUTURO <br> NUESTRA EXPERIENCIA</h1>
          <p>¡ENCUENTRA EL PROYECTO IDEAL!</p>
        </div>
      </div>
  </div>
  <div class="d-flex justify-content-center" style="position: absolute; bottom: 0px; margin-bottom: -45px;">
    <div style="background-color: black; color: #ffffff; display: flex; padding: 30px; align-items: center">
      <h5 style="margin-right: 10px">¿Cuánto Vale Mi Propiedad?</h5>
      <button type="button" data-bs-toggle="modal" data-bs-target="#modalAvaluo" class="btn btn-outline-danger" style="margin-top: -10px; border-radius: 0px">SOLICITAR UN AVALÚO</button>
    </div>
  </div>
  {{-- <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a> --}}
</div>

    <div class="row mt-5 pt-5 mb-5" style="margin-left: 5%; margin-right: 5%">
      <div class="col-sm-2"></div>
      <div class="col-sm-3">
        <h1 style="font-size: 35px">¿CÓMO PODEMOS AYUDARTE?</h1>
      </div>
      <div class="col-sm-5 text-muted">
        <b>CASA CREDITO</b> es una empresa Promotora de Proyectos Inmobiliarios en Ecuador. Desarrollamos Soluciones Inmobiliarias Integrales en Vivienda,
          Comercio, Oficinas, Servicios y Hospitalidad, que se diferencian por la calidad e innovación percibida por el cliente, convirtiendo lo excepcional en un estilo de vida.
      </div>
      <div class="col-sm-2"></div>
      {{-- <div class="col-sm-3"></div>
      <div class="col-sm-6 second-row rounded">
        <p class="text-justify m-5">
          <b>CASA CREDITO</b> es una empresa Promotora de Proyectos Inmobiliarios en Ecuador. Desarrollamos Soluciones Inmobiliarias Integrales en Vivienda,
          Comercio, Oficinas, Servicios y Hospitalidad, que se diferencian por la calidad e innovación percibida por el cliente, convirtiendo lo excepcional en un estilo de vida.
        </p>
        <hr id="linea_pequeña" class="position-absolute bottom-0 start-50 translate-middle-x">
      </div>
      <div class="col-sm-3"></div> --}}
    </div>

    <!--EMPIEZA CONTAINER-->
    <div class="container">
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
                <div class="carousel-item active">
                  <img id="imgBanner1" style="width:100%; height: 100%" src="{{ asset('img/projects/adra/1.webp') }}" class="d-block img-fluid" alt="Departamentos Adra - Cuenca Casa Credito Promotora">
                  <div class="carousel-caption d-md-block">
                    <a style="text-decoration: none" href="{{ route('projects.viewProject', 'Adra') }}"><h3 class="texto-imagenes">ADRA</h3></a>
                    <p>Departamentos de lujo con una vista insuperable</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img id="imgBanner2" style="width: 100%; height: 100%" src="{{ asset('img/projects/futuranarancay/1.webp') }}" class="d-block img-fluid" alt="Departamentos Futura Narancay - Cuenca Casa Credito Promotora">
                  <div class="carousel-caption d-md-block">
                    <a style="text-decoration: none" href="{{ route('projects.viewProject', 'Futura Narancay') }}"><h3 class="texto-imagenes">FUTURA NARANCAY</h3></a>
                    <p>Departamentos con una  experiencia única en diseño y comodidad</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img id="imgBanner3" style="width: 100%; height: 100%" src="{{ asset('img/projects/toscana/1.webp') }}" class="d-block img-fluid" alt="Condominios Toscana - Cuenca">
                  <div class="carousel-caption d-md-block">
                    <a style="text-decoration: none" href="{{ route('projects.viewProject', 'Toscana') }}"><h3 class="texto-imagenes">TOSCANA</h3></a>
                    <p>Condominios con acabados modernos</p>
                  </div>
                </div>
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
              <img class="fila-imagenes" src="{{ asset('img/home/villas.webp') }}" width="100%" alt="Villas - Casa Credito Promotora">
            </a>
          </div>

          <div class="col-sm-4 hover-zoomin">
            <h1 class="fw-bold texto-imagenes">DEPARTAMENTOS</h1>
            <a href="#">
              <img class="fila-imagenes" src="{{ asset('img/home/departamentos.webp') }}" width="100%" alt="Departamentos - Casa Credito Promotora">
            </a>
          </div>

          <div class="col-sm-4 hover-zoomin">
            <h1 class="fw-bold texto-imagenes">SUITES</h1>
            <a href="#">
              <img class="fila-imagenes" src="{{ asset('img/home/suites.webp') }}" width="100%" alt="Suites - Casa Credito Promotora">
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
          <img src="{{ asset('img/home/FAMILIA-CREDITOS - copia.webp') }}" width="100%" class="img-fluid" alt="Creditos - Casa Credito Promotora">
          <div id="row6" class="position-absolute">
            <h1 id="text-row6" class="text-light">¡Lo que siempre <br>has querido!</h1>
            <button id="btn-row6" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Solicite un credito ></button>
          </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-danger">
                  <h5 class="modal-title text-white fw-bold" id="exampleModalLabel">RELLENE EL FORMULARIO Y NOS PONDREMOS EN CONTACTO</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="p-4" action="{{ route('send.mail.credito') }}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-12 col-sm-6">
                        <div class="mb-2">
                          <label for="cedula" class="form-label">Cédula</label>
                          <input type="text" class="form-control" id="cedula" name="cedula" required>
                        </div>
                        <div class="mb-2">
                          <label for="nombre" class="form-label">Nombre y Apellido</label>
                          <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-2">
                          <label for="telefono_celular" class="form-label">Teléfono / Celular</label>
                          <input type="number" class="form-control" id="telefono_celular" name="telefono_celular" required>
                        </div>
                        <div class="mb-2">
                          <label for="correo" class="form-label">Correo electrónico</label>
                          <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" name="correo" required>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 border-start">
                        <div class="mb-3">
                          <label for="mensaje" class="form-label">Mensaje</label>
                          <textarea type="text" class="form-control" id="mensaje" rows="3" name="mensaje" required></textarea>
                        </div>
                        <div class="mb-2" style="margin-top:1.3rem;">
                          <label for="monto" class="form-label">Monto $</label>
                          <input type="number" class="form-control" id="monto" name="monto" required>
                        </div>
                        <div class="mb-2">
                          <label for="tipo_credito" class="form-label">Tipo de crédito</label>
                          <select name="tipo_credito" id="tipo_credito" class="form-control" required>
                            <option value="">Seleccione</option>
                            <option value="Inmobiliario">Inmobiliario</option>
                            <option value="Vivienda">Vivienda</option>
                            <option value="Productivo">Productivo</option>
                          </select>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                          <button type="submit" class="btn btn-danger me-md-2 rounded-pill">Enviar mensaje</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  
  {{-- modal para solicitar avaluo --}}
  <div class="modal fade" id="modalAvaluo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #91232d">
          <h5 class="modal-title text-white" id="exampleModalLabel">SOLICITE UN AVALÚO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Nombre y Apellido:</label>
            <input type="text" name="name" id="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="phone">Teléfono:</label>
            <input type="number" name="phone" id="phone" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" id="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="comentario">Comentario:</label>
            <textarea name="comentario" id="comentario" rows="2" class="form-control"></textarea>
          </div>
          @php
              $types = DB::connection('mysql2')->table('listing_types')->get();
          @endphp
          <div class="form-group mt-2">
            <select name="type" id="type" class="form-select">
              <option value="">Tipo de propiedad</option>
              @foreach ($types as $type)
                  <option value="{{ $type->type_title}}">{{ $type->type_title}}</option>
              @endforeach
            </select>
          </div>
          @php
              $states = DB::connection('mysql2')->table('info_states')->where('country_id', 63)->get();
          @endphp
          <div class="d-flex">
            <div class="form-group mt-2" style="width: 100%; margin-right: 1px">
              <select name="state" id="state" class="form-control" required>
                <option value="">Seleccione provincia</option>
                @foreach ($states as $state)
                    <option value="{{$state->name}}" data-id={{$state->id}}>{{ $state->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-gropu mt-2" style="width: 100%">
              <select name="city" id="city" class="form-control" required>
                <option value="">Seleccione ciudad</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn" style="background-color: #91232d; color: #ffffff">Enviar</button>
        </div>
      </div>
    </div>
  </div>

  @include('pages.partials.formhome')

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

    console.log(cities);
    
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
