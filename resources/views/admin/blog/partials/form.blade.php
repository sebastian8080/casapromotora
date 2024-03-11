<div class="form-group">
    <div class="row mt-2">
        <div class="col-sm-9">
            {!! Form::label('titulo', 'Titulo del post *') !!}
            {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el titulo del post']) !!}
            @error('titulo')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-sm-3">
            {!! Form::label('tiempo_lectura', 'Tiempo de lectura') !!}
            {!! Form::number('tiempo_lectura', null, ['class' => 'form-control', 'placeholder' => 'Ejem.: 5']) !!}
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-4">
            {!! Form::label('url_img_principal', 'Imagen principal *') !!}
            {!! Form::file('url_img_principal', ['class' => 'form-control']) !!}
            @error('url_img_principal')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-sm-4">
            {!! Form::label('url_img_secundaria', 'Imagen secundaria *') !!}
            {!! Form::file('url_img_secundaria', ['class' => 'form-control']) !!}
            @error('url_img_secundaria')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="col-sm-4">
            {!! Form::label('url_img_terciaria', 'Imagen terciaria') !!}
            {!! Form::file('url_img_terciaria', ['class' => 'form-control']) !!}
        </div>
    </div>


    <div class="row mt-3">
        <div class="col">
            {!! Form::label('contenido', 'Contenido *') !!}
            {!! Form::textarea('contenido', null, ['class' => 'form-control', 'rows' => '10']) !!}
            @error('contenido')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            {!! Form::label('metadescription', 'Metadescripción *') !!}
            {!! Form::text('metadescripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese aquí la metadescripción']) !!}
            @error('metadescripcion')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            {!! Form::label('keywords', 'Palabras Clave *') !!}
            {!! Form::text('keywords', null, ['class' => 'form-control', 'placeholder' => 'Ingrese aquí las keywords del post']) !!}
            @error('keywords')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
    </div>
</div>