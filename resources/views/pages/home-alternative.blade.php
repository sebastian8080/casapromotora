<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

    img{
        width: 100%;
        height: 100%;
    }

    /*Linea pequeña debajo de BIENVENIDOS A SU NUEVO HOGAR Y A SU MEJOR INVERSION*/
    #linea_pequeña{
      width: 40px;
      height: 2px;
      margin-left: 50%;
      color: red;
      font-weight: bold;
    }

    /*Para hacer la parte superior e inferior opaca de la imagen de la segunda fila*/
    #fila1, #fila3{
      background-color: #ffffff;
      opacity: 0.6;
      height: 20%;
    }

    /*Para que el texto de la parte opaca de la imagen no esta opaco*/
    #texto_fila1{
      font-weight: bold;
      color: #000000;
      margin-top: 4%;
      font-size: 2vw;
    }

    /*Segundo carrusel de la segunda fila en la imagen opaca*/
    .carrusel{
      margin: 70px;
    }

    /*Tres imagenes de VILLAS DEPARTAMENTOS Y SUITES*/
    .fila-imagenes{
      width: 100%;
      height: 150%;
    }

    /*FILA PEQUEÑA DE CONOZCA TODAS LAS PROPIEDADES QUE TIENE UN COLOR MEDIO GRIS*/
    #fila4{
      background-color: #cac7c7;
    }

    /*HACER EL TEXTO DE VILLAS DEPARTAMENTOS Y SUITES EN COLOR BLANCO*/
    .texto-imagenes{
      color: #ffffff;
      -webkit-text-stroke: 1px rgb(162, 157, 157);
      font-size: 3vw;
    }

    #card-form{
      background-color:  #e2dcdc;
      color: #635f5f;
    }

    /*TEXTO DE LA FILA CINCO CON MARGEN Y LETRA EN BOLD*/
    #text-fila-cinco{
      margin-left: 20%;
      font-weight: bold;
      margin-top: 30%;
      font-size: 4vw;
    }

    /*PONERLE BORDE AL TEXTO DE LA FILA CINCO*/
    #col-row5{
      border-style: solid;
      border-color: #ffffff;
      width: 40%;
      height: 80%;
      border-left-style: none;
      margin-left: 15%;
    }

    /*TAMAÑO AL TEXTO DEL BOTON PARA HACERLO RESPONSIVE*/
    #btn-row5{
      font-size: 1.5vw;
    }

    /*TAMAÑO AL TITULO DE LA FILA2*/
    #text-row2{
      font-size: 2.5vw;
    }

    /*PARRAFO DE LA FILA 2 CONOCE CADA UNO DE LOS PROYECTOS QUE TENEMOS*/
    #parrafo-fila2{
      font-size: 1.5vw;
    }

    /*BOTON DE LA FILA 2 VER TODOS LOS PROYECTOS*/
    .link-fila2{
      font-size: 1.5vw;
    }

    /*TEXTO DE PARTNERS*/
    #text-partners{
      font-size: 3vw;
    }

    /*TITULO DEL SEGUNDO CARRUSEL PEQUEÑO*/
    .text-carrusel-title{
      font-size: 1.5vw;
    }

    /*DESCRIPCION DEL SEGUNDO CARRUSEL PEQUEÑO*/
    .text-description-carrusel{
      font-size: 1.1vw;
    }

    /*TITULO DE LA FILA 6 INFORMACION DE CONTACTO*/
    #text-row6{
      font-size: 2.5vw;
      margin-top: 15%;
    }

    /*CORREO Y NUMERO DE LA ULTIMA FILA*/
    .text-second-row6{
      font-size: 1.5vw;
    }

    .img-logo{
      width: 30%;
    }

    /*CONFIGURACION DEL SLIDER*/
    

    </style>
