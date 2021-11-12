@extends('layouts.plantilla')

@section('title', 'Proyecto 1')

@section('content-head')
    <link rel="stylesheet" href="{{ URL::asset('css/project.css') }}">
@endsection

@section('content')

    <div class="row mt-5 pt-5">
        <div class="col-sm-4">
            <h1 class="fw-bold display-3" style="color: #ffffff; -webkit-text-stroke: 1px rgb(162, 157, 157); margin-left: 15%">PROYECTO 1</h1>
            <h5 style="margin-left: 15%">Encargado</h5>
        </div>
        <div class="col-sm-8">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid rounded" src="https://puertasasturmex.com/wp-content/uploads/2020/12/edificios-1.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid rounded" src="https://www.wallpapertip.com/wmimgs/81-811158_beautiful-building-of-the-world-hd.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid rounded" src="https://www.1zoom.me/big2/81/236160-svetik.jpg" class="d-block w-100" alt="...">
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
        </div>
    </div>
    
@endsection