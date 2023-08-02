@extends('layouts.plantilla')

@section('title', 'Sobre Nosotros')

@section('content-head')
    <style>
  .flip-container {
  background-color: transparent;
  width: 100%;
  height: 400px;
  perspective: 1000px; 
}
.card {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 1s;
  transform-style: preserve-3d;
}
.flip-container:hover .card {
  transform: rotateY(180deg);
}
.front, .back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 3vw;
}
.front {
  background-color: #f4f4f4;
  color: #000;
}
.back {
  background-color: #808187;
  color: white;
  transform: rotateY(180deg);
}
.text-description{
  font-size: 1.3vw;
}

@media only screen and (max-width: 580px){
  .text-description{
    font-size: 4vw;
  }

  .flip-container{
    height: 250px;
  }

  .titles-page-about{
    font-size: 6vw;
  }
  #prisection div {min-height: 450px !important; align-items: center !important; display: flex; text-align: center}
}
    </style>
@endsection

@section('content')

    <section id="prisection" style="background-size: cover;background-position: center; background-repeat: no-repeat;">
      <div class="d-flex align-items-center justify-content-center text-light" style="min-height: 650px; background: rgba(2, 2, 2, 0.5)">
        <div>
          <h1>CONOZCA MÁS SOBRE NUESTRA EMPRESA</h1>
        </div>
      </div>
    </section>

      {{-- <div class="position-relative">
        <video style="top: 0; left:0; width: 100%; height: 100%; opacity:1; filter: brightness(60%)" muted autoplay loop>
          <source src="{{ asset('video/about-us.mp4') }}" type="video/mp4" />
        </video>
        <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
          <h1 style="font-size: 4vw;">Conoce más sobre nuestra empresa</h1>
        </div>
      </div> --}}


      <div class="container mt-5">
      <div class="row mx-1">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 text-justify">
          <p class="h3 text-danger">Historia</p>
          <p class="lh-lg" style="text-align: justify">
            Casa Promotora fue fundada en el 2007 por iniciativa del señor Homero Serrano, 
            como respuesta a una creciente necesidad de la comunidad ecuatoriana por realizar su sueño de vivienda propia.
            Nos hemos dado a conocer por brindar los mejores servicios en Gestión Inmobiliaria, Gestión  Financiera y Asistencia Legal, 
            adquiriendo una vasta experiencia asesorando a miles de familias en su inversión, dando soluciones con agilidad y creatividad comercial; 
            Con un trato exclusivo y personalizado aportamos una dinámica basada en nuevas ideas.
            Contamos con diferentes filtros y estándares de calidad para dar las mejores opciones, alcanzando una posición reflejada en la acogida y 
            confianza de nuestros clientes que valoran el profesionalismo y nos eligen a la hora de decidir su inversión inmobiliaria.
          </p>
        </div>
        <div class="col-sm-2"></div>
      </div>

      <div class="row mx-1 mt-3">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <p class="h3 text-danger">Mision</p>
          <p class="lh-lg">
            Desde su creación, Casa Promotora tiene como misión asesorar a sus clientes en inversiones inmobiliarias, 
            todo dentro de un marco de transparencia, compromiso e integridad, protegiendo los intereses de nuestros clientes.
          </p>
          <img class="img-fluid rounded" src="{{ asset('img/about/mision.webp') }}" alt="Mision Casa Credito Promotora">
        </div>
        <div class="col-sm-2"></div>
      </div>

      <div class="row mx-1 mt-5">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <p class="h3 text-danger">Vision</p>
          <p class="lh-lg">
            Nuestra visión es lograr un posicionamiento como una empresa líder en el sector inmobiliario de toda Latinoamérica y Estados Unidos. 
            Basados en la atención de manera prioritaria a las necesidades de financiamiento de propiedades de nuestros clientes, y, 
            a favor del desarrollo de toda la comunidad latina, Casa Promotora se propone como meta 2018 crear nuevas alianzas que faciliten 
            la concreción de negocios, consolidando e incrementando las actividades financieras para que más familias realicen el sueño de su vivienda propia!
          </p>
          <img class="img-fluid rounded" src="{{ asset('img/about/vision.webp') }}" alt="Vision Casa Credito Promotora">
        </div>
        <div class="col-sm-2"></div>
      </div>

      <div class="row mx-1 mt-5 mb-5">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <p class="h3 text-danger">Organización</p>
          <p class="lh-lg">
            Casa Credito es una inmobiliaria especializada en la atención a sus clientes con vocación de servicio y comprometida en brindarles asesoría 
            para llevar a cabo la negociación más importante de su vida.
          </p>
        </div>
      </div>

    </div>

    
@endsection

@section('section-scripts')
    <script src="{{ URL::asset('js/homepage.js') }}"></script>
    <script>
      window.addEventListener('load', (event) => {
        document.getElementById('prisection').style.backgroundImage = "url({{asset('img/about/oficinasnuevas-min.jpg')}})";
      });
    </script>
@endsection