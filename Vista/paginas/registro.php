<div class="d-flex justify-content-center text-center">

<form class="p-5 bg-light" method="POST" enctype="multipart/form-data" >

  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="fas fa-user"></i>
        </span>
      </div>
      <input type="text" class="form-control" id="nombre" name="txtNombre">
    </div>

    <div class="form-group">
    <label for="nombre">Apellido:</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="fas fa-user"></i>
        </span>
      </div>
      <input type="text" class="form-control" id="apellido" name="txtApellido">
    </div>

    <div class="form-group">
      <label for="email">Correo electrónico:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fas fa-envelope"></i>
          </span>
        </div>
        <input type="email" class="form-control" id="email" name="txtEmail" required>
      </div>
    </div>

    <div class="form-group">
      <label for="pwd">Contraseña:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fas fa-lock"></i>
          </span>
        </div>
        <input type="password" class="form-control" id="password"  name="txtPassword">
      </div>
    </div>
    <button type="submit" class="btn btn-primary" onclick="guardar()">Registrar</button>
</form>
</div>
