<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bono de $500 por la compra de su propiedad | Casa Promotora</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <meta name="robots" content="noindex">
    <meta name="title" content="Bono de $500 por la compra de su propiedad | Casa Promotora">
    <meta name="description" content="Por la compra de su propiedad en Casa Promotora, obtenga un bono por $500 para su futura hogar ✅">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <header>
        <nav class="bg-white border-gray-200 shadow-md fixed top-0 left-0 right-0">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
              <a href="{{ route('pages.home') }}" class="flex items-center">
                  <img src="{{ asset('img/color_promotora.png') }}" class="h-12 mr-3" alt="Flowbite Logo" />
              </a>
              <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                  </svg>
              </button>
              <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                  <li>
                    <a href="{{ route('pages.home') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Inicio</a>
                  </li>
                  <li>
                    <a href="{{ route('pages.projects') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Proyectos</a>
                  </li>
                  <li>
                    <a href="{{ route('pages.about') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sobre Nosotros</a>
                  </li>
                  <li>
                    <a href="{{ route('pages.equipo') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Equipo</a>
                  </li>
                  <li>
                    <a href="{{ route('pages.contact') }}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contáctenos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <section class="container mx-auto mt-24">
        <section class="grid grid-rows-1 sm:grid-cols-2">
            <div class="flex items-center justify-center py-10">
                <h1 class="text-xl sm:text-4xl text-slate-500 text-center">FERIA DE LA <span class="font-bold text-slate-600"> CONSTRUCCIÓN</span> <br> <span class="font-bold text-slate-600 text-2xl sm:text-5xl">VIVIENDA Y DECORACIÓN</span></h1>
            </div>
            <div>
                <img class="shadow-md" src="{{ asset('img/bono-compra-propiedad-casa-promotora.jpg') }}" alt="">
            </div>
        </section>

        <section class="p-5">
            <form>
                <div>
                  <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-bold leading-7 text-red-600 text-center">*Válido por la compra de una propiedad</h2>
                    <p class="mt-5 font-semibold">Complete el formulario para registrar su información</p>
              
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                      <div class="sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                        <div class="mt-2">
                          <input type="text" name="first-name" id="name" autocomplete="given-name" class="block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                      </div>
              
                      <div class="sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                        <div class="mt-2">
                          <input type="text" name="last-name" id="lastname" autocomplete="family-name" class="block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                      </div>
              
                      <div class="sm:col-span-3">
                        <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Teléfono</label>
                        <div class="mt-2">
                          <input id="phone" name="phone" type="number" autocomplete="phone" class="block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                      </div>

                      <div class="sm:col-span-3">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo Electrónico</label>
                        <div class="mt-2">
                          <input id="email" name="email" type="email" autocomplete="email" class="block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                      </div>
              
                      <div class="col-span-full">
                        <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Dirección</label>
                        <div class="mt-2">
                          <textarea name="address" rows="3" class="block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                      </div>

                      <div class="col-span-full">
                        <label for="asesor" class="block text-sm font-medium leading-6 text-gray-900">Asesor</label>
                        <div class="mt-2">
                          <select name="asesor" id="" class="block w-full border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option value="">Seleccione</option>
                            <option value="Alexandra Saa">Alexandra Saa</option>
                            <option value="Alexandra Aucancela">Alexandra Aucancela</option>
                            <option value="Bernarda">Bernarda</option>
                            <option value="Cristina Ramos">Cristina Ramos</option>
                            <option value="Ana Cristina">Ana Cristina</option>
                            <option value="Juan Maldonado">Juan Maldonado</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
                <div class="mt-6 text-center items-center justify-end gap-x-6">
                  <p class="text-xs text-red-500 font-semibold mb-5">*Al enviar su información, esta será procesada según la solicitud del cliente</p>
                  <button type="submit" class="bg-slate-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar mi información</button>
                </div>
              </form>
        </section>
    </section>


    <footer class="shadow-md py-2 bg-white border text-center font-semibold">
      <p>Copyright Casa Promtora 2023</p>
    </footer>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</body>
</html>