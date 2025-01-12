<?php
    session_start();
    include("../../../../../conexion_y_sesion/conexion.php");
    $conexion=conectar();

    //Validacion de session 
    if (!isset($_SESSION['legajo'])) {
        header("location: ../../../../../index.html");
        exit;
      }
  
    $legajo = $_SESSION['legajo'];
?>
<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../../../CSS/estilo_registro.css"/>

        <title> Trenes Argentinos</title> <!-- titulo de la pagina -->
    
    </head>
    <style>
      body{
        background:  #F2F3F4;
        font-family: Arial;
      }
    </style>
    <header>
      <nav class="navMenu">
            <li><a href="../inicio_planos.php" >inicio</a></li>
            <li><a href="tabla_planos_laPlata.php">Tabla de archivos</a></li>
            <li><a href="../../../../../conexion_y_sesion/logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>

    <script>
      function confirmacion() {
        if (confirm("¿Está seguro de que desea cargar este plano?")) {
          return true;
        } else {
          return false;
        }
      }
    </script>

    <body>
        <div class="form_carga">
            <form action="insertar_planos_laPlata.php" method="POST" enctype="multipart/form-data" class="form">
                <h1 class="titulo">Carga de planos <br>La Plata</h1>  

                <div class="inputContainer">
                  <label>Nombre del archivo:</label>
                  <input type="text" name="nombre_laPlata" placeholder="Nombre" style="width: 225px;" required>
                </div>

                <div class="inputContainer">
                  <label>Descripcion:</label>
                  <input type="text" name="descripcion_laPlata" placeholder="Breve descripcion" style="width: 282px;">
                </div>   
                <div class="inputContainer">
                  <label>Categoria:</label>
                  <input type="text" name="categoria_laPlata" placeholder="Categoria" style="width: 300px;" required>
                </div>
                <div class="inputContainer">
                  <label>Archivo</label> 
                  <input type="file" name="plano_laPlata" accept="application/*" required>
                </div>     
                <div class="boton">
                    <input class="boton-subir" type="submit"  value="subir" name="subir" onclick="return confirmacion()">
                </div>
            </form>
        </div>
    </body>
</html>