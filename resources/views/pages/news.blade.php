@extends('layouts.plantilla')

@section('title', 'Noticias')

@section('content-head')
    <link rel="stylesheet" href="{{URL::asset('css/secondary-pages.css'); }}">
    <style>
        .class-prueba:hover{
            box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
        }
    </style>
 
@endsection

@section('content')
    <div style="text-align: center;">
     <img style="width: 100%; filter: brightness(60%)" src="{{asset('img/encabezado BLOGS-14.png')}}" class="img-fluid" alt="...">
    
     <p style="position: absolute; top: 45%; left: 65%; transform: translate(-100%, -100%); color: white; font-size: 52px;; font-weight:">NOTICIAS EN EL</p>
     <p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 52px;; font-weight: bold">MUNDO INMOBILIARIO</p>
     
     
    
    </div></br></br>
            <div class="container">           
            <div class="container">
            
            <div class="row">
                <div class="col-sm-3">
                @include('layouts.sidebar-news')
                </div>
                <div class="col-sm-9">
                <div class="card mb-3" style="">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://images.adsttc.com/media/images/5d34/e507/284d/d109/5600/0240/newsletter/_FI.jpg?1563747560" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">EXPLORANDO PROPIEDAS CON PISCINA EXCLUSIVAS</h5>
                        <p class="card-text"> En este blog, nos sumergimos en el apasionante universo de propiedades inmobiliarias
                        que ofrecen no solo la promesa de un hogar, sino también la experiencia única de tener
                        una piscina privada.¡Prepárese para descubrir la perfección de la vida con piscina!</p>
                        <a href="{{ route('blogs.blog') }}" class="btn" style="background-color: #670C07; color: white;" border-radius: 5px>LEER BLOG</a>
                    
                    </div>
                    </div>
                </div>
                </div>
            
        

                <div class="col-sm-5">
                
                </div>
                </div>
                </div> 
                </div>

            </div>
        </div>
    
        
</div>
                
                    <!-- <div class="container">
                    <div class="row mb-5">
                    <div class="col-sm-8">
                    <div class="card mb-5" data-aos="fade-up">
                    <div class="card-body">l
                    <h5 class="card-title fw-bold">EXPLORANDO PROPIEDAS CON PISCINA EXCLUSIVAS</h5>
                
                    <img src="https://images.adsttc.com/media/images/5d34/e507/284d/d109/5600/0240/newsletter/_FI.jpg?1563747560" class="card-img-bottom" alt="imagen casa">
                    <div class="card-body">
                        <p class="card-text text-justify">
                            Hagasé una auto-evaluación financiera. Antes de comprar es importante analizar su situación financiera. Lo más importante es determinar
                            nuestros ingresos y el capital que tenemos disponible como cuota inicial (downpayment). 
                        </p>
                        <a href="{{ route('blogs.blog') }}" class="btn btn-danger">LEER BLOG</a>
                    </div>
                </div> -->

                <!--PAGINATION-->
                <nav aria-label="Page navigation example" style="float: right">
                
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link text-secondary" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      
                    </ul>
                </nav>
            </div>
            <div class="col-sm-4" data-aos="fade-up" style="padding-left: 5%;">
            

                <!-- @include('layouts.sidebar-news') -->
                
            </div>
        </div>
    </div>
@endsection

@section('section-scripts')
    <script src="{{ URL::asset('js/homepage.js') }}"></script>    
@endsection