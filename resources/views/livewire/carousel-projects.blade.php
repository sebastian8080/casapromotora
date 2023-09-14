<div>
    <section class="container mx-auto">
        <h1 id="title" class="text-center text-[2rem] sm:text-[4rem] md:text-[5rem] lg:text-[6rem] xl:text-[8rem] text-[#F7F7F7] font-semibold tracking-wider">{{ strtoupper($type) }}</h1>
    </section>

    <section class="block mx-auto">
        <div class="w-full">
            <div id="default-carousel" class="relative" data-carousel="static">
                <div class="overflow-hidden relative h-[720px]">
                    @foreach($projects as $project)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="{{ $project->project_name }}">
                            <section class="bg-[#F7F7F7] h-[720px] flex items-center">
                                <section class="container mx-auto">
                                    <section class="grid grid-rows justify-center lg:grid-cols-2">
                                        <div class="">
                                            <h2 class="text-[3rem] md:text-[3rem] lg:text-[4rem] xl:text-[5rem] leading-tight" style="color: #000000; font-weight: bold; padding-top: 50px; padding-bottom: 50px; padding-left: 50px"> ACABADOS <br> <span class="text-[#F7F7F7] font-semibold text-[3rem] md:text-[4rem] lg:text-[5rem] xl:text-[6rem]" style="text-shadow: 1px 0px 0px black, -1px 0px 0px black, 0px 1px 0px black,  0px -1px 0px black;">ELEGANTES</span></h2>
                                            <div class="px-12">
                                                <p class="font-semibold text-3xl">SECTOR</p>
                                                <p class="text-3xl">{{ $project->address }}</p>
                                                {{-- <button class="bg-slate-950 text-white px-5 py-3 mt-4 hover:bg-slate-700" data-modal-target="defaultModal" data-modal-toggle="defaultModal">CONSULTAR</button> --}}
                                                <button class="bg-slate-950 text-white px-5 py-3 mt-4 hover:bg-slate-700" >
                                                    <a href="#price">VER INFORMACIÓN</a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="justify-center">
                                            <img src="{{ asset('uploads/projects/cropped/'.$project->cropped_image) }}" alt="">
                                        </div>
                                    </section>
                                </section>
                            </section>
                        </div>
                    @endforeach
                    @if(count($projects) <=2)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="">
                            <section class="bg-[#F7F7F7] h-[700px] flex items-center">
                                <section class="container mx-auto">
                                    <section class="flex items-center justify-center">
                                        <button class="bg-slate-950 text-white px-5 py-2">VER MAS PROYECTOS</button>
                                    </section>
                                </section>
                            </section>
                        </div>
                    @endif
                </div>
                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev onclick="getCarouselVisible()">
                    <span class="inline-flex justify-center items-center w-10 h-10 rounded-full sm:w-12 sm:h-12 bg-slate-950 hover:bg-slate-700">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button> 
                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next onclick="getCarouselVisible()">
                    <span class="inline-flex justify-center items-center w-10 h-10 rounded-full sm:w-12 sm:h-12 bg-slate-950 hover:bg-slate-700">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>
</div>
