<?php
      include("conexion_usuario.php");
      $conexion=conectar();

      //seguridad de session paginacion 
      session_start();
      error_reporting(0);
      $varsesion=$_SESSION['legajo'];
      if($varsesion== null || $varsesion=''){
          echo "NO PUEDES INGRESAR, NO TIENES AUTORIZACION";
          die();
      }

      $id=$_GET['id'];

      $sql="SELECT * FROM usuarios WHERE legajo='$id'";
      $query=mysqli_query($conexion,$sql);

      $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="utf-8" /> <!-- tipos de caracter -->
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
      <link rel="stylesheet" href="../../../CSS/estilo_menu_horizontal.css"/>
      <link rel="stylesheet" href="../../../CSS/estilo_ficha.css"/>

      <title>Estacion Quilmes</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav class="navMenu">
            <li><a href="../../admi_general/Inicio.php" >Inicio</a></li>
            <li><a href="crear_usuario.php">Registro</a></li>
            <li><a href="tabla_crud_usuario.php">Tabla personal</a></li>
            <li><a href="../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>

    <body>
    <div class="form_carga">
        <form action="update_usuario.php" method="POST" class="form">
  
          <div class="inputContainer">  
            <img src="imagen_usuarios/<?php echo $row['imagen']?>" width="300" height="200" class="imagen"/>
          </div>
          
          <div class="inputContainer">
            <label class="label">Legajo:</label>  <?php echo $row['legajo'] ?>
          </div>

          <div class="inputContainer">
            <label class="label">Apellidos:</label>  <?php echo $row['apellido'] ?>
          </div>

          <div class="inputContainer">
            <label class="label">Nombres:</label>  <?php echo $row['nombre'] ?>
          <div class="inputContainer">
            <label class="label">D.N.I:</label>  <?php echo $row['dni'] ?>
          </div>

          <div class="inputContainer">
            <label class="label">Fecha de nacimiento:</label>  <?php echo $row['fecha_de_nacimiento'] ?>
          </div>

          <div class="inputContainer">
            <label class="label">Direccion:</label>  <?php echo $row['direccion'] ?>
          </div>

          <div class="inputContainer">
            <label class="label">Celular:</label>  <?php echo $row['celular'] ?>
          </div>

          <div class="inputContainer">
            <label class="label">Correo Electronico:</label>  <?php echo $row['mail'] ?>
          </div>

          <div class="inputContainer">
            <label class="label">Puesto:</label>  <?php echo $row['puesto'] ?>
          </div>

          <div class="inputContainer">
            <label class="label">Habilitaciones:</label>  <?php echo $row['habilitaciones'] ?>
          </div>

          <div class="inputContainer">
            <label class="label">Supervisor a cargo del sector:</label>  <?php echo $row['supervisor_cargo'] ?>
          </div>

          <div class="inputContainer">
            <label class="label">Fecha de ingreso a la empresa</label>  <?php echo $row['fecha_de_ingreso_a_la_empresa'] ?>
          </div>

          
        </form>
      </div>
    </body>
</html>
