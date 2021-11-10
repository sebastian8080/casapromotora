@extends('layouts.plantilla')

@section('title', 'Patrocinadores')

@section('content-head')
    <link rel="stylesheet" href="{{URL::asset('css/secondary-pages.css'); }}">
@endsection

@section('content')
    <div class="row p-5 m-5">
        <div class="col-sm-7">
            <img style="width: 95%; height: 80%" src="https://www.eltelegrafo.com.ec/media/k2/items/cache/a9acd391dcab35ed9e50f098d897f9ff_XL.jpg" alt="Imagen Banco Pichincha">
        </div>
        <div style="background-color: rgb(223, 63, 63)" class="col-sm-5 text-white mt-5 rounded">
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

    <h4 style="margin-left: 9%; margin-bottom: 2%">Instituciones similares en Cuenca</h4>
    <div class="row mb-5 pb-5 text-secondary" style="margin-left: 8%; margin-right: 10%">
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="img/partners/banco_pichincha.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Banco Pichincha</h5>
                  <a href="#" class="btn btn-outline-secondary mt-4">Contactar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="img/partners/mutualista_azuay.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mutualista Azuay</h5>
                  <a href="#" class="btn btn-outline-secondary mt-4">Contactar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="img/partners/banco_guayaquil.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Banco Guayaquil</h5>
                  <a href="#" class="btn btn-outline-secondary mt-4">Contactar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="img/partners/mutualista_pichincha.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mutualista Pichincha</h5>
                  <a href="#" class="btn btn-outline-secondary mt-4">Contactar</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('section-scripts')
    <script src="{{ URL::asset('js/partners.js') }}"></script>
@endsection