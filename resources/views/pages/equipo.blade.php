@extends('layouts.plantilla')

@section('title', 'Conozca a Nuestro Equipo')

@section('content-head')
<!-- Primary Meta Tags -->
<meta name="title" content="Casa Promotora - Conozca a Nuestro Equipo" />
<meta name="description" content="Expertos en bienes raíces para comprar, vender e invertir. Encuentre su propiedad ideal con nuestro equipo confiable ✅" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ Request::url() }}" />
<meta property="og:title" content="Casa Promotora - Conozca a Nuestro Equipo" />
<meta property="og:description" content="Expertos en bienes raíces para comprar, vender e invertir. Encuentre su propiedad ideal con nuestro equipo confiable." />
<meta property="og:image" content="{{ asset('img/about/oficinasnuevas-min.jpg') }}" />

<style>
    @media screen and (max-width: 780px){
        #title{ margin-top: 100px !important; padding-bottom: 20px !important}
    }
</style>
@endsection

@section('content')

<section id="title" class="container position-relative" style="margin-top: 140px">
    <h1 class="subtitles" style="-webkit-text-stroke: 1px black; color: white; font-size: 6rem; font-weight: bold; width: 100%;"> NUESTRO <br><span class="subtitles" style="color: black; font-size: 5rem">EQUIPO</span></h1>
</section>

<section class="container py-4">
    <div class="mb-5">
        <h2><span style="-webkit-text-stroke: 1px black; color: rgb(0, 0, 0); font-size: 2rem; font-weight: bold; width: 100%; border-bottom: 2px solid red; padding-bottom: 5px">ADMINISTRATIVO</span></h2>
    </div>
    <div class="row">
        @for ($i = 1; $i < 2; $i++)
            <div class="col-sm-4 mb-4" data-aos="fade-up" data-aos-duration="2000">
                <div class="position-relative">
                    <img class="img-fluid" src="{{ asset('img/team/administracion'.$i.'.jpg') }}" alt="">
                    <div class="position-absolute top-0 start-50 translate-middle-x w-75">
                        <p class="bg-white px-3 py-1 text-center fw-bold">@if($i == 1) ANABEL LOPEZ @elseif($i == 2) DANIELA MERCHAN @endif</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class="row py-5">
        <div class="mb-5">
            <h2><span style="-webkit-text-stroke: 1px black; color: rgb(0, 0, 0); font-size: 2rem; font-weight: bold; width: 100%; border-bottom: 2px solid red; padding-bottom: 5px">CRÉDITOS</span></h2>
        </div>
        @for ($i = 1; $i < 4; $i++)
            <div class="col-sm-4 mb-4" data-aos="fade-up" data-aos-duration="2000">
                <div class="position-relative">
                    <img class="img-fluid" src="{{ asset('img/team/creditos'.$i.'.jpg') }}" alt="">
                    <div class="position-absolute top-0 start-50 translate-middle-x w-75">
                        <p class="bg-white px-3 py-1 text-center fw-bold">@if($i == 1) FERNANDA PARRA @elseif($i == 2) MICHELLE CORDERO @elseif($i == 3) SANDRA VALLADARES @endif</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class="row py-5">
        <div class="mb-5">
            <h2><span style="-webkit-text-stroke: 1px black; color: rgb(0, 0, 0); font-size: 2rem; font-weight: bold; width: 100%; border-bottom: 2px solid red; padding-bottom: 5px">MARKETING</span></h2>
        </div>
        @for ($i = 1; $i < 4; $i++)
            <div class="col-sm-4 mb-4" data-aos="fade-up" data-aos-duration="2000">
                <div class="position-relative">
                    <img class="img-fluid" src="{{ asset('img/team/marketing'.$i.'.jpg') }}" alt="">
                    <div class="position-absolute top-0 start-50 translate-middle-x w-75">
                        <p class="bg-white px-3 py-1 text-center fw-bold">@if($i == 1) JIMMY RIERA @elseif($i == 2) FERNANDA GUALPA @endif</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class="row py-5">
        <div class="mb-5">
            <h2><span style="-webkit-text-stroke: 1px black; color: rgb(0, 0, 0); font-size: 2rem; font-weight: bold; width: 100%; border-bottom: 2px solid red; padding-bottom: 5px">SISTEMAS</span></h2>
        </div>
        @for ($i = 1; $i < 3; $i++)
            <div class="col-sm-4 mb-4" data-aos="fade-up" data-aos-duration="2000">
                <div class="position-relative">
                    <img class="img-fluid" src="{{ asset('img/team/sistemas'.$i.'.jpg') }}" alt="">
                    <div class="position-absolute top-0 start-50 translate-middle-x w-75">
                        <p class="bg-white px-3 py-1 text-center fw-bold">@if($i == 1) MIGUEL VARGAS @elseif($i == 2) SEBASTIAN ARMIJOS @endif</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</section>
    
@endsection

@section('section-scripts')
    <script>
        let nav = document.getElementById('menu');
        nav.classList.add('navbar-light');
        nav.classList.add('bg-light');
        nav.classList.remove('navbar-dark');

        for (let index = 1; index < 7; index++) {
            let element = document.querySelector('#menu-item'+index);
            element.classList.remove('text-white');
        }
    </script>
@endsection