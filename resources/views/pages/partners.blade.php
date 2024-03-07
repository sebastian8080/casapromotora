@extends('layouts.plantilla')

@section('title', 'Nuestros Socios')

@section('content-head')
<style>
    .redondo{
  display: block;
  width: 185px;
  height: 110px;
  border-radius: 10%;
}

        @media screen and (max-width: 580px){
            .header{
                margin-top: 50px;
            }
        }

        .box{
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
    </style>
@endsection

@section('content')
<div style="display: flex;">
<div style="flex: 1;">
    <div class="row">
    <div class="col-sm-8 text-center" style="margin-top: 10%">
    <img width="900px" height="900px" class="img-fluid" src="{{asset('img/encabezado BLOGS-14.png')}}" alt="Casa Credito">
    </div>
    <div class="col-sm-4 text-center" style="margin-top: 15%">
        <img width="262px" height="115px" class="img-fluid" src="{{asset('img/logo-rojo-promotora.png')}}" alt="Casa Credito"> 
    
    </div>
    </div>
    
        
        <p class="text-white" style="font-size:2.5vw;">¡Hazlo agilmente con un crédito hipotecario!</p>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

    <div class="row text-center" style="margin-top: 5%; color: #002542;">
        <!-- <h2 class="fw-bold">Materializa tus sueños</h2>
        <h2>Crédito Ágil y Rápido</h2>
        <p>Financia la construcción, compra o ampliación de tu nueva casa</p> -->
    </div>
     
    <div class="container" style="padding-left:180px; padding-right: 180px;"> 
        
    <div class="card-group">
  <div class="card">
    <div class="card-body box rounded p-4"></br>
      <h5 class="card-title text-center fw-bold">HISTORIA</h5>
      <p class="card-text text-center">Fundada en 2007 por Homero Serrano, Casa Promotora se especializa en Gestión
        Inmobiliaria, Finanzas y Asesoria Legal, brindando soluciones ágiles y creativas. Nuestra reputación se basa en un trato
        exclusivo, nuevas ideas y rigurosos estándares de calidad.
      </p>
    </div>
  </div>
  <div class="card">
    <div class="card-body box rounded p-4"></br>
      <h5 class="card-title text-center fw-bold">MISIÓN</h5>
      <p class="card-text text-center">Desde su creación, Casa Promotora tiene como misión asesorar a sus clientes
        en inversiones inmobiliarias, todo dentro de un marco de transparencia, compromiso e integridad, protegiendo
        los intereses de nuestros clientes.
      </p>
    
    </div>
  </div>
  <div class="card">
    <div class="card-body box rounded p-4"></br>
      <h5 class="card-title text-center fw-bold">VISIÓN</h5>
      <p class="card-text text-center">Nuestra visión es ser lideres en el sector inmobiliario de 
        Latinoamérica y Estados Unidos. Priorizamos las necesidades financieras de nuestros clientes,
        buscando crear alianzas, facilitar negocios y fortalecer actividades financieras. 
      </p>
    </div>
    
  </div>
</div>
    </div></br></br>
    <div>
    <h4 class="fa-2x text-center" style="color: #670C07;">LE PRESENTAMOS</h4>
    <h5 class="fa-3x card-title text-center fw-bold">Proyectos finalizados</h5></br>
    </div>
    <div class="container" style="padding-left:150px; padding-right: 150px;"> 
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div></br></br>
    <div>
    <h5 class="fa-3x card-title text-center">Proyectos en construcción</h5></br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
        
      </div>
    </div>
  </div>
</div>
    </div>

</div></br>
<div class="col-md-12">
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="page-item active" aria-current="page">
      <span class="page-link">1</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
  </ul>
</nav>
    </div>
@endsection

@section('section-scripts')
    <script src="{{ asset('js/homepage.js') }}"></script>
@endsection