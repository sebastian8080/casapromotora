@extends('layouts.plantilla')

@section('title', 'Proyectos')

@section('content-head')
    <style>
        @media screen and (max-width: 780px){
            .title{
                justify-content: start !important;
                margin-top: 0px !important; 
            }
            .items{
                justify-content: start !important;
            }
        }
        .header-section{ margin-top: 80px !important}
    </style>
@endsection

@php
    $images = explode("|", $project->images);
@endphp

@section('content')
    <section class="container d-flex justify-content-center header-section">
        <div class="position-relative">
            <img class="img-fluid" src="{{ asset('uploads/projects/'. $images[0]) }}" alt="{{ $project->project_name }}">
            <section class="d-flex justify-content-end title" style="margin-top: -100px">
                <div class="bg-white pt-4 px-4" style="line-height: 3.5rem" data-aos="fade-up" data-aos-duration="2000">
                    <p class="subtitles" style="-webkit-text-stroke: 1px black; color: white; font-size: 4rem; font-weight: bold;">{{ $property->title }}</p>
                    <p class="subtitles" style="-webkit-text-stroke: 1px rgb(0, 0, 0); color: rgb(0, 0, 0); font-size: 3rem; font-weight: bold;">${{ number_format($property->price) }}</p>
                </div>
            </section>
        </div>
    </section>

    <section class="bg-light py-5 mb-4 mt-4" data-aos="fade-up" data-aos-duration="2000">
        <section class="container">
            <div class="row">
                <article class="col-6 col-sm-4 d-flex justify-content-center items">
                    <p><i class="fa-regular fa-circle text-danger"></i> Sala</p>
                </article>
                <article class="col-6 col-sm-4 d-flex justify-content-center items" >
                    <p><i class="fa-regular fa-circle text-danger"></i> Comedor</p>
                </article>
                <article class="col-6 col-sm-4 d-flex justify-content-center items">
                    <p><i class="fa-regular fa-circle text-danger"></i> Cocina</p>
                </article>
                <article class="col-6 col-sm-4 d-flex justify-content-center items">
                    <p><i class="fa-regular fa-circle text-danger"></i> Baño</p>
                </article>
                @if($project->project_name == "Alison")
                    <article class="col-6 col-sm-4 d-flex justify-content-center items">
                        <p><i class="fa-regular fa-circle text-danger"></i> 3 habitaciones</p>
                    </article>
                @endif
                @if($project->project_name == "Alison")
                    <article class="col-6 col-sm-4 d-flex justify-content-center items">
                        <p><i class="fa-regular fa-circle text-danger"></i> 2 estacionamientos</p>
                    </article>
                @endif
            </div>
        </section>
    </section>

    <section class="container py-5">
        <h2 class="mb-5" style="-webkit-text-stroke: 1px rgb(0, 0, 0); color: rgb(0, 0, 0); font-size: 3rem; font-weight: bold; margin-left: 8%">DETALLES</h2>
        <div class="row">
            <div class="col-12 col-sm-6 d-flex justify-content-center mb-3" data-aos="fade-up" data-aos-duration="2000">
                <div class="d-flex gap-4">
                    <img src="{{ asset('img/area.png') }}" alt="">
                    <div style="line-height: 5px;" class="mt-3 text-center">
                        <p class="fw-bolder">Área Total</p>
                        <span>{{ $property->total_area }} m<sup>2</sup> </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 d-flex justify-content-center mb-3" data-aos="fade-up" data-aos-duration="2000">
                <div class="d-flex gap-4">
                    <img src="{{ asset('img/edificio.png') }}" alt="">
                    <div style="line-height: 5px;" class="mt-3 text-center">
                        <p class="fw-bolder">Área Interior</p>
                        <span>{{ $property->indoor_area }} m<sup>2</sup></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-xl-4 mb-4">
                <div>
                    <img width="100%" height="400px" src="{{ asset('uploads/projects/900/' . $images[1]) }}" alt="{{ $project->project_name }}-IMG1">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-xl-4 mb-4">
                <div>
                    <img width="100%" height="400px" src="{{ asset('uploads/projects/900/' . $images[2]) }}" alt="{{ $project->project_name }}-IMG2">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-xl-4 mb-4">
                <div>
                    <img width="100%" height="400px" src="{{ asset('uploads/projects/900/' . $images[3]) }}" alt="{{ $project->project_name }}-IMG3">
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="d-flex justify-content-end items">
            @if($project->project_name == "SEASCAPE")
                <h2 class="subtitles" style="-webkit-text-stroke: 1px black; color: white; font-size: 5rem; font-weight: bold; line-height: 5rem; border-bottom: 1px solid red">IT'S ALL <span class="subtitles" style="color: #000000; font-size: 4rem">YOURS</span></h2>
            @endif
            @if($project->project_name == "Alison")
                <h2 class="subtitles" style="-webkit-text-stroke: 1px black; color: white; font-size: 3rem; font-weight: bold; line-height: 5rem;">LA UBICACIÓN <span class="subtitles" style="color: #000000; font-size: 2rem">MÁS EXCLUSIVA DE CUENCA</span></h2>
            @endif
        </div>
        @if($project->project_name == "Alison")
            <div class="mt-5">
                <h3 style="-webkit-text-stroke: 1px rgb(0, 0, 0); color: rgb(0, 0, 0); font-size: 2rem; font-weight: bold;">A pocos minutos de:</h3>
            </div>
            <div class="row py-5">
                <div class="col-6 col-sm-3 d-flex justify-content-center my-2">Supermaxi</div>
                <div class="col-6 col-sm-3 d-flex justify-content-center my-2">Pádel</div>
                <div class="col-6 col-sm-3 d-flex justify-content-center my-2">Gimnasio</div>
                <div class="col-6 col-sm-3 d-flex justify-content-center my-2">Centro Comercial</div>
                <div class="col-6 col-sm-3 d-flex justify-content-center my-2">Farmacias</div>
                <div class="col-6 col-sm-3 d-flex justify-content-center my-2">Restaurantes</div>
                <div class="col-6 col-sm-3 d-flex justify-content-center my-2">Salón de eventos</div>
                <div class="col-6 col-sm-3 d-flex justify-content-center my-2">Miradores</div>
                <div class="col-6 col-sm-3 d-flex justify-content-center my-2">Guarderías</div>
            </div>
        @endif
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
@endsection

@section('section-scripts')
    <script>
        let nav = document.getElementById('menu');
        nav.classList.add('bg-white');
        let nav_links = document.querySelectorAll('.nav-link');
        nav_links.forEach(element => {
            element.classList.remove('text-white');
            element.classList.add('text-dark');
        });
    </script>
@endsection