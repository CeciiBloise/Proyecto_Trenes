<?php
    include("conexion_plan_de_frecuencias.php");
    $conexion=conectar();

    $sql="SELECT * FROM plan_de_frecuencias";
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
            <li><a href="../../inicio_planos.php" >Planos</a></li>
            <li><a href="tabla_plan_de_frecuencias.php">Tabla de archivos</a></li>
            <li><a href="../../../../../../login.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    <body>
        <div class="form_carga">
            <form action="insertar_plan_de_frecuencias.php" method="POST" enctype="multipart/form-data" class="form">
                <h1 class="titulo">Carga Plan de Frecuencias</h1>  

                <div class="inputContainer">
                  <label>Nombre del archivo:</label>
                  <input type="text" name="nombre_frecuencia" placeholder="Nombre">
                </div>
                  <label>Paso a nivel:</label>
                  <input type="text" name="paso_nivel" placeholder="Categoria">
                </div>
                <div class="inputContainer">
                  <label>Archivo</label> 
                  <input type="file" name="plan_frecuencia" accept="application/*">
                </div>     
                <div class="boton">
                    <input class="boton-subir" type="submit"  value="subir" name="subir">
                </div>
            </form>
        </div>
    </body>
</html>