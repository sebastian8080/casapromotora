@extends('layouts.plantilla')

@section('title', 'Proyecto 1')

@section('content-head')
    <style>
      img:hover{
        transform: scale(1.1);
      }
    </style>
@endsection

@section('content')

  <div class="container mt-5 pt-5">
    <div class="row">
      <div class="col-sm-6 col-6">
        <img class="img-fluid rounded" src="https://acl.com.ec/wp-content/uploads/2021/06/LA-LEY-DE-PROPIEDAD-HORIZONTAL.jpeg" alt="">
      </div>
      <div class="col-sm-6 col-6">
        <div class="row mb-3">
          <div class="col-sm-6 col-6">
            <img class="img-fluid rounded" src="https://acl.com.ec/wp-content/uploads/2021/06/LA-LEY-DE-PROPIEDAD-HORIZONTAL.jpeg" alt="">
          </div>
          <div class="col-sm-6 col-6">
            <img class="img-fluid rounded" src="https://acl.com.ec/wp-content/uploads/2021/06/LA-LEY-DE-PROPIEDAD-HORIZONTAL.jpeg" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-6">
            <img class="img-fluid rounded" src="https://acl.com.ec/wp-content/uploads/2021/06/LA-LEY-DE-PROPIEDAD-HORIZONTAL.jpeg" alt="">
          </div>
          <div class="col-sm-6 col-6">
            <img class="img-fluid rounded" src="https://acl.com.ec/wp-content/uploads/2021/06/LA-LEY-DE-PROPIEDAD-HORIZONTAL.jpeg" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-8">
          <div class="row">
            <div class="col-sm-6">
              <h2>Direccion del proyecto o la casa</h2>
            </div>
            <div class="col-sm-6">
                <p class="h1 text-danger float-end">$ 100.000</p>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-sm-3 col-6">
              <i class="fas fa-bed fa-3x"></i><p>3 habitaciones</p>
            </div>
            <div class="col-sm-3 col-6">
              <i class="fas fa-bath fa-3x"></i><p>1 baño</p>
            </div>
            <div class="col-sm-3 col-6">
              <i class="fas fa-expand-arrows-alt fa-3x"></i><p>60 m2</p>
            </div>
            <div class="col-sm-3 col-6">
              <i class="fas fa-parking fa-3x"></i><p>1 parquedero</p>
            </div>
          </div>

          <div class="row mt-5">
            <h4>Descripcion del proyecto</h4>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo aliquam delectus doloremque excepturi quia tempora eius laborum. 
              Praesentium minima aperiam ex, ab asperiores perferendis excepturi aut aliquam similique optio consequuntur!
            </p>
          </div>
        </div>

        <div class="col-sm-1"></div>


        <div class="col-sm-3 rounded mb-5" style="background: #f4f4f4">

          <h3 class="mt-3 text-center fw-bold">Deseo saber más</h3>

          <form class="mt-3">
            <div class="form-outline mb-4">
              <input type="text" id="nombre" class="form-control" />
              <label class="form-label" for="nombre">Nombre</label>
            </div>
        
            <div class="form-outline mb-4">
              <input type="email" id="email" class="form-control" />
              <label class="form-label" for="email">Correo electrónico</label>
            </div>

            <div class="form-outline mb-4">
              <input type="number" id="telefono" class="form-control" />
              <label class="form-label" for="telefono">Teléfono</label>
            </div>
          
            <div class="form-outline mb-4">
              <textarea class="form-control" id="mensaje" rows="4">Me interesa saber más sobre este proyecto</textarea>
              <label class="form-label" for="mensaje">Mensaje</label>
            </div>
          
            <button type="submit" class="btn btn-outline-secondary btn-block mb-4 float-end">Enviar</button>
          </form>
        </div>
    </div>
  </div>
    
@endsection

@section('section-scripts')
    <script src="{{ asset('js/partners.js') }}"></script>
@endsection