@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content-head')
 
@endsection
    
@section('content')
    
  <div class="position-relative">
    <div class="div-carousel">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div id="carousel-indicators" class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="filter: brightness(60%);" src="{{ asset('img/home/img1-home.webp') }}" class="d-block" width="100%" height="100%" alt="img1">
          </div>
          <div class="carousel-item">
            <img style="filter: brightness(60%)" src="img/home/img2-home.webp" class="d-block"  width="100%" height="100%" alt="...">
          </div>
          <div class="carousel-item">
            <img style="filter: brightness(60%)" src="img/home/img3-home.webp" class="d-block"  width="100%" height="100%" alt="...">
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
    </div>

    <div id="links" class="row position-absolute top-50 start-50 translate-middle pt-4" style="z-index: 1;">
      <div class="col-sm-3">
        <h4 style="font-size: 2.5vw"><a href="#" class="text-white link" style="text-decoration: none; margin-left: -30%">QUITO</a></h4>
      </div>
      <div class="col-sm-3">
        <h4 style="font-size: 2.5vw"><a href="#" class="text-white link" style="text-decoration: none; margin-left: -25%">GUAYAQUIL</a> </h4>
      </div>
      <div class="col-sm-3">
        <h4 style="font-size: 2.5vw"><a href="#" class="text-white link" style="text-decoration: none; margin-left: 25%">CUENCA</a></h4>
      </div>
      <div class="col-sm-3">
        <h4 style="font-size: 2.5vw"><a href="#" class="text-white link" style="text-decoration: none; margin-left: 45%">MANTA</a></h4>
      </div>
    </div>
  </div>

    <div class="row mt-3" data-aos="slide-up">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 second-row rounded">
        <p class="text-justify m-5">
          <b>CASA CREDITO</b> es una empresa Promotora de Proyectos Inmobiliarios en Ecuador. Desarrollamos Soluciones Inmobiliarias Integrales en Vivienda,
          Comercio, Oficinas, Servicios y Hospitalidad, que se diferencian por la calidad e innovación percibida por el cliente, convirtiendo lo excepcional en un estilo de vida.
        </p>
        <hr id="linea_pequeña" class="position-absolute bottom-0 start-50 translate-middle-x">
      </div>
      <div class="col-sm-3"></div>
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
                {{-- @forelse ($projects as $project) --}}
                          {{-- @if ($loop->index==0)  @endif--}}
                <div class="carousel-item active">
                  <img id="imgBanner1" src="{{ asset('img/projects/adra/1.webp') }}" class="d-block img-fluid" width="100%" alt="Proyecto Adra Casa Credito Promotora">
                  <div class="carousel-caption d-md-block">
                    <a style="text-decoration: none" href="{{ route('projects.viewProject', 'Adra') }}"><h3 class="texto-imagenes">ADRA</h3></a>
                    <p>Departamentos de lujo con una vista insuperable</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img id="imgBanner2" style="width: 100%" src="{{ asset('img/projects/futuranarancay/1.webp') }}" class="d-block img-fluid" width="100%" alt="Proyecto Futura Narancay Casa Credito Promotora">
                  <div class="carousel-caption d-md-block">
                    <a style="text-decoration: none" href="{{ route('projects.viewProject', 'Futura Narancay') }}"><h3 class="texto-imagenes">FUTURA NARANCAY</h3></a>
                    <p>Departamentos con una  experiencia única en diseño y comodidad</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img id="imgBanner3" src="{{ asset('img/projects/toscana/1.jpg') }}" class="d-block img-fluid" width="100%" alt="...">
                  <div class="carousel-caption d-md-block">
                    <a style="text-decoration: none" href="{{ route('projects.viewProject', 'Toscana') }}"><h3 class="texto-imagenes">TOSCANA</h3></a>
                    <p>Condominios con acabados modernos</p>
                  </div>
                </div>
                {{-- @empty
                @endforelse --}}
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
                          <select name="tipo_credito" id="tipo_credito" class="form-select form-control" required>
                            <option>Seleccione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
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

      @include('pages.partials.formhome')
    

@endsection

@section('section-scripts')
  <script src="{{ URL::asset('js/homepage.js'); }}"></script>
@endsection
