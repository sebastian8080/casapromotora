<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ ucfirst($type) }} en Venta | Casa Promotora</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900" rel="stylesheet">
    <style>
        html, body{
            min-width: 100%;
            overflow-x: hidden;
            font-family: 'Montserrat'
        }
    </style>
    <livewire:styles />
</head>
<body>

    <header class="container mx-auto py-5 px-5">
        {{-- <img class="w-[140px] md:w-[200px]" src="{{ asset('img/color_promotora.png') }}" alt="">
        <ul class="flex items-center justify-center gap-x-20">
            <li class="text-xl font-semibold hover:bg-slate-950 hover:text-white cursor-pointer px-5 py-2"><a href="#price">PRECIO</a></li>
            <li class="text-xl font-semibold hover:bg-slate-950 hover:text-white cursor-pointer px-5 py-2"><a href="#gallery">GALERIA</a></li>
            <li class="text-xl font-semibold hover:bg-slate-950 hover:text-white cursor-pointer px-5 py-2"><a href="#contact">CONTÁCTENOS</a></li>
        </ul>

        <div class="bg-white  absolute top-0 left-0 z-1">
            <ul></ul>
        </div> --}}
        <nav class="bg-white border-gray-200">
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                    <img class="w-[140px] md:w-[200px]" src="{{ asset('img/color_promotora.png') }}" alt="">
              </div>
              <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                  </svg>
              </button>
              <div class="hidden md:block w-full md:block md:w-auto">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li class="text-xl font-semibold hover:bg-slate-950 hover:text-white cursor-pointer px-5 py-2"><a href="#price">PRECIO</a></li>
                    <li class="text-xl font-semibold hover:bg-slate-950 hover:text-white cursor-pointer px-5 py-2"><a href="#gallery">GALERIA</a></li>
                    <li class="text-xl font-semibold hover:bg-slate-950 hover:text-white cursor-pointer px-5 py-2"><a href="#contact">CONTÁCTENOS</a></li>
                </ul>
              </div>
            </div>
            <div class="w-full hidden md:w-auto" id="navbar-default">
              <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 shadow bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                  <li class="text-xl font-semibold hover:bg-slate-950 hover:text-white cursor-pointer px-5 py-2"><a href="#price">PRECIO</a></li>
                  <li class="text-xl font-semibold hover:bg-slate-950 hover:text-white cursor-pointer px-5 py-2"><a href="#gallery">GALERIA</a></li>
                  <li class="text-xl font-semibold hover:bg-slate-950 hover:text-white cursor-pointer px-5 py-2"><a href="#contact">CONTÁCTENOS</a></li>
              </ul>
            </div>
          </nav>
    </header>

    <livewire:carousel-projects :type="$type" />

    <livewire:info-projects :type="$type" />

    <footer class="bg-[#F7F7F7] text-center py-5 w-full font-semibold">
        <p>CASAPROMOTORA Copyright</p>
    </footer>

    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 hidden right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-[#F7F7F7] rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Envíenos su información
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('landing.send.lead') }}" method="POST">
                <div class="flex justify-center items-center py-5">
                        @csrf
                        <div class="gap-y-4 w-full px-10 mt-5 md:mt-0">
                            <div class="grid grid-rows md:grid-cols-2 gap-x-4 my-3">
                                <input type="text" name="name" class="px-5 py-2 rounded-md mb-3 md:mb-0" placeholder="Nombre" required>
                                <input type="text" name="lastname" class="px-5 py-2 rounded-md" placeholder="Apellido" required>
                            </div>
                            <div class="grid grid-rows md:grid-cols-2 gap-x-4 my-3">
                                <input type="text" name="email" class="px-5 py-2 rounded-md mb-3 md:mb-0" placeholder="Correo electrónico" required>
                                <input type="text" name="phone" class="px-5 py-2 rounded-md" placeholder="Teléfono" required>
                            </div>
                            <div class="grid grid-cols-1 gap-x-4 my-3">
                                <textarea class="px-5 py-2 rounded-md" name="message" rows="4" placeholder="Mensaje" required></textarea>
                                <input type="hidden" name="interest" value="Adra">
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit" data-modal-hide="defaultModal" type="button" class="text-white bg-slate-950 hover:bg-slate-700 px-6 py-2 text-xl">Enviar</button>
                        <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 border px-6 py-2 hover:bg-gary-400 text-xl">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@if (session('status'))
    @php
     echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
          <script>
              swal('Se ha enviado el correo', 'Nos pondremos en contacto lo antes posible', 'success');
          </script>
          ";    
    @endphp
@endif

<livewire:scripts />
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</body>
</html>