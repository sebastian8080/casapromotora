<div data-aos="fade-right" class="row mt-3 mb-3">
    <div class="col-sm-2"></div>
    <div id="card-form" class="col-md-4 col-sm-12 pt-5 pb-5 d-flex align-items-center justify-content-center rounded-3">
      <div class="text-center">
        <h3 id="title-row7" class="fw-bold">INFORMACION <br> DE CONTACTO</h3>
        <a href="mailto:info@casacredito.com" id="text1-row7"><i class="fas fa-envelope"></i> info@casacreditopromotora.com</a><br>
        <a href="tel:+593983849073" id="text2-row7" ><i class="fas fa-phone"></i> 098-384-9073</a>
      </div>
    </div>

    <div id="form" class="col-md-4 col-sm-12 pb-5">
      <form class="p-5" action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <div class="mb-3 d-flex">
          <div class="me-1">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control rounded-0" id="nombre" name="nombre" required>
          </div>
          <div class="ms-1">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control rounded-0" id="apellido" name="apellido" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="telefono_celular" class="form-label">Telefono / Celular</label>
          <input type="number" class="form-control rounded-0" id="telefono_celular" name="telefono_celular" required>
        </div>
        <div class="mb-3">
          <label for="correo" class="form-label">Correo electronico</label>
          <input type="email" class="form-control rounded-0" id="correo" aria-describedby="emailHelp" name="correo" required>
        </div>
        <div class="mb-3">
          <label for="mensaje" class="form-label">Mensaje</label>
          <input type="text" class="form-control rounded-0" id="mensaje" name="mensaje" required>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="submit" class="btn btn-danger me-md-2 rounded-pill">Enviar mensaje</button>
        </div>
      </form>
    </div>

    <div class="col-sm-2"></div>
  </div>