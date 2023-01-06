<?php
    include("conexion_manuales.php");
    $conexion=conectar();

    $sql="SELECT * FROM manuales";
    $query= mysqli_query($conexion,$sql);

    $row=mysqli_fetch_array($query);


?>

<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../../CSS/estilo_registro.css"/>

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
            <li><a href="../../mecanico_admi.php" >Inicio</a></li>
            <li><a href="lista.php">Manuales</a></li>
            <li><a href="../../../../logout.php" >Cerrar Sesion</a></li>

      </nav>
    </header>
    <body>
        <div class="form_carga">
            <form action="insertar_bd2.php" method="POST" enctype="multipart/form-data" class="form">
                <h1 class="titulo">Carga de Manuales</h1>  

                <div class="inputContainer">
                  <label>Nombre del Equipo:</label>
                  <input type="text" name="carpeta">
                </div>

                <div class="inputContainer">
                  <label>Manual</label> 
                  <input type="file" name="manuales[]" id="manuales[]" multiple="">
                </div>  

                <div class="boton">
                    <input type="hidden" name="directorio">
                    <input class="boton-subir" type="submit"  value="subir" name="subir">
                </div>
            </form>
          </div>
    </body>
</html>