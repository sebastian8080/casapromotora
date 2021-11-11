@extends('layouts.plantilla')

@section('title', 'Proyectos')

@section('content-head')
    <link rel="stylesheet" href="{{URL::asset('css/projects.css'); }}">
@endsection

@section('content')
    <div class="mt-5 pt-5">
        <h1 class="text-center display-1 fw-bold">Proyectos</h1>
        <h4 class="text-center">Aqui te mostramos nuestros proyectos más innovadores</h4>
    </div>

    <div class="row mt-5 pt-5">
        <div class="col-sm-6" data-aos="fade-up">
            <img class="img-fluid rounded" style="width: 90%;" src="https://revistaconstruir.com/wp-content/uploads/2019/10/edificio.jpg" alt="">
        </div>
        <div class="col-sm-6" data-aos="fade-up" style="margin-top:15%; padding-right: 5%">
            <h1 class="fw-bold pt-1">Proyecto Uno</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum magni nulla voluptatum quo perspiciatis eligendi aut tempore 
                soluta voluptatem expedita maiores sed placeat, assumenda molestiae nam, necessitatibus facere harum accusantium?
            </p>
            <div class="d-grid gap-2 col-6 mx-auto pb-3">
                <button class="btn btn-outline-secondary" type="button">Ver más</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6" data-aos="fade-up" style="margin-top: 20%; padding-left: 5%"> 
            <h1 class="fw-bold">Proyecto Dos</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum magni nulla voluptatum quo perspiciatis eligendi aut tempore 
                soluta voluptatem expedita maiores sed placeat, assumenda molestiae nam, necessitatibus facere harum accusantium?
            </p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-outline-secondary" type="button">Ver más</button>
            </div>
        </div>
        <div class="col-sm-6" data-aos="fade-up">
            <img class="img-fluid rounded" style="height: 80%; width: 90%; float:right" src="https://i.pinimg.com/736x/89/67/f3/8967f3e1c1750f741836c456030ce6ca.jpg" alt="">
        </div>
    </div>
@endsection