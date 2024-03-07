<section class="w-100">
    <section class="w-auto d-flex justify-content-center">
        <section>
            <h4 style="color: #862627; font-weight: 600">INICIE UNA BÚSQUEDA DETALLADA</h4>
            <section class="d-flex gap-2">
                <section class="d-flex align-items-center justify-content-center">
                    <input id="searchtxt" type="text" style="background-color: #EFEFEF; height: 40px; border-radius: 15px 0px 0px 15px !important" class="form-control border-0 rounded-0" placeholder="Ingrese provincia, ciudad o sector">
                    <i class="fa-solid fa-magnifying-glass d-flex align-items-center pe-3" style="background-color: #EFEFEF; color: #000000; height: 40px; border-radius: 0px 15px 15px 0px"></i>
                </section>
                <section>
                    <section class="d-flex align-items-center px-4 gap-2" onclick="openHTML('searchType')" style="background-color: #EFEFEF; height: 40px; border-radius: 15px !important; cursor: pointer">
                        <span>Tipo de Inmueble</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </section>
                    <section id="searchType" class="position-absolute p-4 mt-1 d-none absolute_filters" style="background-color: #EFEFEF; border-radius: 15px">
                        <div class="d-flex justify-content-center gap-4">
                            <div>
                                <input type="radio" class="btn-check checktype" name="type" value="Departamentos" id="checkDepartamentos">
                                <label class="btn btn-outline-danger" for="checkDepartamentos">Departamentos</label>
                            </div>
                            <div>
                                <input type="radio" class="btn-check checktype" name="type" value="Condominios" id="checkCondominios">
                                <label class="btn btn-outline-danger" for="checkCondominios">Condominios</label>
                            </div>
                        </div>
                    </section>
                </section>
                <section>
                    <section class="d-flex align-items-center px-4 gap-2" onclick="openHTML('searchBedrooms')" style="background-color: #EFEFEF; height: 40px; border-radius: 15px !important; cursor: pointer">
                        <span>Habitaciones</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </section>
                    <section id="searchBedrooms" class="position-absolute p-4 mt-1 d-none absolute_filters" style="background-color: #EFEFEF; border-radius: 15px">
                        <div class="d-flex justify-content-center gap-4 mb-3">
                            <div>
                                <input type="radio" class="btn-check checkhabitaciones" name="bedrooms" id="checkBedrooms1" value="1">
                                <label class="btn btn-outline-danger" for="checkBedrooms1">1</label>
                            </div>
                            <div>
                                <input type="radio" class="btn-check checkhabitaciones" name="bedrooms" id="checkBedrooms2" value="2">
                                <label class="btn btn-outline-danger" for="checkBedrooms2">2</label>
                            </div>
                            <div>
                                <input type="radio" class="btn-check checkhabitaciones" name="bedrooms" id="checkBedrooms3" value="3">
                                <label class="btn btn-outline-danger" for="checkBedrooms3">3</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-4">
                            <div>
                                <input type="radio" class="btn-check checkhabitaciones" name="bedrooms" id="checkBedrooms4" value="4">
                                <label class="btn btn-outline-danger" for="checkBedrooms4">4</label>
                            </div>
                            <div>
                                <input type="radio" class="btn-check checkhabitaciones" name="bedrooms" id="checkBedrooms5" value="5">
                                <label class="btn btn-outline-danger" for="checkBedrooms5">5</label>
                            </div>
                            <div>
                                <input type="radio" class="btn-check checkhabitaciones" name="bedrooms" id="checkBedrooms6" value="6">
                                <label class="btn btn-outline-danger" for="checkBedrooms6">6</label>
                            </div>
                        </div>
                    </section>
                </section>
                <section>
                    <section class="d-flex align-items-center px-4 gap-2" onclick="openHTML('searchPrice')" style="background-color: #EFEFEF; height: 40px; border-radius: 15px !important; cursor: pointer">
                        <span>Precio</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </section>
                    <section id="searchPrice" class="position-absolute p-4 mt-1 d-none absolute_filters" style="background-color: #EFEFEF; border-radius: 15px">
                        <input type="number" class="form-control mb-3 ps-3" style="border-radius: 15px" placeholder="Desde" id="priceMin">
                        <input type="number" class="form-control ps-3" style="border-radius: 15px" placeholder="Hasta" id="priceMax">
                    </section>
                </section>
                <section>
                    <button onclick="search()" class="btn text-white btnSearch" style="background-color: #720000; border-radius: 15px">BUSCAR <i class="fa-solid fa-magnifying-glass ps-1" style="color: #ffffff !important"></i></button>
                </section>
            </section>
        </section>
    </section>
    {{-- <div class="row w-100 justify-content-center">
        <details open>
            <summary class="w-100 h5">Filtros</summary>
            <div class="d-flex gap-2 align-items-center justify-content-center w-100">
                <div class="w-100">
                    <label style="font-size: small" class="text-muted" for="state">Ubicacion</label>
                    <select wire:model="state" id="state" class="form-select rounded-0 w-100">
                        <option value="">Seleccione</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->name }}">{{ $state->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-100">
                    <label for="city" style="font-size: small" class="text-muted">Ciudad</label>
                    <select id="city" wire:model="city" class="form-select rounded-0">
                        <option value="">Seleccione</option>
                        @if(count($cities)>0)
                            @foreach ($cities as $city)
                                <option value="{{ $city->name }}">{{ $city->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="w-100">
                    <label for="type" class="text-muted" style="font-size: small">Tipo</label>
                    <select id="type" class="form-select rounded-0" wire:model="type">
                        <option value="">Seleccione</option>
                        <option value="Condominios">Condominio</option>
                        <option value="Departamentos">Departamentos</option>
                    </select>
                </div>
            </div>
          </details>
    </div> --}}

    @if(count($properties)>0)
        @foreach ($properties as $propertie)
            @php $project = App\Models\Project\Category::select('project_name', 'state', 'city', 'address', 'description', 'images')->where('category_id', $propertie->category_id)->first(); @endphp
            @php $images = explode('|', $project->images); @endphp    
            <section class="bg-light w-100 mt-5 pb-1">
                    <section class="container">
                        <section class="row mb-5">
                            @if(($loop->index % 2) == 0)
                            <article class="col-sm-6">
                                <div class="px-5 py-4">
                                    <p class="fw-bold" style="font-size: 30px">${{number_format($propertie->price)}}</p>
                                    <p>{{ strtoupper($project->address)}}, {{ strtoupper($project->city) }}, {{ strtoupper($project->state) }}</p>
                                    <a style="text-decoration: none; color: #000000" href="{{ route('web.show.propertie', $propertie->slug) }}"><h2>{{ $propertie->title }}</h2></a>
                                    <p style="font-size: 14px; text-align: justify">{{ $project->description }}</p>
                                    <div class="d-flex" style="justify-content: space-between">
                                        <div class="text-center">
                                            <img width="50px" src="{{ asset('img/area-interior.png') }}" alt="area interior de {{ $propertie->title}}"> <br>
                                            <span class="fw-bold" style="font-size: 13px">ÁREA INTERNA</span> <br>
                                            <span>{{ $propertie->indoor_area }}</span>
                                        </div>
                                        <div class="text-center">
                                            <img width="50px" src="{{ asset('img/area-total.png') }}" alt="area total de {{ $propertie->title}}"> <br>
                                            <span class="fw-bold" style="font-size: 13px">ÁREA TOTAL</span> <br>
                                            <span>{{ $propertie->total_area }}</span>
                                        </div>
                                        <div class="text-center">
                                            <img width="50px" src="{{ asset('img/dormitorios.png') }}" alt="numero de habitaciones de {{ $propertie->title}}"> <br>
                                            <span class="fw-bold" style="font-size: 13px">DORMITORIOS</span> <br>
                                            <span>{{ $propertie->bedrooms }}</span>
                                        </div>
                                        <div class="text-center">
                                            <img width="50px" src="{{ asset('img/banios.png') }}" alt="numero de baños de {{ $propertie->title}}"> <br>
                                            <span class="fw-bold" style="font-size: 13px">BAÑOS</span> <br>
                                            <span>{{ $propertie->bathrooms }}</span>
                                        </div>
                                        <div class="text-center">
                                            <img width="50px" src="{{ asset('img/garages.png') }}" alt="numero de garages de {{ $propertie->title}}"> <br>
                                            <span class="fw-bold" style="font-size: 13px">GARAGES</span> <br>
                                            <span>{{ $propertie->garage }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 mt-4">
                                        <a target="_blank" href="https://wa.me/+593983849073?text=Quiero más información de *{{ $propertie->title}}* del proyecto *{{ $project->project_name }}* %0A {{ Request::url() }}" class="btn btn-outline-dark">WHATSAPP <i class="fa-brands fa-whatsapp text-success" style="font-size: 18px"></i></a>
                                        <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalContactar" onclick="setInfoModal('{{$propertie->price}}', '{{ $propertie->title }}', '{{$project->state}}', '{{$project->city}}', '{{ $project->address}}', '{{ $images[0] }}', '{{ $project->project_name}}')">CONTACTAR <i class="fa-regular fa-envelope" style="font-size: 18px"></i></button>
                                        <a href="tel:+593983849073" class="btn btn-outline-dark btn-call"><i class="fa-solid fa-phone"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="col-sm-6">
                                <div class="pt-5">
                                    <div id="carouselExampleControls{{$loop->index}}" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($images as $image)
                                                <div class="carousel-item @if($loop->index == 0) active @endif">
                                                    <img src="{{ asset('uploads/projects/'. $image) }}" class="d-block w-100" alt="...">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls{{$loop->index}}" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls{{$loop->index}}" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </button>
                                      </div>
                                </div>
                            </article>
                            @else
                            <article class="col-sm-6">
                                <div class="pt-5">
                                    @php $images = explode('|', $project->images); @endphp
                                    <div id="carouselExampleControls{{$loop->index}}" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($images as $image)
                                                <div class="carousel-item @if($loop->index == 0) active @endif">
                                                    <img src="{{ asset('uploads/projects/'. $image) }}" class="d-block w-100" alt="...">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls{{$loop->index}}" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls{{$loop->index}}" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </button>
                                      </div>
                                </div>
                            </article>
                            <article class="col-sm-6">
                                <div class="px-5 py-4">
                                    <p class="fw-bold" style="font-size: 30px">${{number_format($propertie->price)}}</p>
                                    <p>{{ strtoupper($project->address)}}, {{ strtoupper($project->city) }}, {{ strtoupper($project->state) }}</p>
                                    <a style="text-decoration: none; color: #000000" href="{{ route('web.show.propertie', $propertie->slug) }}"><h2>{{ $propertie->title }}</h2></a>
                                    <p style="font-size: 14px; text-align: justify">{{ $project->description }}</p>
                                    <div class="d-flex" style="justify-content: space-between">
                                        <div class="text-center">
                                            <img width="50px" src="{{ asset('img/area-interior.png') }}" alt="area interior de {{ $propertie->title}}"> <br>
                                            <span class="fw-bold" style="font-size: 13px">ÁREA INTERNA</span> <br>
                                            <span>{{ $propertie->indoor_area }}</span>
                                        </div>
                                        <div class="text-center">
                                            <img width="50px" src="{{ asset('img/area-total.png') }}" alt="area total de {{ $propertie->title}}"> <br>
                                            <span class="fw-bold" style="font-size: 13px">ÁREA TOTAL</span> <br>
                                            <span>{{ $propertie->total_area }}</span>
                                        </div>
                                        <div class="text-center">
                                            <img width="50px" src="{{ asset('img/dormitorios.png') }}" alt="numero de habitaciones de {{ $propertie->title}}"> <br>
                                            <span class="fw-bold" style="font-size: 13px">DORMITORIOS</span> <br>
                                            <span>{{ $propertie->bedrooms }}</span>
                                        </div>
                                        <div class="text-center">
                                            <img width="50px" src="{{ asset('img/banios.png') }}" alt="numero de baños de {{ $propertie->title}}"> <br>
                                            <span class="fw-bold" style="font-size: 13px">BAÑOS</span> <br>
                                            <span>{{ $propertie->bathrooms }}</span>
                                        </div>
                                        <div class="text-center">
                                            <img width="50px" src="{{ asset('img/garages.png') }}" alt="numero de garages de {{ $propertie->title}}"> <br>
                                            <span class="fw-bold" style="font-size: 13px">GARAGES</span> <br>
                                            <span>{{ $propertie->garage }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 mt-4">
                                        <a target="_blank" href="https://wa.me/+593983849073?text=Quiero más información de *{{ $propertie->title}}* del proyecto *{{ $project->project_name }}*" class="btn btn-outline-dark">WHATSAPP <i class="fa-brands fa-whatsapp text-success" style="font-size: 18px"></i></a>
                                        <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#modalContactar" onclick="setInfoModal('{{$propertie->price}}', '{{ $propertie->title }}', '{{$project->state}}', '{{$project->city}}', '{{ $project->address}}', '{{ $images[0] }}', '{{ $project}}')">CONTACTAR <i class="fa-regular fa-envelope" style="font-size: 18px"></i></button>
                                        <a href="tel:+593983849073" class="btn btn-outline-dark btn-call"><i class="fa-solid fa-phone"></i></a>
                                    </div>
                                </div>
                            </article>
                            @endif
                        </section>
                    </section>
                </section>
        @endforeach

        <div class="container mt-5 d-flex justify-content-center">
           {{ $properties->links() }}
        </div>

    @else
        <div class="text-center">
            <p class="h5 border p-3 shadow-sm" style="font-weight: 500">No hemos encontrado proyectos con estas características</p>
        </div>
    @endif
    {{-- <div class="row mt-5 mb-3 justify-content-center">
        @if(count($projects)>0)
            @foreach ($projects as $project)
                <div class="col-sm-4 mb-5">
                    <a href="{{route('projects.viewProject', [strtolower($project->type), $project->slug])}}">
                        <img class="img-fluid" src="{{asset('uploads/projects/900/'.strtok($project->images, "|"))}}" alt="">
                    </a>
                    <div class="text-center mt-4 mb-4">
                        <h2 style="color: #ffffff; -webkit-text-stroke: 1px rgb(162, 157, 157);font-family: 'Raleway', sans-serif" class="h1">{{strtoupper($project->abbr)}}</h2>
                        <hr style="height: 1px; color: rgb(255, 0, 0)">
                        <p class="h4 fw-bold" style="color: rgb(83, 83, 83) !important">{{strtoupper($project->type)}}</p>
                        <p class="text-danger fw-bold" style="margin-bottom: 5px">UBICACIÓN</p>
                        <i class="fas fa-map-marker-alt text-muted"></i>
                        <p class="text-muted"><i>{{$project->city . ", " . $project->address}}</i></p>
                        <div class="row text-center" style="padding-left: 20%; padding-right: 20%">
                            <div class="col-sm-4 col-4">
                                <img width="40px" src="{{asset('img/projects/ascensor.svg')}}" alt="">
                                <p style="font-size: 12px" class="text-muted">ASCENSOR</p>
                            </div>
                            <div class="col-sm-4 col-4">
                                <img width="40px" src="{{asset('img/projects/planta.svg')}}" alt="">
                                <p style="font-size: 12px" class="text-muted">JARDINES</p>
                            </div>
                            <div class="col-sm-4 col-4">
                                <img width="40px" src="{{asset('img/projects/seguridad.svg')}}" alt="">
                                <p style="font-size: 12px" class="text-muted">SEGURIDAD</p>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('projects.viewProject', [strtolower($project->type), $project->slug]) }}" class="btn btn-outline-danger rounded-0 fw-bold">VER PROYECTO</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
        
        <div class="text-center">
            <p class="h5 border p-3 shadow-sm" style="font-weight: 500">No hemos encontrado proyectos con estas características</p>
        </div>
        
        @endif
    </div> --}}

    
    <div class="modal fade" id="modalContactar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <x-contact-component></x-contact-component>
    </div>
