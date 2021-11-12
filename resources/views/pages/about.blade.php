@extends('layouts.plantilla')

@section('title', 'Sobre Nosotros')

@section('content-head')
    <link rel="stylesheet" href="{{URL::asset('css/secondary-pages.css'); }}">
@endsection

@section('content')

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="filter: brightness(60%)" src="img/about/about-slider-1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img style="filter: brightness(60%)" src="img/about/about-slider-2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img style="filter: brightness(60%)" src="img/about/about-slider-3.jpg" class="d-block w-100" alt="...">
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

      <hr data-aos="flip-up" class="mt-5" style="width: 20%; margin-left: 40%">
      <div class="row mb-1" data-aos="flip-up">
        <div class="text-center" style="padding-left: 10%; padding-right: 10%">
          <h1 class="mt-1 titles-page-about fw-bold">Nuestra Historia</h1>
          <p class="m-4">
            Casa Crédito Inmobiliaria fue fundada en el 2007 por iniciativa del señor Homero Serrano, 
            como respuesta a una creciente necesidad de la comunidad ecuatoriana por realizar su sueño de vivienda propia.
          </p>
          <p class="m-4">
            Nos hemos dado a conocer por brindar los mejores servicios en Gestión Inmobiliaria, Gestión  Financiera y Asistencia Legal, 
            adquiriendo una vasta experiencia asesorando a miles de familias en su inversión, dando soluciones con agilidad y creatividad comercial; 
            Con un trato exclusivo y personalizado aportamos una dinámica basada en nuevas ideas.
          </p>
          <p class="m-4">
            Contamos con diferentes filtros y estándares de calidad para dar las mejores opciones, alcanzando una posición reflejada en la acogida y 
            confianza de nuestros clientes que valoran el profesionalismo y nos eligen a la hora de decidir su inversión inmobiliaria.
          </p>
        </div>
      </div>

      <hr data-aos="flip-left" style="width: 40%; margin-left: 5%">

      <div class="row" data-aos="flip-left">
        <div class="col-sm-6 text-justify rounded" style="background: #f4f4f4">
          <h1 class="mt-5 pt-5 text-center titles-page-about fw-bold">Mision</h1>
          <p class="m-5">
            Desde su creación, Casa Crédito Inmobiliaria tiene como misión asesorar a sus clientes en inversiones inmobiliarias, 
            todo dentro de un marco de transparencia, compromiso e integridad, protegiendo los intereses de nuestros clientes.
          </p>
        </div>
        <div class="col-sm-6">
          <img class="img-fluid rounded mt-5 mb-5" style="width: 90%" src="https://cdn.bizneo.com/blog/wp-content/uploads/2020/07/Formacio%CC%81n-de-equipos-de-trabajo-Etapas-y-Claves-810x455.jpg" alt="">
        </div>
      </div>

      <hr data-aos="flip-right" style="width: 40%; margin-left: 55%">

      <div class="row mb-4" data-aos="flip-right">
        <div class="col-sm-6">
          <img class="img-fluid mt-5 rounded mb-1" style="width: 100%; height: 70%; padding-left: 10%" src="https://assets.entrepreneur.com/content/3x2/2000/20190412172923-vision.jpeg" alt="">
        </div>
        <div class="col-sm-6 text-justify rounded" style="background: #f4f4f4">
          <h1 class="mt-5 pt-4 text-center titles-page-about fw-bold">Vision</h1>
          <p class="m-5">
            Nuestra visión es lograr un posicionamiento como una empresa líder en el sector inmobiliario de toda Latinoamérica y Estados Unidos. 
            Basados en la atención de manera prioritaria a las necesidades de financiamiento de propiedades de nuestros clientes, y, 
            a favor del desarrollo de toda la comunidad latina, Casa Crédito Inmobiliaria se propone como meta 2018 crear nuevas alianzas que faciliten 
            la concreción de negocios, consolidando e incrementando las actividades financieras para que más familias realicen el sueño de su vivienda propia!
          </p>
        </div>
      </div>

      <hr data-aos="flip-down" style="width: 20%; margin-left: 40%">

      <div class="container">
        <div class="row" data-aos="flip-down">
          <div class="text-center mt-2 mb-5 rounded" style="background: #f4f4f4">
            <h1 class="mt-5 titles-page-about fw-bold">Organización</h1>
            <p class="text-justify mb-5" style="padding-left: 20%; padding-right: 20%">
              CasaCredito es una inmobiliaria especializada en la atención a sus clientes con vocación de servicio y comprometida en brindarles asesoría para llevar a 
              cabo la negociación más importante de su vida.
            </p>
          </div>
        </div>
      </div>

    
@endsection

@section('section-scripts')
    <script src="{{ URL::asset('js/homepage.js') }}"></script>
@endsection