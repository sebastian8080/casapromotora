@extends('layouts.plantilla')

@section('title', 'About')

@section('content-head')
    <link rel="stylesheet" href="{{URL::asset('css/secondary-pages.css'); }}">
@endsection

@section('content')

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/home/about-slider-1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/home/about-slider-2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/home/about-slider-3.jpg" class="d-block w-100" alt="...">
          </div>
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

      <div id="fila1" class="row">
        <div class="col-sm-6">
          <img style="width: 75%; height: 65%; margin-left: 13%; margin-top: 10%" class="img-fluid" src="https://www.bloguismo.com/wp-content/uploads/2019/08/Errores-p%C3%A1gina-sobre-nosotros-720x481.jpg" alt="">
        </div>
        <div class="col-sm-6">
          <h1 class="text-center m-5 fw-bold">Nuestra compañia</h1>
          <p class="text-justify p-3">Casa Crédito Inmobiliaria fue fundada en el 2007 por iniciativa del señor Homero Serrano, como respuesta a una creciente necesidad de la comunidad ecuatoriana por realizar su sueño de vivienda propia.
            Nos hemos dado a conocer por brindar los mejores servicios en Gestión Inmobiliaria, Gestión  Financiera y Asistencia Legal, adquiriendo una vasta experiencia asesorando a miles de familias en su inversión, dando soluciones con agilidad y creatividad comercial; Con un trato exclusivo y personalizado aportamos una dinámica basada en nuevas ideas.
            Contamos con diferentes filtros y estándares de calidad para dar las mejores opciones, alcanzando una posición reflejada en la acogida y confianza de nuestros clientes que valoran el profesionalismo y nos eligen a la hora de decidir su inversión inmobiliaria.
          </p>
        </div>
      </div>
    
@endsection