</section>

<script>
    const openHTML = (id) => {
        let absolute_filters = document.querySelectorAll('.absolute_filters');
        absolute_filters.forEach(element => { if(!element.classList.contains('d-none') && element.id != id){element.classList.add('d-none')}; });
        let divHTML = document.getElementById(id);
        divHTML.classList.contains('d-none') ? divHTML.classList.remove('d-none') : divHTML.classList.add('d-none');
    }

    const search = () => {

        let searchTxt = document.getElementById('searchtxt').value;

        let checkTypes = document.querySelectorAll('.checktype');
        checkTypes.forEach(check => {
            if(check.checked){
                @this.set('checkType', check.value);
            } 
        });

        let checkBedrooms = document.querySelectorAll('.checkhabitaciones');
        checkBedrooms.forEach(check => {
            if(check.checked){
                @this.set('checkBedrooms', check.value);
            } 
        });

        let inpPriceMin = document.getElementById('priceMin').value;
        let inpPriceMax = document.getElementById('priceMax').value;

        @this.set('inpPriceMin', inpPriceMin);
        @this.set('inpPriceMax', inpPriceMax);

        @this.set('searchtxt', searchTxt);
        // if(checkDepartamentos) @this.set('checkType', checkDepartamentos);
        // if(checkCondominios) @this/set('checkType', checkCondominios);
    }

    const setInfoModal = (price, title, state, city, address, image, project) => {
        let txtPrice = document.getElementById('txtPriceModal');
        let txtTitle = document.getElementById('txtTitleModal');
        let txtAdress = document.getElementById('txtAddressModal');
        let imgModalInfo = document.getElementById('imgModalInfo');

        let hidProject = document.getElementById('hidProject');
        let hidPropertie = document.getElementById('hidPropertie');
        let hidPrice = document.getElementById('hidPrice');

        hidProject.value = project;
        hidPropertie.value = title;
        hidPrice.value = price;

        txtPrice.innerHTML = `$${price}`;
        txtTitle.innerHTML = `${title}`;
        txtAdress.innerHTML = `${state}, ${city}, ${address}`;
        imgModalInfo.src = "{{ asset('uploads/projects/300') }}"+ "/" + image;
    }
</script>
