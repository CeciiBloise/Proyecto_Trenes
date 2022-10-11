<?php
     include("conexion_crud");
     $conexion=conectar();

     $sql="SELECT * FROM carga_de_usuarios";
     $query= mysqli_query($conexion,$sql);

     $row=mysqli_fetch_array($query);
?>

<html lang="es">
    <head>
      <meta charset="utf-8" /> <!-- tipos de caracter -->
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
      <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    </head>
    <body>
    <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Carga de usuario</h2>
      <hr>
      <form method="post">
      <div class="form-group">
          <label for="edad">Imagen del usuario</label>
          <td colspan="2"><input type="file" name="archivo"></td>
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
        <br>

        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
          <a href="../../Index.html">Regresar al inicio</a>
        </div>
      </form>
    </div>
  </div>
</div>
    </body>
</html>