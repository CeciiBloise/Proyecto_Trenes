<?php
include("conexion_usuario.php");
$conexion=conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE legajo='$id'";
$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="utf-8" /> <!-- tipos de caracter -->
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
      <link rel="stylesheet" href="../../../CSS/estilo_menu_horizontal.css"/>
      <link rel="stylesheet" href="../../../CSS/estilo_registro.css"/>
      
      <title>Estacion Quilmes</title> <!-- titulo de la pagina -->
    </head>

    <style>
      body{
        background:  #F2F3F4;
        font-family: Arial;
      }
    </style>

    <header>
      <nav class="navMenu">
            <li><a href="../admi_personal.php" >Inicio</a></li>
            <li><a href="tabla_usuario.php">Tabla personal</a></li>
            <li><a href="../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    
    <script>
      //Alerta actualizar
      function confirmacionActualizar(){
        var respuesta=confirm("¿Estas seguro que deseas actualizar este usuario?");
        if(respuesta==true){
          return true;
        }
        else{
          return false;
        }
      }
    </script>

    <body>
    <div class="form_carga">
        <form action="update_usuario.php" method="POST" enctype="multipart/form-data" class="form">
          <h1 class="titulo">Ingrese los datos</h1>

          <div class="inputContainer">
            <label class="label">Legajo:</label>
            <input class="input" type="number" name="legajo" placeholder="Legajo" value="<?php echo $row['legajo'] ?>" style="width: 300px;">
          </div>

          <div class="inputContainer">
            <label class="label">Apellidos:</label>
            <input type="text" name="apellido" placeholder="Aprellido" class="input" value="<?php echo $row['apellido'] ?>" style="width: 280px;">
          </div>

          <div class="inputContainer">
            <label class="label">Nombres:</label>
            <input type="text" name="nombre" placeholder="Nombre" class="input" value="<?php echo $row['nombre'] ?>" style="width: 283px;"> <!-- name tiene que llevar el mismo nombre del campo de la base de datos-->
          </div>

          <div class="inputContainer">
            <label class="label">Alias:</label>
            <input type="text" name="alias" placeholder="Alias" class="input" value="<?php echo $row['alias'] ?>" style="width: 315px;"> <!-- name tiene que llevar el mismo nombre del campo de la base de datos-->
          </div>

          <div class="inputContainer">
            <label class="label">D.N.I:</label>
            <input class="input" type="number" name="dni" placeholder="D.N.I sin puntos" value="<?php echo $row['dni'] ?>" style="width: 316px;">
          </div>

          <div class="inputContainer">
            <label class="label">Fecha de nacimiento:</label>
            <input class="input" type="date" name="fecha_de_nacimiento" value="<?php echo $row['fecha_de_nacimiento'] ?>" style="width: 197px;">
          </div>

          <div class="inputContainer">
            <label class="label">Direccion:</label>
            <input class="input" type="text" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion'] ?>" style="width: 280px;">
          </div>

          <div class="inputContainer">
            <label class="label">Celular:</label>
            <input class="input" type="tel" name="celular" placeholder="Celular" value="<?php echo $row['celular'] ?>" style="width: 299px;">
          </div>

          <div class="inputContainer">
            <label class="label">Correo Electronico:</label>
            <input class="input" type="email" name="mail" placeholder="Correo Electronico" value="<?php echo $row['mail'] ?>" style="width: 209px;">
          </div>

          <div class="inputContainer">
            <label class="label">Puesto:</label>
            <input class="input" type="text" name="puesto" placeholder="Puesto" value="<?php echo $row['puesto'] ?>" style="width: 300px;">
          </div>

          <div class="inputContainer">
            <label class="label">Habilitaciones:</label>
            <input class="input" type="text" name="habilitaciones" placeholder="Separarlas por coma" value="<?php echo $row['habilitaciones'] ?>" style="width: 363px;">
          </div>

          <div class="inputContainer">
            <label class="label">Supervisor a cargo del sector:</label>
            <input class="input" type="text" name="supervisor_cargo" placeholder="Supervisor a cargo" value="<?php echo $row['supervisor_cargo'] ?>" style="width: 363px;">
          </div>

          <div class="inputContainer">
            <label class="label">Fecha de ingreso a la empresa</label>
            <input class="input" type="date" name="fecha_de_ingreso_a_la_empresa" value="<?php echo $row['fecha_de_ingreso_a_la_empresa'] ?>" style="width: 128px;">
          </div>

          <div class="inputContainer">
            <label class="label">Permiso:</label>
            <select>
                <option <?php echo $row['id_permiso']=== '1' ? "selected=selected": ""?> value="1">1- Administrador General</option>
                <option <?php echo $row['id_permiso']=== '2' ? "selected=selected": ""?> value="2">2- Administrador Personal</option>
                <option <?php echo $row['id_permiso']=== '3' ? "selected=selected": ""?> value="3">3- Mecanico</option>
            </select>
          </div>

          <div class="inputContainer">
            <label class="label"> Contraseña:</label>
            <input class="input" type="password" name="contraseña" value="<?php echo $row['contraseña'] ?>" style="width: 267px;">
          </div>

          <div class="inputContainer">
            <label class="label">Foto del usuario</label> <!-- falta esto -->
            <input class="input" type="file" name="imagen" accept="imagen/*" value="<?php echo $row['imagen']?>">
          </div>

          <div class="boton">
            <input onclick="return confirmacionActualizar()" class="boton-subir" type="submit" name="subir" value="Actualizar"/>
          </div>
        </form>
      </div>
    </body>
</html>