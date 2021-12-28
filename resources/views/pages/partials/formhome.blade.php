<div data-aos="fade-right" class="row mt-3 mb-3">
    <div class="col-sm-2"></div>
    <div id="card-form" class="col-sm-4 text-center rounded-3">
      <h3 id="title-row7" class="mt-5 pt-5 fw-bold">INFORMACION <br> DE CONTACTO</h3>
      <p id="text1-row7">info@casacreditopromotora.com</p>
      <p id="text2-row7" >+593 983 849 073</p>
    </div>

    <div id="form" class="col-sm-5 pb-5">
      <form class="p-5" action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
          <label for="telefono_celular" class="form-label">Telefono / Celular</label>
          <input type="number" class="form-control" id="telefono_celular" name="telefono_celular" required>
        </div>
        <div class="mb-3">
          <label for="correo" class="form-label">Correo electronico</label>
          <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" name="correo" required>
        </div>
        <div class="mb-3">
          <label for="mensaje" class="form-label">Mensaje</label>
          <input type="text" class="form-control" id="mensaje" name="mensaje" required>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="submit" class="btn btn-danger me-md-2 rounded-pill">Enviar mensaje</button>
        </div>
      </form>
    </div>

    <div class="col-sm-2"></div>
  </div>