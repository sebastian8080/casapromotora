@extends('layouts.plantilla')

@section('title', 'Nuestros Socios')

@section('content-head')
    <style>
        .header{
           background-image: 
           linear-gradient(to left, rgba(73, 87, 110, 0), rgb(31, 54, 91)),
           url("{{ asset('img/partners/BANNER-LOS-RIOS.jpg') }}");
           width: 100%;
           height: 50vw;
           background-size: cover;
           /* margin-top: 20px; */
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

    <div class="header position-relative">
        <div class="row" style="width: 100%; height: 50vw">
            <div class="col-sm-6 text-center" style="margin-top: 15%">
                <img style="width: 35%" class="img-fluid" src="img/partners/LOGO LOS RIOS.png" alt="Casa Credito">
                <h2 class="fw-bold" style="font-size: 3vw; color: rgb(43, 147, 166)">Tu casa más cerca <br> de lo que piensas</h2>
                <p class="text-white" style="font-size:2.5vw;">¡Hazlo agilmente con un crédito hipotecario!</p>
            </div>
            <div class="col-sm-6"></div>
        </div>
    </div>

    <div class="row text-center" style="margin-top: 5%; color: #002542;">
        <h2 class="fw-bold">Materializa tus sueños</h2>
        <h2>Crédito Ágil y Rápido</h2>
        <p>Financia la construcción, compra o ampliación de tu nueva casa</p>
    </div>

    <div class="row d-flex justify-content-center mt-5">
        <div class="col-sm-4 col-12 text-center box rounded mb-3" style="width: 300px; margin-right: 1%; margin-left: 1%">
            <div class="d-flex justify-content-center">
                <i class="far fa-check-square fa-2x mt-3" style="margin-right:1%"></i>
                <h4 class="fw-bold" style="margin-top:18px">AGILIDAD</h4>
            </div>
            <p>Pre aprobación inmediata</p>
        </div>
        <div class="col-sm-4 col-12 text-center box rounded mb-3" style="width: 300px;">
            <div class="d-flex justify-content-center">
                <i class="far fa-check-square fa-2x mt-3" style="margin-right:1%"></i>
                <h4 class="fw-bold" style="margin-top:18px">COMODIDAD</h4>
            </div>
            <p>Servicios y consultar en línea</p>
        </div>
        <div class="col-sm-4 col-12 text-center box rounded mb-3" style="width:300px; margin-left: 1%; margin-right: 1%">
            <div class="d-flex justify-content-center">
                <i class="far fa-check-square fa-2x mt-3" style="margin-right:1%"></i>
                <h4 class="fw-bold" style="margin-top:18px">SEGURIDAD</h4>
            </div>
            <p>Protección en tus solicitudes</p>
        </div>
    </div>

    <div class="container">
        <div class="row pt-5 mt-5">
            <div class="col-sm-6 text-center">
                <img class="img-fluid rounded" style="width: 100%" src="img/partners/COOP-LOS-RIOS-ALIANZA.jpg" alt="Alianza Casa Credito - Cooperativa Los Rios">
            </div>
            <div class="col-sm-6">
                <h4 class="fw-bold mx-4 mt-4">GENERAMOS SOCIOS ESTRATÉGICOS</h4>
                <div class="text-justify mx-4" style="font-size: 19px">
                    <p>Proceso ágil y penalizado para apoyarle en el cumplimiento de sus metas o sus sueños, con las mejores tasas para el financiamiento de vivienda.</p>
                    <p>Puede realizar inversión segura y rentable donde ganas los mejores intereses por un tiempo preestablecido y generando mayor rentabilidad.</p>
                    <p>La cooperativa facilita a sus clientes y socios la compra y venta de euros, los mismos que estarán disponibles para cubrir sus necesidades tanto para viajes o futuras inversiones.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-3">
            <h1 class="fw-bold text-center mb-5" style="font-size: 200%">¡SOLICITE INFORMACIÓN YA!</h1>
            <div class="col-sm-1"></div>
            <div id="card-form" class="col-sm-5 rounded-3">
              <h2 class="fw-bold text-muted mx-4" style="margin-top: 25%; margin-bottom:25%">ENVÍENOS SU INFORMACIÓN Y NOSOTROS NOS CONTACTAREMOS</h2>
            </div>
        
            <div id="form" class="col-sm-5 pb-5">
              <form class="p-5" action="">
                @csrf
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="mb-3">
                  <label for="telefono_celular" class="form-label">Telefono / Celular</label>
                  <input type="number" class="form-control" id="telefono_celular" name="telefono_celular">
                </div>
                <div class="mb-3">
                  <label for="correo" class="form-label">Correo electronico</label>
                  <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" name="correo">
                </div>
                <div class="mb-3">
                  <label for="mensaje" class="form-label">Mensaje</label>
                  <input type="text" class="form-control" id="mensaje" name="mensaje">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="submit" class="btn btn-danger me-md-2 rounded-pill">Enviar mensaje</button>
                </div>
              </form>
            </div>
        
                <div class="col-sm-1"></div>
          </div>

    <div class="row mb-5 mt-5 text-secondary" style="margin-left: 10%; margin-right: 10%">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-4" style="width: 16rem;" data-aos="zoom-in">
                <img src="img/partners/dolmen.jpg" class="card-img-top" alt="Partner Dolmen">
                <div class="card-body text-center">
                  <h6 class="card-title">DOLMEN</h6>
                  <a href="{{ route('socios.dolmen') }}" class="btn btn-outline-secondary">Contactar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-4" style="width: 16rem;" data-aos="zoom-in">
                <img src="img/partners/pronobis.jpg" class="card-img-top" alt="Partner Pronobis">
                <div class="card-body text-center">
                  <h6 class="card-title">PRONOBIS</h6>
                  <a href="#" class="btn btn-outline-secondary">Contactar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-4" style="width: 16rem;" data-aos="zoom-in">
                <img src="img/partners/grupovasquez.jpg" class="card-img-top" alt="Partner Grupo Vasquez">
                <div class="card-body text-center">
                  <h6 class="card-title">GRUPO VASQUEZ</h6>
                  <a href="{{ route('pages.projects') }}" class="btn btn-outline-secondary">Contactar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3">
            <div class="card mb-4" style="width: 16rem;" data-aos="zoom-in">
                <img src="img/partners/COOP-LOS-RIOS.jpg" class="card-img-top" alt="Partner Cooperativa Los Rios">
                <div class="card-body text-center">
                  <h6 class="card-title">COOPERATIVA LOS RIOS</h6>
                  <a href="{{ route('pages.partners') }}" class="btn btn-outline-secondary">Contactar</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('section-scripts')
    <script src="{{ asset('js/homepage.js') }}"></script>
@endsection