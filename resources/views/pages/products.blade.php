@extends('layouts.plantilla')

@section('content')
    
    <div class="container mt-5 pt-5">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-sm-6">
                <div class="card mb-3" style="max-width: 540px;">
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
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection

@section('section-scripts')
    <script src="{{ asset('js/partners.js') }}"></script>
@endsection