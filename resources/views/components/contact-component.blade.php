
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('contact.lead') }}" method="POST" id="formContact">
            <div class="modal-header" style="background-color: #9A4344; color: #ffffff">
                <h5 class="modal-title" id="exampleModalLabel">Contactar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    @csrf
                    <input type="hidden" name="project" id="hidProject">
                    <input type="hidden" name="propertie" id="hidPropertie">
                    <input type="hidden" name="price" id="hidPrice">
                    <div class="row">
                        <div class="col-sm-6 mb-2">
                            <div class="form-group">
                                <label for="name" class="mb-1">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control rounded-0" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <div class="form-group">
                                <label for="lastname" class="mb-1">Apellido</label>
                                <input type="text" name="lastname" id="lastname" class="form-control rounded-0" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-2">
                            <div class="form-group">
                                <label for="email" class="mb-1">Correo electrónico</label>
                                <input type="email" name="email" id="email" class="form-control rounded-0" required>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <div class="form-group">
                                <label for="phone_number" class="mb-1">Número telefónico</label>
                                <input type="number" name="phone" id="phone_number" class="form-control rounded-0" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-2">
                            <div class="form-group">
                                <label for="state" class="mb-1">Provincia</label>
                                <select name="state" id="state" class="form-select rounded-0" required>
                                    <option value="">Seleccione</option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state->name }}" data-id="{{$state->id}}">{{ $state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <div class="form-group">
                                <label for="cities" class="mb-1">Ciudad</label>
                                <select name="city" id="cities" class="form-select rounded-0" required>
                                    <option value="">Seleccione</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                            <label for="comment">Comentario</label>
                            <textarea name="comment" id="comment" rows="2" class="form-control rounded-0" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="fw-bold">Esta consultando por:</p>
                            <div class="border d-flex p-4" style="justify-content: space-between !important">
                                <div>
                                    <span class="fw-bold" id="txtPriceModal">$100000</span> <br>
                                    <span id="txtTitleModal">Departamento en venta</span> <br>
                                    <span class="text-muted" style="font-size: 14px" id="txtAddressModal">Azuay, Cuenca, Totoracocha</span>
                                </div>
                                <div class="">
                                    <img id="imgModalInfo" width="150px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn" style="background-color: #9A4344; color: #ffffff">Enviar</button>
                </div>
            </form>
        </div>
    </div>


<script>
    let selState = document.getElementById('state');
    let selCities = document.getElementById('cities');

    selState.addEventListener('change', async () => {
        selCities.options.length = 0;
        let id = selState.options[selState.selectedIndex].dataset.id;
        const response = await fetch("{{url('getcities')}}/"+id );
        const cities = await response.json();

        console.log(cities);
            
        let opt = document.createElement('option');
            opt.appendChild( document.createTextNode('Seleccione') );
            opt.value = '';
            selCities.appendChild(opt);
            cities.forEach(city => {
                let opt = document.createElement('option');
                opt.appendChild( document.createTextNode(city.name) );
                opt.value = city.name;
                selCities.appendChild(opt);
            });
    })
</script>
