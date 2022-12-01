<?php
    include("conexion_planos_quilmes.php");
    $conexion=conectar();

    $sql="SELECT * FROM planos";
    $query= mysqli_query($conexion,$sql);

    $row=mysqli_fetch_assoc($query);


?>
<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../../../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../../../../CSS/estilo_registro.css"/>

        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    
    </head>
    <style>
      body{
        background:  #F2F3F4;
        font-family: Arial;
      }
    </style>
    <header>
      <nav class="navMenu">
            <li><a href="../../inicio_planos.php" >Planos</a></li>
            <li><a href="tabla_planos_quilmes.php">Tabla de archivos</a></li>
            <li><a href="../../../../../../login.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    <body>
        <div class="form_carga">
            <form action="insertar_planos_quilmes.php" method="POST" enctype="multipart/form-data" class="form">
                <h1 class="titulo">Carga de planos Quilmes</h1>  

                <div class="inputContainer">
                  <label>Nombre del archivo:</label>
                  <input type="text" name="nombre_plano" placeholder="Nombre">
                </div>

                <div class="inputContainer">
                  <label>Descripcion:</label>
                  <input type="text" name="descripcion" placeholder="Breve descripcion">
                </div>   
                <div class="inputContainer">
                  <label>Categoria:</label>
                  <input type="text" name="categoria" placeholder="Categoria">
                </div>
                <div class="inputContainer">
                  <label>Archivo</label> 
                  <input type="file" name="plano" accept="application/*">
                </div>     
                <div class="boton">
                    <input class="boton-subir" type="submit"  value="subir" name="subir">
                </div>
            </form>
        </div>
    </body>
</html>