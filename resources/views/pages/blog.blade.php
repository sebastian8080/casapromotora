@extends('layouts.plantilla')

@section('section-header')
    
@endsection

@section('content')
<style>
        .class-prueba:hover{
            box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
    </style>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="card">
            
                <div class="card-body">
                    <h1 class="card-title text-center">{{$post->titulo}}</h1>
                    <img class="img-fluid" src="https://images.adsttc.com/media/images/5d34/e507/284d/d109/5600/0240/newsletter/_FI.jpg?1563747560" alt="imagen">
                    <h5 class="text">Tiempo de Lectura: {{$post->tiempo_lectura}}</h5>
                    <h5 class="text">Descripción: {{$post->metadescripcion}}</h5>
                    <h5 class="text">Contenido: {{$post->contenido}}</h5>
                    
                    
                    
                </div>
            </div>
        </div>
    </div></br>
    <div class="container">
            
            <div class="row">
    <div class="col-sm-3">
    @include('layouts.sidebar-news')
                </div>

        <div class="row mt-5">
            <h4>TEMAS RELACIONADOS</h4>
            <div class="col-sm-4">
                <div class="card mb-2" style="width: 18rem;">
                    <img src="https://revistaconstruir.com/wp-content/uploads/2019/10/edificio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-secondary">Leer articulo</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-2" style="width: 18rem;">
                    <img src="https://revistaconstruir.com/wp-content/uploads/2019/10/edificio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-secondary">Leer articulo</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-2" style="width: 18rem;">
                    <img src="https://revistaconstruir.com/wp-content/uploads/2019/10/edificio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-secondary">Leer articulo</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-4">
                <h4 class="fw-bold">DEJA UN COMENTARIO</h4>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                        </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="comentario" placeholder="Comentario">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-outline-secondary" type="button">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

        <hr class="mt-5">

        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4" style="float: right">
                <h6>Suscribete a nuestro blog</h6>
                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Correo" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('section-scripts')
    <script src="{{ URL::asset('js/partners.js') }}"></script>
@endsection