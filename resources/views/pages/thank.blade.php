<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gracias por contactarse con Casa Promotora</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php
        if($_SERVER["SERVER_NAME"] != "localhost"){
    ?>
        
        <!-- Google tag (gtag.js) --> 
        <script id="analytics-conversion-thank"></script> 
        <script>
            setTimeout(() => {
                document.getElementById('analytics-conversion-thank').src="https://www.googletagmanager.com/gtag/js?id=AW-11250334200";
            }, 2500);
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);} 
            gtag('js', new Date()); gtag('config', 'AW-11250334200'); 
        </script>
    
        <!-- Event snippet for Formulario de contacto PROMOTORA conversion page --> 
        <script> gtag('event', 'conversion', {'send_to': 'AW-11250334200/s3uhCKKEi_AYEPjzyfQp'}); </script>
    
    <?php }; ?>
</head>
<body>
    
    <section class="container mx-auto h-screen w-screen flex items-center justify-center">

        <section class="text-center">
            <img class="shadow-lg rounded" src="{{ asset('img/thanks.avif') }}" alt="Imagen de gracias">
            <h1 class="text-3xl text-[#959193] mt-10">Gracias por contactarse con nosotros!</h1>
            <p class="text-[#959193] mt-3 text-xl">Hemos recibido su mensaje</p>
            <p class="text-[#959193] mt-3 text-xl">Nos comunicaremos con usted de inmediato</p>

            <section class="grid grid-rows-2 md:grid-cols-2 gap-y-6 justify-center mt-16">
                <div>
                    <a class="rounded-full hover:bg-red-800 hover:text-white text-red-500 border-solid border-1 px-3 py-2 shadow-lg" href="{{ route('pages.home') }}">Regresar a página de inicio</a>
                </div>
                <div>
                    <a class="rounded-full hover:bg-red-800 hover:text-white text-red-500 border-solid border-1 px-3 py-2 shadow-lg" href="{{ route('pages.projects') }}">Ver más proyectos</a>
                </div>
            </section>

            <section class="mt-16">
                <h2 class="text-[#959193] text-lg font-semibold">Visite nuestras redes sociales</h2>
                <section class="grid grid-cols-3 mt-5">
                    <div>
                        <a target="_blank" href="https://www.facebook.com/casapromotora">
                            <i class="fab fa-facebook fa-2x text-[#959193]"></i>
                        </a>
                    </div>
                    <div>
                        <a target="_blank" href="https://www.instagram.com/casapromotora/">
                            <i class="fab fa-instagram fa-2x text-[#959193]"></i>
                        </a>
                    </div>
                    <div>
                        <a target="_blank" href="https://www.tiktok.com/@casapromotora">
                        <i class="fab fa-tiktok fa-2x text-[#959193]"></i>
                        </a>
                    </div>
                </section>
            </section>
        </section>

    </section>

</body>
</html>