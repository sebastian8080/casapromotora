<div class="w-100">
    <h2 class="text-center mt-5">Buscar proyectos en Ecuador</h2>
    <div class="row w-100 justify-content-center">
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
    </div>
    <div class="row mt-5 mb-3 justify-content-center">
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
    </div>
</div>
