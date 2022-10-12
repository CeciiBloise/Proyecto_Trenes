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
      <div class="form_carga">
        <h1>Ingrese los datos</h1>
        <form action="inserta_en_bd.php" method="POST">
          <input type="text" name="nombre" placeholder="Nombre"> <!-- name tiene que llevar el mismo nombre del campo de la base de datos-->
          <input type="text" name="apellido" placeholder="Aprellido">
          <input type="number" name="dni" placeholder="D.N.I">
          <input type="text" name="fecha_de_nacimiento" placeholder="Fecha de nacimiento">
          <input type="text" name="direccion" placeholder="Direccion">
          <input type="number" name="celular" placeholder="Celular">
          <input type="text" name="legajo" placeholder="Legajo">
          <input type="text" name="puesto" placeholder="Puesto">
          <input type="text" name="supervisor_cargo" placeholder="Supervisor a cargo de su sector">
          <input type="text" name="fecha_de_ingreso_a_la_empresa" placeholder="Nombre">
          
          <button type="submit">Cargar</button>
        
        </form>
      </div>
    </body>
</html>