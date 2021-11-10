@extends('layouts.plantilla')

@section('title', 'Contacto')

@section('content-head')
    <link rel="stylesheet" href="{{URL::asset('css/secondary-pages.css'); }}">
@endsection

@section('content')

    <div>
        <video style="position: relative; top: 0; left: 0; width: 100%; height: 100%;" muted autoplay loop>
            <source src="video/Videos de naturaleza (Colección) Videos sin copyright.mp4" type="video/mp4">
        </video>
    </div>

    <div class="capa" style="position: absolute; top: 0; left:0; width: 100%; height: 100%; background: #1c1c1d; opacity:0.3;"></div>

    <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
        <h1 class="display-4">Atendemos tus necesidades</h1>
        <h4>Contacta con nosotros sin ningún compromiso</h4>
    </div>

    <div class="row m-5 p-5">
        <div class="col-sm-5">
            <h3 class="fw-bold">Contáctanos</h3>
            <br>
            <h4>CASA CREDITO</h4>
            <p>Av. Juan Iñiguez 3-87 y D. Gonzalo Cordero <br> Cuenca-Ecuador</p>
            <p>+593 987 654 3210</p>
            <h4>HORARIO</h4>
            <p>09h00 - 18h00 <br> Lunes a Viernes <br> Sábados y Domingos con cita previa</p>
            <iframe
                class="rounded" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6856335361763!2d-79.013945231424!3d-2.9065648790995997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd1933cc40a85d%3A0x3f5a0137411fe95e!2sCasa%20Cr%C3%A9dito%20Inmobiliaria!5e0!3m2!1ses!2sec!4v1636560605231!5m2!1ses!2sec"
                width="350" 
                height="250" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
        <div class="col-sm-7">
            <form>
                <h3 class="mb-5 mt-4">Mis Datos</h3>
                <!-- Name input -->
                <div class="form-outline mb-5">
                  <input type="text" class="form-control" placeholder="Nombre*" />
                </div>
              
                <!-- Email input -->
                <div class="form-outline mb-5">
                  <input type="text" class="form-control" placeholder="Teléfono*"/>
                </div>

                <div class="form-outline mb-5">
                    <input type="email" class="form-control" placeholder="Email*"/>
                </div>
              
                <!-- Message input -->
                <div class="form-outline mb-5">
                  <textarea class="form-control" rows="8" placeholder="Mensaje*"></textarea>
                </div>
              
                <!-- Submit button -->
                <!-- <button type="submit" class="btn btn-primary btn-block mb-4">Send</button> -->
              </form>
        </div>
    </div>



    {{-- <div class="position-relative">
        <img class="img-fluid" src="https://www.smarthomemallorca.com/Portals/inmosmart/Images/bg-top.png" alt="Imagen de fondo">
    </div>
    <div class="row position-absolute top-0 start-0" style="padding-top: 8%; padding-left: 10%"> 
        <div class="col-sm-5 rounded" style="background-color: rgb(255, 255, 255);">
            <h4 class="m-4">CASA CREDITO</h4>
            <p class="m-4">Av. Juan Iñiguez 3-87 y D. Gonzalo Cordero <br> Cuenca, Ecuador</p>
            <p class="m-4">+593 987 654 3210 <br> ventas@casacreditopromotora.com</p>
            <h4 class="m-4">HORARIO</h4>
            <p class="m-4">09h00 - 18h00 <br> Lunes a Viernes <br> Sábados y Domingos con cita previa</p>
            <iframe
                class="rounded" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6856335361763!2d-79.013945231424!3d-2.9065648790995997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd1933cc40a85d%3A0x3f5a0137411fe95e!2sCasa%20Cr%C3%A9dito%20Inmobiliaria!5e0!3m2!1ses!2sec!4v1636560605231!5m2!1ses!2sec"
                width="350" 
                height="250" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>

        </div>
        <div class="col-sm-1">

        </div>
        <div class="col-sm-6 rounded" style="background-color: aliceblue;">
            <div class="row">
                <div class="col-sm-6">
                    <form>
                        <h3 class="mb-5 mt-4">MENSAJE</h3>
                        <!-- Name input -->
                        <div class="form-outline mb-5">
                          <input type="text" class="form-control" placeholder="Nombre*" />
                        </div>
                      
                        <!-- Email input -->
                        <div class="form-outline mb-5">
                          <input type="text" class="form-control" placeholder="Teléfono*"/>
                        </div>

                        <div class="form-outline mb-5">
                            <input type="email" class="form-control" placeholder="Email*"/>
                        </div>
                      
                        <!-- Message input -->
                        <div class="form-outline mb-5">
                          <textarea class="form-control" rows="8" placeholder="Mensaje*"></textarea>
                        </div>
                      
                        <!-- Submit button -->
                        <!-- <button type="submit" class="btn btn-primary btn-block mb-4">Send</button> -->
                      </form>
                </div>
                <div class="col-sm-6">
                    <form>
                        <h3 class="mb-5 mt-4">INTERESADO EN</h3>
                        <!-- Select proyecto-->
                        <select class="form-select mb-5" aria-label="Default select example">
                            <option selected>Elija</option>
                            <option value="1">Proyecto1</option>
                            <option value="2">Proyecto2</option>
                        </select>
                      
                        <!-- Select operacion -->
                        <select class="form-select mb-5" aria-label="Default select example">
                            <option selected>Operación</option>
                            <option value="1">Venta</option>
                            <option value="2">Alquiler</option>
                        </select>

                        <div class="form-outline mb-5">
                            <input type="number" class="form-control" placeholder="Precio máximo"/>
                        </div>
                
                        <!-- Poblacion input -->
                        <div class="form-outline mb-5">
                            <input type="text" class="form-control" placeholder="Población"/>
                        </div>

                        <!-- Poblacion input -->
                        <div class="form-outline mb-5">
                            <input type="text" class="form-control" placeholder="Zona"/>
                        </div>
                      
                        <!-- Submit button -->
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-outline-danger btn-block btn-lg mb-5">Enviar</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>

    </div> --}}
@endsection