</head>
<body>

    <div class="container">

        <!--PRIMERA FILA DEL CARRUSEL-->

        <nav class="navbar navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img class="img-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-YbEZprTzss0Ermc5slVp8ZG8E-RroT0jPOCEMQ7o72cZGrAVh_4r1mk89p_steJXEq4&usqp=CAU" alt="">
            </a>
          </div>
        </nav>

        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://i2.wp.com/moovemag.com/wp-content/uploads/2020/12/inversion-inmobiliaria.jpg?fit=700%2C459&ssl=1&resize=1280%2C720" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://www.100plandenegocios.com/wp-content/uploads/2021/07/negocio-inmobiliaria.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://i1.wp.com/clinmoo.com/wp-content/uploads/2019/01/estudio-de-oferta-inmobiliaria-e1549278500658.jpeg" class="d-block w-100" alt="...">
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

        <!--SEGUNDA FILA PROYECTOS ECUADOR-->

        <hr>

        <div class="row position-relative">

            <img src="https://www.nosotros-los-arquitectos.com/wp-content/uploads/2020/03/Plano-arquitectonico-blogc-1-1024x684-1.jpg" class="img-fluid" alt="">
          
            <div id="fila1" class="row position-absolute">
              <h2 id="texto_fila1" class="text-center opacity-0">BIENVENIDOS A SU NUEVO HOGAR Y A SU MEJOR INVERSIÓN</h2>
              <hr id="linea_pequeña">
            </div>

            <div class="row">
              <div class="col-6 col-sm-6 col-md-6 p-3 position-absolute top-50 start-0 translate-middle-y mr-5">
                <div class="text-center">
                  <h3 id="text-row2">Proyectos Ecuador</h3>
                  <p id="parrafo-fila2">Conoce cada uno de los proyectos que tenemos y conoce la nueva experiencia en proyectos inmobiliarios</p>
                  <a class="link-fila2" href="#">Ver todos los proyectos ></a>
                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-6 p-3 position-absolute top-50 end-0 translate-middle-y">
                <div class="carrusel m-1">
                  <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://www.casasparaconstruir.com/projetos/122/01.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.pinimg.com/originals/6b/57/80/6b578015c6ddf83596b9ebc724bd576d.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.pinimg.com/736x/e6/87/56/e68756b224c6a89424742d207a87e30e.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>  
                </div>
                <h5 class="text-carrusel-title">Ohio Quito</h5>
                <p class="text-description-carrusel">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis consectetur accusamus dicta quam recusandae. Quae distinctio velit id facilis illum autem libero. Quae at magni aliquam quos voluptates rem porro.</p>
              </div>
            </div>

            <div id="fila3" class="row position-absolute bottom-0">
              <h3 id="text-partners" class="text-center">Partners</h3>
            </div>
        </div>

        <hr>

        <!--TERCERA FILA-->
        <div id="row3" class="row">
          <div class="col-4 col-sm-4 col-md-4">
            <h1 class="texto-imagenes">VILLAS</h1>
            <a href="#"><img class="fila-imagenes" src="https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/270955089.jpg?k=0ff923c4d7ef12ce13b44cc582d44ac8ac4d424ef6871d492e96301d5b27211b&o=" alt=""></a>
          </div>
          <div class="col-4 col-sm-4">
            <h1 class="texto-imagenes">DEPARTAMENTOS</h1>
            <a href="#"><img class="fila-imagenes" src="https://media-cdn.tripadvisor.com/media/vr-splice-j/0a/9a/35/22.jpg" alt=""></a>
          </div>
          <div class="col-4 col-sm-4">
            <h1 class="texto-imagenes">SUITES</h1>
            <a href="#"><img class="fila-imagenes" src="https://images.adsttc.com/media/images/5a8e/392f/f197/cc42/b800/05bc/large_jpg/Maleku_3.jpg?1519270174" alt=""></a>
          </div>
        </div>

        <hr style="margin-top: 25%">

        <!--CUARTA FILA DE CONOZCA TODAS LAS PROPIEDADES-->
        <div id="fila4" class="row">

          <div class="col-sm-6">
            <h3 id="text-row4" class="text-center mt-5">Conozca todas las propiedades
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
              </svg>
            </h3>
          </div>

          <div class="col-sm-6">
            <p class="mt-5">Casa Credito Promotora Inmobiliaria, el portal que cambiará la perspectiva de promocionar inmuebles en Ecuador</p>
            <div class="mb-5">
              <button class="btn btn-secondary m-1">Nosotros</button><button class="btn btn-secondary">Presentación</button>
            </div>
          </div>

        </div>

        <hr>

        <!--QUINTA FILA IMAGEN DE CREDITO-->
        <div class="row position-relative">
          <img src="https://www.cuerpomente.com/medio/2019/11/04/familia_db408d1a_1200x630.jpg" class="img-fluid" alt="">
          <div id="col-row5" class="position-absolute top-50 start-0 translate-middle-y">
            <h1 id="text-fila-cinco" class="text-light">¡Lo que siempre <br>has querido!</h1>
            <button id="btn-row5" class="btn btn-danger float-end">Solicite un credito ></button>
          </div>
        </div>

        <hr>

        <!--SEXTA FILA ULTIMA-->
        <div class="row m-5 pb-5">
          <div id="card-form" class="col-sm-5 text-center rounded">
            <h2 id="text-row6">INFORMACION DE CONTACTO</h2>
            <p class="text-second-row6">info@casacreditopromotora.com</p>
            <p class="text-second-row6">+593 983 849 073</p>
          </div>
          <div class="col-sm-7 pb-5">
            <form class="">
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre">
              </div>
              <div class="mb-3">
                <label for="telefono-celular" class="form-label">Telefono / Celular</label>
                <input type="number" class="form-control" id="telefono-celular">
              </div>
              <div class="mb-3">
                <label for="correo" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" id="correo" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <input type="text" class="form-control" id="mensaje">
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-danger me-md-2 rounded-pill">Enviar mensaje</button>
              </div>
            </form>
          </div>
        </div>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>