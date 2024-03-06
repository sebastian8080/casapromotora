@extends('adminlte::page')

@section('title', 'Admin Promotora - Crear Propiedad')

@section('content_header')
    <style>
        .form-control:focus {border-color: #FF0000;box-shadow: inset 0 0.5px 0.5px rgba(0, 0, 0, 0.075), 0 0 4px rgba(255, 0, 0, 0.6);}
    </style>
    {{-- <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script> --}}
    @if(session('status'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            {!! session('status') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="text-center">
        @if(isset($property->property_id))
        <h1>Editando Propiedad <b class="text-danger">{{$property->property_code}}</b></h1>
        @else
        <h1>Creando Nueva Propiedad en el Proyecto</h1>
        @endif
    </div>
@endsection

@section('content')
    <div class="container">
        @if(isset($property->property_id))
        {!! Form::model($property, ['route' => ['admin.update.property', $property->property_id], 'method' => 'PUT']) !!}
        @else
        {!! Form::open(['route' => 'admin.store.property', 'method' => 'POST']) !!}
        @endif
        @csrf
        <div class="row border shadow-sm p-3 rounded-0 bg-white">
            <div class="form-group w-100">
                {!! Form::label('category', 'Proyecto en donde se encuentra la propiedad') !!}
                <div class="d-flex">
                    <select name="category_id" id="category" class="form-control w-50 mr-1 rounded-0">
                        <option value="">Seleccione</option>
                        @foreach ($categories as $category)
                            <option class="option-hover" value="{{$category->category_id}}" @if((isset($property->property_id) && $property->category_id == $category->category_id) || (isset($category_id) && $category->category_id == $category_id)) selected @endif>{{$category->project_name}}</option>
                        @endforeach
                    </select>
                    <a class="btn btn-danger rounded-0 float-end" href="{{route('admin.projects.create')}}">Crear Nuevo Proyecto</a>
                </div>
            </div>
            @if(isset($project_category))
                <div class="row w-100">
                    <div class="col-sm-4">
                        <label class="text-danger"><i class="fas fa-key"></i> Código de Proyecto</label>
                        <p>{{$project_category->project_code}}</p>
                    </div>
                    <div class="col-sm-4">
                        <label class="text-danger"><i class="fas fa-tag"></i> Tipo de Proyecto</label>
                        <p>{{$project_category->type}}</p>
                    </div>
                    @if(isset($property))
                        @if($property->state != null && $property->city != null && $property->address != null)
                            <div class="col-sm-4">
                                <label class="text-danger"><i class="fas fa-thumbtack"></i> Dirección</label>
                                <p>{{$property->state.", ".$property->city.", ".$property->address }}</p>
                            </div>
                        @endif
                    @endisset
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label class="text-danger"><i class="fas fa-file-alt"></i> Descripción</label>
                        <p>{{$project_category->description}}</p>
                    </div>
                </div>
            @endif
        </div>
        <div class="row mt-3 rounded-0 shadow-sm border p-3 bg-white">
            <div class="row w-100">
                <div class="col-sm-8">
                    <p class="h5 font-weight-bold">Detalle de la Propiedad</p>
                </div>
                @isset($property)
                    <div class="col-sm-4 justify-content-end">
                        <div>
                            {!! Form::label('status', 'Estado', ['class' => 'font-weight-normal', 'style' => 'font-size: 15px']) !!}
                            {!! Form::select('status', ['' => 'Seleccione', 1 => 'Activa', 0 => 'Desactivada'], null, ['class' => 'form-control rounded-0', 'style' => 'font-size: 15px']) !!}
                        </div>
                    </div>
                @endisset
            </div>
            <div class="form-group w-100 mt-3">
                <div class="row">
                    <div class="col-sm-8">
                        <i class="fas fa-quote-right"></i> {!! Form::label('title', 'Titulo de la Propiedad', ['class' => 'font-weight-normal']) !!}
                        {!! Form::text('title', null, ['class' => 'form-control rounded-0']) !!}
                    </div>
                    <div class="col-sm-4">
                        {!! Form::label('num_piso', 'Número de piso', ['class' => 'font-weight-normal']) !!}
                        {!! Form::text('num_piso', null, ['class' => 'form-control rounded-0']) !!}
                    </div>
                </div>
            </div>
            <div class="row w-100">
                <div class="col-sm-4">
                    <i class="fas fa-expand-arrows-alt"></i> {!! Form::label('total_area', 'Area Total', ['class' => 'font-weight-normal']) !!}
                    {!! Form::text('total_area', null, ['class' => 'form-control rounded-0']) !!}
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-compress-arrows-alt"></i> {!! Form::label('indoor_area', 'Area Interior', ['class' => 'font-weight-normal']) !!}
                    {!! Form::text('indoor_area', null, ['class' => 'form-control rounded-0']) !!}
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-money-check-alt"></i> {!! Form::label('price', 'Precio', ['class' => 'font-weight-normal']) !!}
                    {!! Form::number('price', null, ['class' => 'form-control rounded-0']) !!}
                </div>
            </div>
            <div class="row w-100 mt-3">
                <div class="col-sm-4">
                    <i class="fas fa-bed"></i> {!! Form::label('bedrooms', 'Habitaciones', ['class' => 'font-weight-normal']) !!}
                    {!! Form::number('bedrooms', null, ['class' => 'form-control rounded-0', 'readonly']) !!}
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-bath"></i> {!! Form::label('bathrooms', 'Baños', ['class' => 'font-weight-normal']) !!}
                    {!! Form::number('bathrooms', null, ['class' => 'form-control rounded-0', 'readonly']) !!}
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-parking"></i> {!! Form::label('garage', 'Parqueaderos', ['class' => 'font-weight-normal']) !!}
                    {!! Form::number('garage', null, ['class' => 'form-control rounded-0', 'readonly']) !!}
                </div>
            </div>


            <div class="row d-inline">

                <div id="rowsTitles">
                    @if(isset($property) && is_array(json_decode($property->heading_details)))
                    @php $ii=-1; @endphp
                        @foreach(json_decode($property->heading_details) as $dets)
                            @php $ii++; @endphp 
                            <div class="gap-4 mt-4">
                                <label>Titulo</label>
                                <div class="d-flex mt-2 ml-2">
                                    <input  class="w-100 bg-white border px-4 py-2" name="details{{$ii}}[]" type="text" value="{{$dets[0]}}"/>
                                </div>            
                            @php unset($dets[0]); $printControl=0; @endphp
                            <div class="ml-4 mt-4">Detalles</div>
                                @foreach($dets as $det)
                                    @if($printControl==0)
                                    @php $printControl=1; @endphp                
                                        <div class="flex flex-row mt-2 ml-4">
                                            {!! Form::select('details'.$ii.'[]',$details->pluck('charac_titile','id'), $det   ,    ['class' => 'w-44 h-10 px-4 py-2 text-gray-700 bg-white text-sm border border-gray-300 rounded-l']) !!}
                                    @else                
                                    @php $printControl=0; @endphp
                                            <input  class="w-24 h-10 px-4 py-2 text-gray-700 bg-white text-sm border border-gray-300" type="number" name="details{{$ii}}[]" pattern="[0-9]+" onkeydown="return false" value="{{!is_numeric($det)?1:$det}}"/>
                                            <button class="btn btn-danger" type="button" onclick="delrowDetail(this)">X</button>
                                        </div>
                                    @endif
                                @endforeach
                                <button type="button" class="btn btn-success ml-4 mt-1" onclick="addRowDetail(this,{{$ii}})">Agregar Detalle</button>
                            </div>    
                        @endforeach
                        </div>
                    @else
                        <div class="gap-4 mt-4 ml-2">
                            <label class="font-semibold">Titulo</label>
                            <div class="d-flex">
                                <input id="details"  class="w-100 px-4 py-2 bg-white border" name="details0[]" type="text"/>
                                <button class="btn btn-danger" type="button" onclick="delrowTitle(this)">X</button>
                            </div>
                            <div class="ml-4 mt-4">Detalles</div>
                            <div class="d-flex ml-4">
                                <select class="w-100 px-4 py-2 bg-white border" name="details0[]">
                                    @foreach ($details as $detail)
                                        <option value="{{$detail->id}}">{{$detail->charac_titile}}</option>
                                    @endforeach
                                </select>
                                <input id="subdetails"  class="w-100 px-4 py-2 bg-white border" type="number" name="details0[]" pattern="[0-9]+" onkeydown="return false" value="1"/>
                                <button class="btn btn-danger" type="button" onclick="delrowDetail(this)">X</button>
                            </div>
                            <button type="button" class="btn btn-success ml-4 mt-2" onclick="addRowDetail(this,0)">Agregar Detalle</button>
                        </div>
                    </div>
                    @endif
                    <br>
                    <div class="d-inline ml-2">
                        <button type="button" class="btn btn-info" onclick="addRowTitles()">Agregar Titulo</button>
                    </div>
                </div>
            </div>


            <div class="row mt-4 w-100 justify-content-center">
                {!! Form::submit('Guardar Propiedad', ['class' => 'btn btn-danger rounded-0']) !!}
            </div>
        </div>
        {!! Form::close() !!}
        {{-- <div class="row">
            <div class="my-4 col-sm-4" id="wrapper" style="height:200px;width:100%">
                <a-scene embedded style="height:100%;width:100%">
                    <a-sky src="{{asset('img/PANO_20230104_185536_0.jpg')}}"></a-sky> 
                </a-scene>
            </div> 
        </div> --}}
    </div>

@endsection

@section('js')
<script>
    const selOptionsDetails = @json($details);

    const delrowTitle = (row) =>{
        row.parentElement.parentElement.remove();
    }

    const delrowDetail = (row) =>{
        row.parentElement.remove();
    }

    const addRowDetail = (row,id=0) =>{
        let InsertOptions ='';
        selOptionsDetails.forEach(opts =>{ InsertOptions +=`<option value="${opts.id}">${opts.charac_titile}</option>`;    });
        let rowTemplate =   `<div class="d-flex mt-2 ml-4">
                                <select class="w-100 px-4 py-2 bg-white border" name="details${id}[]">${InsertOptions}</select>
                                <input id="subdetails" class="w-100 px-4 py-2 bg-white border" type="number" name="details${id}[]" pattern="[0-9]+" onkeydown="return false" value="1"/>
                                <button class="btn btn-danger" type="button" onclick="delrowDetail(this)">X</button>
                            </div>`;
        row.insertAdjacentHTML('beforebegin',rowTemplate);
    }

    const addRowTitles = () => {
        let idUniq  = new Date().valueOf();
        let InsertOptions ='';
        selOptionsDetails.forEach(opts =>{        InsertOptions +=`<option value="${opts.id}">${opts.charac_titile}</option>`;    });
        let rowTemplate =`
            <div class="gap-4 mt-4 ml-2">
                <label class="font-semibold">Titulo</label>
                <div class="d-flex mt-2">
                    <input  class="w-100 px-4 py-2 bg-white border" type="text" name="details${idUniq}[]" required/>
                    <button class="btn btn-danger" type="button" onclick="delrowTitle(this)">X</button>
                </div>
                <div class="ml-4 mt-4">Detalles</div>
                <div class="d-flex mt-2 ml-4">
                    <select class="w-100 px-4 py-2 bg-white border" name="details${idUniq}[]">${InsertOptions}</select>
                    <input  class="w-100 px-4 py-2 bg-white border" type="number"  name="details${idUniq}[]" pattern="[0-9]+" onkeydown="return false" value="1"/>
                    <button class="btn btn-danger" type="button" onclick="delrowDetail(this)">X</button>
                </div>
                <button type="button" class="btn btn-success mt-2 ml-4" onclick="addRowDetail(this,${idUniq})">Agregar Detalle</button>
            </div>`
        document.getElementById('rowsTitles').insertAdjacentHTML('beforeend',rowTemplate);
    }
</script>
@endsection