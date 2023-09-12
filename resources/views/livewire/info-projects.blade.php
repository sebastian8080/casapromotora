<div>
    <section class="container mx-auto mt-10 md:mt-0 py-0 lg:py-36" id="price">
        <section class="grid grid-rows lg:grid-cols-2 gap-x-20">
            <div class="relative">
                <img src="{{ asset('uploads/projects/'.strtok($images->images, '|')) }}" alt="">
            </div>
            <div class="text-center md:text-justify">
                <p class="font-bold text-3xl sm:text-4xl md:text-5xl lg:text-6xl mb-4 mt-10 lg:mt-0">DESDE</p>
                <p class="text-white font-semibold text-5xl md:text-6xl lg:text-7xl xl:text-8xl" style="text-shadow: 1px 0px 0px black, -1px 0px 0px black, 0px 1px 0px black,  0px -1px 0px black;">$ {{ number_format($property??150000) }}</p>
                <div class="grid grid-cols-3 gap-x-6 text-center mt-20">
                    <div>
                        <strong class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl">{{ $project_aux->entrance??5}}%</strong>
                        <p class="font-semibold text-sm">ENTRADA</p>
                    </div>
                    <div>
                        <strong class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl">{{ $project_aux->dues??52}}</strong>
                        <p class="font-semibold text-sm">CUOTAS</p>
                    </div>
                    <div>
                        <strong class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl">{{ $project_aux->bank_credit??70}}%</strong>
                        <p class="font-semibold text-sm">CREDITO BANCARIO</p>
                    </div>
                </div>
                <div class="mt-16">
                    <p class="bg-slate-950 text-white py-5 text-center text-xl md:text-3xl">Espacios de vida <span class="font-semibold">renovados para ti</span></p>
                </div>
            </div>
        </section>
    </section>

    <section id="gallery" class="py-0 lg:pt-10">
        <section class="container mx-auto hidden lg:block">
            <div class="grid grid-rows grid-cols-2 lg:grid-cols-5">
                @foreach (array_filter(explode("|", $images->images)) as $img)
                    <div>
                        <img src="{{ asset('uploads/projects/300/'. $img) }}" alt="">
                    </div>
                @endforeach
            </div>
        </section>
    
        <section class="block lg:hidden container mx-auto">
            <div class="w-full">
                <div id="default-carousel" class="relative" data-carousel="static">
                    <div class="overflow-hidden relative h-56 sm:h-96">
                        @foreach (array_filter(explode("|", $images->images)) as $img)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('uploads/projects/300/'. $img) }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                            </div>
                        @endforeach
                    </div>
                    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </section>
    </section>

    <section class="container mx-auto pb-10 mt-0 lg:mt-20 lg:mb-20" id="contact">
        <section class="grid grid-rows md:grid-cols-2">
            <div class="relative">
                <img src="{{ asset('img/contact-photo.jpg') }}" alt="">
                <div class="p-5 md:p-0 md:absolute right-0 top-[40%]">
                    <p class="text-3xl lg:text-4xl xl:text-5xl font-semibold">CONTÁCTANOS</p>
                    <p class="text-lg flex items-center my-5 pr-0 md:pr-10"><img width="30px" src="{{ asset('img/location-icon.png') }}" alt=""> Av. Fray Vicente Solano y Remigio Tamariz</p>
                    <p class="text-lg flex items-center"><img width="30px" src="{{ asset('img/telefono-icon.png') }}" alt=""> 098 979 8238</p>
                </div>
            </div>
            <div class="flex justify-center items-center bg-[#F7F7F7]">
                <form action="{{ route('landing.send.lead') }}" method="POST">
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
                            <input type="hidden" name="interest" value="{{ $project_aux->project_name }}">
                        </div>
                        <div>
                            <button class="bg-slate-950 text-white px-5 py-2 w-full rounded-md hover:bg-slate-700">CONSULTAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </section>
</div>

<script>
    const getCarouselVisible = () => {
        setTimeout(() => {
            let carousel = document.querySelector('.z-20');
            console.log(carousel.dataset.carouselItem);
            @this.changeProject(carousel.dataset.carouselItem);
        }, 1000);
    }
</script>