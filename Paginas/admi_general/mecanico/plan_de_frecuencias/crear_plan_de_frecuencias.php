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
        <link rel="stylesheet" href="../../../../CSS/estilo_menu_horizontal.css"/>
       <!-- <link rel="stylesheet" href="../../../../CSS/estilo_registro.css"/>-->
       <link rel="stylesheet" href="../../../../CSS/estilo_carga.css"/>

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
            <li><a href="../../mecanico_admi.php">Inicio</a></li>
            <li><a href="tabla_plan_de_frecuencias.php">Plan de Frecuencias</a></li>
            <li><a href="../../../../logout.php">Cerrar Sesion</a></li>
      </nav>
    </header>
    <body>
        <div class="form_carga">
            <form action="insertar_plan_de_frecuencias.php" method="POST" enctype="multipart/form-data" class="form">
                <h1 class="titulo">Carga de Plan de Frecuencias</h1>  

                <div class="inputContainer">
                  <label>Paso a Nivel:</label>
                  <input type="text" name="nombre_paso_nivel" placeholder="paso a nivel">
                </div>

                <div class="inputContainer">
                  <label>Frecuencia:</label>
                  <input type="text" name="asc" placeholder="Acendente">
                  <input type="text" name="desc" placeholder="Descendente">
                </div>

                <div class="inputContainer">
                  <label >Niveles de señal y tensión:</label>
                      <input type="text" name="nivel_señal" placeholder="Niveles de señal">
                      <input type="text" name="nivel_tension" placeholder="Niveles de Tensión">

                </div>

                <div class="inputContainer">
                  <label>Filtro:</label>
                  <br>
                  <input type="radio" name="filtro" value="si">Si
                  <input type="radio" name="filtro" value="no">No
                  <br>
                  <label>Si tiene filtro, su ubicacion es:</label>
                  <input type="text" name="señal_tension" placeholder="ubicaion del filtro">
                </div>


                
                <div class="inputContainer">
                  <label>Archivo</label> 
                  <input type="file" name="plan_de_frecuencia" accept="application/*">
                </div>     

                <div class="boton">
                    <input class="boton-subir" type="submit"  value="subir" name="subir">
                </div>

            </form>
        </div>
    </body>
</html>