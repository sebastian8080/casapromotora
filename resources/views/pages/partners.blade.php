@extends('layouts.plantilla')

@section('title', 'Nuestros Socios')

@section('content-head')
    
@endsection

@section('content')

    <div class="container">
        <div class="row pt-5 mt-5">
            <div class="col-sm-7 text-center">
                <img class="img-fluid rounded" style="width: 80%" src="img/partners/COOP-LOS-RIOS-ALIANZA.jpg" alt="Imagen Banco Pichincha">
            </div>
            <div style="background-color: rgb(162, 163, 167); width: 455px; margin-top: 10%" class="col-sm-5 text-white rounded">
                <h1 style="margin-left: 4%" class="pt-5">Cooperativa <br> Los Rios</h1>
                <br>
                <p class="text-justify" style="margin-left: 5%; margin-right: 5%">
                    If you are this site regularly and would like to help keep the site on the Internet, 
                    please consider donating a small sum to help pay for the hosting and bandwidth bill.
                    There is no minimum donation any sum is appreciated.
                </p>
                <button type="button" class="btn btn-light m-4" style="color: rgb(162, 163, 167)">Contactar</button>
            </div>
        </div>

    <h4 style="margin-left: 6%; margin-bottom: 2%" class="mt-5 mb-5">Conozca nuestro directorio de <b>PARTNERS</b> en todo el <br> territorio ecuatoriano</h4>
    <div class="row mb-5 text-secondary" style="margin-left: 5%; margin-right: 5%">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-4" style="width: 17rem;" data-aos="zoom-in">
                <img src="img/partners/dolmen.jpg" class="card-img-top" alt="Partner Dolmen">
                <div class="card-body text-center">
                  <h5 class="card-title">DOLMEN</h5>
                  <a href="#" class="btn btn-outline-secondary">Contactar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-4" style="width: 17rem;" data-aos="zoom-in">
                <img src="img/partners/pronobis.jpg" class="card-img-top" alt="Partner Pronobis">
                <div class="card-body text-center">
                  <h5 class="card-title">PRONOBIS</h5>
                  <a href="#" class="btn btn-outline-secondary">Contactar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card mb-4" style="width: 17rem;" data-aos="zoom-in">
                <img src="img/partners/grupovasquez.jpg" class="card-img-top" alt="Partner Grupo Vasquez">
                <div class="card-body text-center">
                  <h5 class="card-title">GRUPO VASQUEZ</h5>
                  <a href="#" class="btn btn-outline-secondary">Contactar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3">
            <div class="card mb-4" style="width: 17rem;" data-aos="zoom-in">
                <img src="img/partners/COOP-LOS-RIOS.jpg" class="card-img-top" alt="Partner Cooperativa Los Rios">
                <div class="card-body text-center">
                  <h5 class="card-title">COOPERATIVA LOS RIOS</h5>
                  <a href="#" class="btn btn-outline-secondary">Contactar</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('section-scripts')
    <script src="{{ asset('js/partners.js') }}"></script>
@endsection