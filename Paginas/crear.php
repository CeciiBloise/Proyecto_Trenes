<?php
/** Creacion de usuarios **/

include "templates/header.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Carga de usuario</h2>
      <hr>
      <form method="post">
      <div class="form-group">
          <label for="edad">Imagen del usuario</label>
          <input type="text" name="edad" id="edad" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="apellido" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="edad">Legajo</label>
          <input type="text" name="edad" id="edad" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="edad">Nivel de Jerarquia</label>
          <input type="text" name="edad" id="edad" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="edad">Puesto</label>
          <input type="text" name="edad" id="edad" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="email">Domicilio</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="edad">Edad</label>
          <input type="text" name="edad" id="edad" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="edad">Celular</label>
          <input type="text" name="edad" id="edad" class="form-control">
        </div>
        

        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
          <a class="btn btn-primary" href="index.php">Regresar al inicio</a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include "templates/footer.php"; 
?>