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
}
    </style>
@endsection

@section('content')
      <div class="position-relative">
        <video style="top: 0; left:0; width: 100%; height: 100%; opacity:1; filter: brightness(60%)" muted autoplay loop>
          <source src="video/about-us.mp4" type="video/mp4" />
        </video>
        <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
          <h1 style="font-size: 4vw;">Conoce más sobre nuestra empresa</h1>
        </div>
      </div>

      <hr data-aos="flip-up" class="mt-4 mb-4" style="width: 40%; margin-left: 30%">

      <div class="container">
      <div class="row" data-aos="flip-up">
        <div class="text-center" style="padding-left: 10%; padding-right: 10%">
          <img class="img-fluid rounded" style="width: 80%" src="img/about/about-slider-1.jpg" alt="IMAGEN CASA CREDITO">
          <h1 class="mt-2 titles-page-about fw-bold">Nuestra Historia</h1>
          <p>
            Casa Crédito Inmobiliaria fue fundada en el 2007 por iniciativa del señor Homero Serrano, 
            como respuesta a una creciente necesidad de la comunidad ecuatoriana por realizar su sueño de vivienda propia.
            Nos hemos dado a conocer por brindar los mejores servicios en Gestión Inmobiliaria, Gestión  Financiera y Asistencia Legal, 
            adquiriendo una vasta experiencia asesorando a miles de familias en su inversión, dando soluciones con agilidad y creatividad comercial; 
            Con un trato exclusivo y personalizado aportamos una dinámica basada en nuevas ideas.
            Contamos con diferentes filtros y estándares de calidad para dar las mejores opciones, alcanzando una posición reflejada en la acogida y 
            confianza de nuestros clientes que valoran el profesionalismo y nos eligen a la hora de decidir su inversión inmobiliaria.
          </p>
        </div>
      </div>

      <hr data-aos="flip-up" class="mt-3 mb-4" style="width: 40%; margin-left: 29%">

      <div class="row" data-aos="flip-up">
        <div class="col-sm-6 text-justify rounded">
          <div class="flip-container">
            <div class="card">
              <div class="front">
                <p class="titles-page-about fw-bold">MISION</p>
              </div>
              <div class="back">
                <p class="text-description m-2">
                  Desde su creación, Casa Crédito Inmobiliaria tiene como misión asesorar a sus clientes en inversiones inmobiliarias, 
                  todo dentro de un marco de transparencia, compromiso e integridad, protegiendo los intereses de nuestros clientes.
                </p>
              </div>
            </div>
          </div> 
        </div>
        <div class="col-sm-6 d-flex align-items-center">
          <img class="img-fluid rounded" style="width: 100%; height: 80%" src="img/about/mision.jpg" alt="">
        </div>
      </div>

      <hr data-aos="flip-up" class="mt-4 mb-4" style="width: 40%; margin-left: 30%">

      <div class="row" data-aos="flip-up">
        <div class="col-sm-6 d-flex align-items-center">
          <img class="img-fluid rounded" style="width: 100%; height: 80%;" src="img/about/vision.jpg" alt="">
        </div>
        <div class="col-sm-6 text-justify rounded">
          <div class="flip-container">
            <div class="card">
              <div class="front">
                <p class="titles-page-about fw-bold">VISION</p>
              </div>
              <div class="back">
                <p class="text-description m-2">
                  Nuestra visión es lograr un posicionamiento como una empresa líder en el sector inmobiliario de toda Latinoamérica y Estados Unidos. 
                  Basados en la atención de manera prioritaria a las necesidades de financiamiento de propiedades de nuestros clientes, y, 
                  a favor del desarrollo de toda la comunidad latina, Casa Crédito Inmobiliaria se propone como meta 2018 crear nuevas alianzas que faciliten 
                  la concreción de negocios, consolidando e incrementando las actividades financieras para que más familias realicen el sueño de su vivienda propia!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr data-aos="flip-up" class="mt-4 mb-3" style="width: 40%; margin-left: 30%">

      <div class="container">
        <div class="row" data-aos="flip-up">
          <div class="text-center mt-2 mb-5 rounded">
            <div class="flip-container">
              <div class="card">
                <div class="front">
                  <p class="titles-page-about fw-bold">ORGANIZACION</p>
                </div>
                <div class="back">
                  <p class="text-description m-2">
                    CasaCredito es una inmobiliaria especializada en la atención a sus clientes con vocación de servicio y comprometida en brindarles asesoría para llevar a 
                    cabo la negociación más importante de su vida.
                  </p>
                  <br>
                  <div>
                    <img src="img/about/organizacion.jpg" alt="Tres personas sentadas" style="width: 70%" class="img-fluid">
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
    <script src="{{ URL::asset('js/homepage.js') }}"></script>
@endsection