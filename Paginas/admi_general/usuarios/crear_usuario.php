<?php
  session_start();
  include("conexion_usuario.php");
  $conexion=conectar();

  //Validacion de session 
  if (!isset($_SESSION['legajo'])) {
    header("location: ../../../Index.html");
    exit;
  }

  $legajo = $_SESSION['legajo'];
  
?>

<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="utf-8" /> <!-- tipos de caracter -->
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
      
      <!--- Estilos --->
      <link rel="stylesheet" href="../../../CSS/estilo_menu_horizontal.css"/>
      <link rel="stylesheet" href="../../../CSS/estilo_registro.css"/>

      <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    </head>

    <style>
      body{
        background:  #F2F3F4;
        font-family: Arial;
      }
    </style>

    <header>
      <nav class="navMenu">
            <li><a href="../../admi_general/Inicio.php" >Inicio</a></li>
            <li><a href="tabla_usuario.php">Tabla de Personal</a></li>
            <li><a href="../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>

    <script>
      function confirmacion() {
        if (confirm("¿Está seguro de que desea enviar esta información?")) {
          return true;
        } else {
          return false;
        }
      }
    </script>
    
    <body>
      <div class="form_carga">
        <form action="insertar_bd_usuario.php" method="POST" enctype="multipart/form-data" class="form" onsubmit="return confirmacion()">

          <h1 class="titulo">INGRESE LOS DATOS</h1>
          <div class="inputContainer">
            <label>Legajo:</label>
            <input type="number" name="legajo" placeholder="Legajo" style="width: 300px;" required>
          </div>

          <div class="inputContainer">
            <label>Apellidos:</label>
            <input type="text" name="apellido" placeholder="Apellido" style="width: 280px;" required>
          </div>

          <div class="inputContainer">
            <label>Nombres:</label>
            <input type="text" name="nombre" placeholder="Nombre" style="width: 283px;" required> 
          </div>

          <div class="inputContainer">
            <label>Alias:</label>
            <input type="text" name="alias" placeholder="Alias" style="width: 315px;"> 
          </div>

          <div class="inputContainer">
            <label>D.N.I:</label>
            <input type="number" name="dni" placeholder="D.N.I sin puntos" style="width: 316px;">
          </div>

          <div class="inputContainer">
            <label>Fecha de nacimiento:</label>
            <input type="date" name="fecha_de_nacimiento" placeholder="Fecha de nacimiento" style="width: 197px;">
          </div>

          <div class="inputContainer">
            <label>Direccion:</label>
            <input type="text" name="direccion" placeholder="Direccion" style="width: 280px;">
          </div>

          <div class="inputContainer">
            <label>Celular:</label>
            <input type="tel" name="celular" placeholder="Celular" style="width: 299px;">
          </div>

          <div class="inputContainer">
            <label>Correo Electronico:</label>
            <input type="email" name="mail" placeholder="Correo Electronico" style="width: 209px;">
          </div>

          <div class="inputContainer">
            <label>Puesto:</label>
            <input type="text" name="puesto" placeholder="Puesto" style="width: 300px;" required>
          </div>

          <div class="inputContainer">
            <label>Habilitaciones:</label>
            <input type="text" name="habilitaciones" placeholder="Separarlas por coma" style="width: 363px;">
          </div>

          <div class="inputContainer">
            <label>Supervisor a cargo del sector:</label>
            <input type="text" name="supervisor_cargo" placeholder="Supervisor a cargo" style="width: 363px;" required>
          </div>

          <div class="inputContainer">
            <label>Fecha de ingreso a la empresa:</label>
            <input type="date" name="fecha_de_ingreso_a_la_empresa" placeholder="Fecha de ingreso" style="width: 123px;">
          </div> 

          <div class="inputContainer"> <!--cambiar esto a un selec -->
            <label>Permiso:</label>
            <select name="roles_id" id="rol" style="width: 298px;" required>
            <option selected disabled>--- Seleccionar Permiso ---</option>
            <?php
            $sql="SELECT*FROM roles";
            $query = mysqli_query($conexion, $sql);

            while($row=mysqli_fetch_assoc($query)){
              echo "<option value='".$row['id_rol']."'>".$row['nombre_rol']."</option>";
            }
            ?>
            </select>
            </div>

          <div class="inputContainer"> <!--la contraseña se la signo yo? -->
            <label>Contraseña:</label>
            <input type="password" name="contraseña" placeholder="contraseña de maximo 6 caracteres" style="width: 265px;" required>
          </div> 

          <div class="inputContainer">
            <label>Foto del usuario</label> <!-- falta esto -->
            <input type="file" name="imagen" accept="image/png, .jpeg, .jpg, image/gif">
          </div>

          <div class="boton">
            <input class="boton-subir" type="submit"  value="Registrar" name="subir" onclick="return confirmacion()">
          </div>
        </form>
      </div>
    </body>
</html>