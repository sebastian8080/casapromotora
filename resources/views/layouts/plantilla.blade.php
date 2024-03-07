<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casa Promotora - @yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css?v=3') }}">

    <!--EFECTOS DE APARECIMIENTO-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('scss/style.scss?v=2') }}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900" rel="stylesheet">


    <!-- Meta Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '519986722991895');
      fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=519986722991895&ev=PageView&noscript=1"
      /></noscript>
    <!-- End Meta Pixel Code -->

    {{-- Facebook Verification --}}
    <meta name="facebook-domain-verification" content="jp22ipj62vxlwvbhwunsdns2r0tjh2" />

    <meta name="google-site-verification" content="Y-9EP4y_a2rT6CR0jEqKRGpf7EhQ9yJ2jiUSz1BVs60" />

    <script src="https://www.google.com/recaptcha/api.js?render=6LdteCQjAAAAABUiBdqPc7yMNEO4zFyAflmMhE_-"></script>

    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2HZKLKNFFJ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-2HZKLKNFFJ');
    </script>

    <style>
      .grecaptcha-badge { visibility: hidden; }
    </style>


    @yield('content-head')
</head>
<body>
  <!--NAVBAR-->
    <nav id="menu" class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('pages.home') }}"><img id="img-logo" class="img-fluid" width="120px" height="85px" src="{{ URL::asset('img/logo-rojo-promotora.png'); }}" alt="Logo Casa Credito Promotora"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-secondary rounded" style="opacity: 0.5"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul id="itemMenu" class="navbar-nav rounded ms-auto">
              <li class="nav-item">
                <a id="menu-item2" class="nav-link text-white rounded" href="{{ route('pages.projects') }}">PROYECTOS</a>
              </li>
              <li class="nav-item dropdown">
                <a id="menu-item4" class="nav-link text-white rounded" href="{{ route('pages.partners') }}">CONSTRUCTORAS</a>
                {{-- <ul id="dropdown-menu" class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle text-dark" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Entidades financieras <i class="fa-solid fa-angle-right"></i></a>
                    <ul id="dropdown-submenu" class="dropdown-menu shadow" style="margin-left: 165px; margin-top: -37px">
                      <li><a class="dropdown-item" href="{{ route('pages.partners') }}"><b>Los Rios</b></a></li>
                      <li><a class="dropdown-item" href="#"><b>Corpu Corp</b></a></li>
                    </ul>
                  </li>
                  <li class="dropend">
                    <a class="dropdown-item dropdown-toggle text-dark" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Construye <i class="fa-solid fa-angle-right"></i></a>
                    <ul id="dropdown-submenu" class="dropdown-menu shadow" style="margin-left: 165px; margin-top: -37px">
                      <li><a class="dropdown-item" href="{{ route('socios.dolmen')}}"><b>Dolmen</b></a></li>
                      <li><a class="dropdown-item" href="{{ route('socios.dolmen.catalogo')}}"><b>Catálogo</b></a></li>
                      <li><a class="dropdown-item" href="{{ route('socios.construye')}}"><b>Construcción</b></a></li>
                    </ul>
                  </li>
                </ul> --}}
              </li>
              <li class="nav-item dropdown">
                <a id="menu-item1" class="nav-link dropdown-toggle text-white rounded" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" href="">NOSOTROS <i class="fa-solid fa-plus"></i></a>
                <ul id="dropdown-menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('pages.about') }}">Nuestra Empresa</a></li>
                  <li><a class="dropdown-item" href="{{ route('pages.equipo') }}">Equipo</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a id="menu-item5" class="nav-link text-white rounded" href="{{ route('pages.contact') }}">CONTACTANOS</a>
              </li>
              <li class="nav-item">
                <a id="menu-item3" class="nav-link text-white rounded" href="{{ route('pages.news') }}">BLOG</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield('content')


      <!--FOOTER-->
    {{-- <footer>
      <section class="bg-light">
        <section class="container px-5 py-5 footer-section">
          <section class="row px-5">
            <div class="col-sm-6 d-flex justify-content-center border-left" style="border-right: 1px solid #89062E">
              <div>
                <div class="d-flex align-items-center gap-2 mb-4">
                  <img width="40px" height="40px" src="{{ asset('img/location-icon.png') }}" alt="">
                  <a class="text-dark" style="text-decoration: none" href="https://maps.app.goo.gl/fxWb66XY8BrzVhaf8" target="_blank">
                    <span style="font-size: 15px;">Remigio Tamariz Crespo y Av. Fray Vicente Solano</span>
                  </a>
                </div>
                <div>
                  <div class="d-flex align-items-center gap-2 mb-4">
                    <img width="38px" height="38px" src="{{ asset('img/telefono-inteligente-icon.png') }}" alt="">
                    <a href="tel:+593983849073" class="text-dark" style="text-decoration: none">
                      <span>098-384-9073</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 d-flex justify-content-center" style="border-left: 1px solid #89062E">
              <div>
                <div class="d-flex align-items-center gap-2 mb-4">
                  <img width="40px" height="40px" src="{{ asset('img/email-icon.png') }}" alt="">
                  <a href="mailto:info@casapromotora.com" class="text-dark" style="text-decoration: none">
                    <span>info@casapromotora.com</span>
                  </a>
                </div>
                <div class="d-flex align-items-center gap-2 mb-4">
                  <img width="30px" height="30px" src="{{ asset('img/telefono-icon.png') }}" alt="">
                  <a href="tel:+072889355" class="text-dark" style="text-decoration: none">
                    <span>(07) 288-9355</span>
                  </a>
                </div>
                <div class="d-flex align-items-center gap-2 mb-4">
                  <div class="mx-2">
                    <a target="_blank" href="https://www.facebook.com/casapromotora">
                      <i class="fab fa-facebook fa-2x text-dark"></i>
                    </a>
                  </div>
                  <div class="mx-2">
                    <a target="_blank" href="https://www.instagram.com/casapromotora/">
                      <i class="fab fa-instagram fa-2x text-dark"></i>
                    </a>
                  </div>
                  <div class="mx-2">
                    <a target="_blank" href="https://www.tiktok.com/@casapromotora">
                      <i class="fab fa-tiktok fa-2x text-dark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
          </section>
        </section>
      </section>
      <section class="text-center text-muted my-4">
        <p>Copyright 2023 Casa Promotora. All rights reserved</p>
      </section>
    </footer> --}}

    <footer>
      <section class="bg-light">
        <section class="container px-4 py-4 footer-section">
          <section class="row px-1">
            <div class="col-sm-6 d-flex justify-content-center">
              <div>
                <div class="d-flex align-items-center gap-2 mb-4">
                  <img width="350px" height="120px" src="{{ asset('img/logo-rojo-promotora.png') }}" alt=""></br>
                </div>
                <div class="px-4 py-2">
                    <p style="text-align: justify">Casa Promotora, con más de 15 años de experiencia en el mercado
                        inmobiliario, se especializa en propiedades lujosas de alto prestigio y
                        calidad excepcional. Satisface las demandas de clientes que buscan residencias
                        exclusivas, ofreciendo un portafolio selecto que refleja 
                        nuestro compromiso con la excelencia y el lujo en cada detalle. 

                    </p>
                </div>
              </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4 d-flex justify-content-center">
              <div class="px-4 py-2">
                <h3>Contáctanos</h3>
                <div class="d-flex align-items-center gap-2 mb-4 mt-3">
                  <img width="35px" height="35px" src="{{ asset('img/icono_llamada.png') }}" alt="">
                  <a href="tel:+072889355" class="text-dark" style="text-decoration: none">
                    <span>07 288 93 55</span>
                  </a>
                </div>
                <div class="d-flex align-items-center gap-2 mb-4">
                  <img width="35px" height="35px" src="{{ asset('img/icono_whatsapp.png') }}" alt="">
                  <a href="mailto:info@casapromotora.com" class="text-dark" style="text-decoration: none">
                    <span>098 979 8238</span>
                  </a>
                </div>
                <div class="d-flex align-items-center gap-2 mb-4">
                  <img width="35px" height="35px" src="{{ asset('img/icono_email.png') }}" alt="">
                  <a href="mailto:info@casapromotora.com" class="text-dark" style="text-decoration: none">
                    <span>info@casapromota.com</span>
                  </a>
                </div>
                <div class="d-flex align-items-center gap-2 mb-4">
                  <img width="35px" height="35px" src="{{ asset('img/icono_ubicacion.png') }}" alt="">
                  <a href="tel:+072889355" class="text-dark" style="text-decoration: none">
                    <span>Remigio Tamariz Crespo y Av. Fray Vicente Solano</span>
                  </a>
                </div>
                <h3>Social</h3>
                <div class="d-flex align-items-center gap-2 mb-4">
                  <div class="mx-2">
                    <a target="_blank" href="https://www.facebook.com/casapromotora">
                    <img width="55px" height="55px" class="img-fluid" src="{{asset('img/icono_facebook.png')}}" alt="Casa Credito"> 
                    </a>
                  </div>
                  <div class="mx-2">
                    <a target="_blank" href="https://www.instagram.com/casapromotora/">
                    <img width="55px" height="55px" class="img-fluid" src="{{asset('img/icono_instagram.png')}}" alt="Casa Credito"> 
                    </a>
                  </div>
                  <div class="mx-2">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=+593983849073&text=Deseo%20saber%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20proyectos%20de%20Casa%20Promotora">
                    <img width="55px" height="55px" class="img-fluid" src="{{asset('img/icono_whatsapp.png')}}" alt="Casa Credito"> 
                    </a>
                  </div>
                  <div class="mx-2">
                    <a target="_blank" href="https://www.tiktok.com/@casapromotora">
                    <img width="55px" height="55px" class="img-fluid" src="{{asset('img/icono_tiktok.png')}}" alt="Casa Credito"> 
                  
                    </a>
                  </div>
                </div>
              </div>
            </div> 
          </section>
        </section>
      </section>
      <section class="text-center text-muted my-4">
        <p>Copyright 2023 Casa Promotora. All rights reserved</p>
      </section>
    </footer>

        <a style="color: #ffffff" href="https://api.whatsapp.com/send?phone=+593983849073&text=Deseo saber más información sobre los proyectos de Casa Promotora" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

        {{-- 593983849073 --}}
    
    @yield('section-scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--SCRIPT DE ICONOS-->
    <script src="https://kit.fontawesome.com/29da43bc4d.js" crossorigin="anonymous"></script>

    <!--SCRIPT PARA GENERAR LOS EFECTOS DE LA PAGINA-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
      document.addEventListener('click',function(e){
  // Hamburger menu
      if(e.target.classList.contains('hamburger-toggle')){
        e.target.children[0].classList.toggle('active');
      }
    });

    document.addEventListener('submit', function(e){
      e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6LdteCQjAAAAABUiBdqPc7yMNEO4zFyAflmMhE_-', {action: 'submit'}).then(function(token) {
            let form = e.target;
            let input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'g-recaptcha-response';
            input.value = token;

            form.appendChild(input);

            form.submit();
          });
        });
    });
    </script>
</body>
</html>
      
    

        
    