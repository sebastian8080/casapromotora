@extends('layouts.plantilla')

@section('title', 'Contacto')

@section('content-head')
    <link rel="stylesheet" href="{{URL::asset('css/secondary-pages.css'); }}">
@endsection

@section('content')

    <div class="position-relative">
        <video style="top: 0; left: 0; width: 100%; height: 100%; opacity: 1; filter: brightness(60%)" muted autoplay loop>
            <source src="video/contact.mp4" type="video/mp4">
        </video>
        <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
            <h1 class="fw-bold" style="font-size: 4vw;">Atendemos tus necesidades</h1>
            <h4 class="fw-bold" style="font-size: 2.5vw;">Contacta con nosotros sin ningún compromiso</h4>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-5 mt-3">
                <h3 class="fw-bold mb-4">Contáctanos</h3>
                <h4>CASA CREDITO</h4>
                <p>Av. Juan Iñiguez 3-87 y D. Gonzalo Cordero <br> Cuenca-Ecuador</p>
                <p>+593 987 654 3210</p>
                <h4>HORARIO</h4>
                <p>09h00 - 18h00 <br> Lunes a Viernes <br> Sábados y Domingos con cita previa</p>
                <iframe
                    class="rounded" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6856335361763!2d-79.013945231424!3d-2.9065648790995997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd1933cc40a85d%3A0x3f5a0137411fe95e!2sCasa%20Cr%C3%A9dito%20Inmobiliaria!5e0!3m2!1ses!2sec!4v1636560605231!5m2!1ses!2sec"
                    width="100%" 
                    height="250" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
            <div class="col-sm-7 mt-3">
                <form action="{{ route('send.mail.contact') }}" method="POST">
                    @csrf
                    <h3 class="mb-4">Mis Datos</h3>
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre y Apellido*" autocomplete="off" required/>
                    </div>
                
                    <!-- Email input -->
                    <div class="row">
                        <div class="col form-outline mb-4">
                        <input type="text" name="telefono" class="form-control" placeholder="Teléfono*" autocomplete="off" required/>
                        </div>

                        <div class="col form-outline mb-4">
                            <input type="email" name="email" class="form-control" placeholder="Email*" autocomplete="off" required/>
                        </div>
                    </div>

                    <h3 class="mb-4">Estoy interesado en</h3>

                    <div class="row">
                        <div class="col">
                            <select class="form-control mb-4" name="interes" required>
                                <option value="">Elija</option>
                                <option value="DEPARTAMENTOS ADRA">Departamentos Adra</option>
                                <option value="DEPARTAMENTOS FUTURA NARANCAY">Departamentos Futura Narancay</option>
                                <option value="CONDOMINIOS TOSCANA">Condominios Toscana</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-control mb-4" name="operacion" required>
                                <option value="">Operación</option>
                                <option value="Venta">Venta</option>
                                <option value="Alquiler">Alquiler</option>
                            </select>
                        </div>
                    </div>
                
                    <div class="form-outline mb-4">
                        <input type="number" class="form-control" name="preciomaximo" placeholder="Precio máximo" autocomplete="off" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-outline mb-4">
                                <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline mb-4">
                                <input type="text" class="form-control" name="zona" placeholder="Zona" autocomplete="off" required>
                            </div>
                        </div>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" rows="5" placeholder="Mensaje*" name="mensaje" required></textarea>
                    </div>
                
                    <!-- Submit button -->
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-outline-danger btn-block btn-lg mb-5">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (session('validContact'))
        @php
            echo "
                <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
                <script>
                    swal('Se ha enviado su información', 'Nos comunicaremos lo más pronto posible!', 'success');
                </script>
                ";    
        @endphp
    @endif
@endsection

@section('section-scripts')
    <script src="{{ URL::asset('js/homepage.js') }}"></script>
@endsection