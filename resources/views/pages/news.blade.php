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
    <div>
        <img style="width: 100%; filter: brightness(60%)" src="https://www.elmueble.com/medio/2018/12/18/salon-en-blanco-con-techo-de-vigas-de-madera-y-dos-sofas-enfrentados_9862685e_1280x650.jpg" class="img-fluid" alt="...">
    </div>

    <div data-aos="flip-up" class="row p-5 m-5 rounded" style="background: #f4f4f4">
        <h1 class="text-center">
            PRUEBA2
        </h1>
    </div>

    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-8">
                <div class="card mb-5" data-aos="fade-up">
                    <div class="card-body">
                    <h5 class="card-title fw-bold">10 CONSEJOS PARA VENDER SU HOGAR</h5>
                    <p class="card-text"><small class="text-muted">NOV 11, 2021</small></p>
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