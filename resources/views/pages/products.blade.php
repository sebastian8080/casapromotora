@extends('layouts.plantilla')

@section('title', 'Tienda Dolmen')

@section('content-head')

<style>
    .header{
           background-image: url("{{ asset('img/partners/SECCION-TIENDA-VIRTUAL.jpg') }}");
           width: 100%;
           height: 40vw;
           background-size: cover;
           background-repeat: no-repeat;
            background-attachment: fixed;
           margin-top: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 90vh;
            
        }

        #texto{
            color: #ffffff00;
            -webkit-text-stroke: 2px rgb(255, 255, 255);
            font-size: 6vw;
        }
</style>
    
@endsection

@section('content')   

    <div class="header">
        <div class="row">
            <div>
                <h2 class="text-white" style="font-size: 4vw">Reserva tu pedido en nuestra</h2>
                <h1 id="texto">TIENDA VIRTUAL</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3">
                <h3>CATEGORÍA</h3>
                <ul>
                    <a style="text-decoration: none; color:rgb(128, 128, 128)" href=""><li>TODOS LOS PRODUCTOS</li></a>
                    @foreach ($categorias as $categoria)
                    <a style="text-decoration: none; color: rgb(128, 128, 128)" href=""><li>{{ $categoria->nombre_categoria }}</li></a>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-3">
                        <div class="card h-100 position-relative">
                            <img src="https://www.maquinariacarran.cl/wp-content/uploads/2020/12/LADRILLOS-1_INTERIOR-BLOG-1300x785px.jpg" class="card-img-top" alt="...">
                            <div class="position-absolute">
                                <button class="btn rounded-circle border mb-1" style="background-color: #f1ededc9"><i class="fas fa-eye"></i></button>
                                <br>
                                <button class="btn rounded-circle border mb-1" style="background-color: #f1ededc9"><i class="fas fa-cart-plus"></i></button>
                                <br>
                                <button class="btn rounded-circle border mb-1" style="background-color: #f1ededc9"><i class="fas fa-heart"></i></button>
                            </div>
                            <div class="card-body">
                              <h5 class="card-title" style="color: rgb(99, 19, 16)">Bloque Rojo 7</h5>
                              <p style="font-size: 10px" class="card-text">{{ $product->descripcion}}</p>
                              <p style="font-size: 10px" class="card-text">PVP: {{ $product->pvp}}</p>
                            </div>
                          </div>
                        {{-- <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <a href=""><img src="https://www.maquinariacarran.cl/wp-content/uploads/2020/12/LADRILLOS-1_INTERIOR-BLOG-1300x785px.jpg" class="img-fluid rounded-start" alt="..."></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title">{{ $product->descripcion }}</h5>
                                <p class="card-text"><b>PVP:</b> {{ $product->pvp }}</p>
                                <p class="card-text"><b>{{ $product->unidad_tipo}}</b></p>
                                </div>
                            </div>
                            </div>
                        </div> --}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection

@section('section-scripts')
    <script src="{{ asset('js/partners.js') }}"></script>
@endsection