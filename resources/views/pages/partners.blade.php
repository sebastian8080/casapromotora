@extends('layouts.plantilla')

@section('title', 'Nuestros Socios')

@section('content-head')
    <link rel="stylesheet" href="{{URL::asset('css/secondary-pages.css'); }}">
@endsection

@section('content')
<div class="container">
    <div class="row pt-5 mt-5">
        <div class="col-sm-7">
            <img class="img-fluid rounded" style="width: 100%; height: 80%" src="https://www.eltelegrafo.com.ec/media/k2/items/cache/a9acd391dcab35ed9e50f098d897f9ff_XL.jpg" alt="Imagen Banco Pichincha">
        </div>
        <div style="background-color: rgb(223, 63, 63)" class="col-sm-5 text-white rounded mt-3">
            <h1 class="m-4">Banco <br> Pichincha</h1>
            <br>
            <p class="text-justify" style="margin-left: 5%; margin-right: 5%">
                If you are this site regularly and would like to help keep the site on the Internet, 
                please consider donating a small sum to help pay for the hosting and bandwidth bill.
                There is no minimum donation any sum is appreciated.
            </p>
            <button type="button" class="btn btn-light text-danger m-4">Contactar</button>
        </div>
    </div>
</div>

    <h4 style="margin-left: 5%; margin-bottom: 2%" class="mt-5">Instituciones similares en Cuenca</h4>
    <div class="row mb-5 pb-5 text-secondary" style="margin-left: 5%; margin-right: 10%">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card mb-4" style="width: 18rem;">
                <img src="img/partners/dolmen.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">DOLMEN</h5>
                  <a href="#" class="btn btn-outline-secondary">Contactar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card mb-4" style="width: 18rem;">
                <img src="img/partners/pronobis.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">PRONOBIS</h5>
                  <a href="#" class="btn btn-outline-secondary">Contactar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card mb-4" style="width: 18rem;">
                <img src="img/partners/grupovasquez.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">GRUPO VASQUEZ</h5>
                  <a href="#" class="btn btn-outline-secondary">Contactar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="width: 18rem;">
                <img src="img/partners/cooperativa.jpeg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">COOPERATIVA LOS RIOS</h5>
                  <a href="#" class="btn btn-outline-secondary">Contactar</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('section-scripts')
    <script src="{{ URL::asset('js/partners.js') }}"></script>
@endsection