<?php
  session_start();
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
                <h1 class="titulo">Carga Plan de Frecuencias</h1>  

                <div class="inputContainer">
                  <label>Paso a Nivel:</label>
                  <input type="text" name="nombre_paso_nivel" placeholder="Paso a nivel" onclick="activarsubir()">
                </div>

                <div class="inputContainer">
                  <label>Frecuencia:</label>
                  <br>
                  <input type="text" name="frecuencia_asc" placeholder="Ascendente">
                  <input type="text" name="frecuencia_desc" placeholder="Descendente">
                </div>

                <div class="inputContainer">
                  <label >Niveles de Señal:</label>
                  <br>
                      <input type="text" name="señal_asc" placeholder="Ascendente">
                      <input type="text" name="señal_desc" placeholder="Descendente">
                </div>

                <div class="inputContainer">
                  <label >Niveles de Tensión:</label>
                  <br>
                      <input type="text" name="tension_asc" placeholder="Ascendente">
                      <input type="text" name="tension_desc" placeholder="Descendente"> 
                </div>

               <div class="inputContainer">
                  <script type="text/javascript">
                    function activar(si){
                    var ubicacion = document.getElementById("ubicacion");
                    ubicacion.disabled = chksi.checked ? false : true;
                    if(!ubicacion.disabled){
                      ubicacion.focus();
                    }
                  }
                  </script>
                  <label for="chksi">Filtro:</label>
                  <input type="checkbox" name="filtro[]" value="Si" id="chksi" onclick="activar(this)"/>Si
                  <input type="checkbox" name="filtro[]" value="No" id="no" />No
                      <br>
                      <label>Su ubicacion es:</label>
                      <input type="text" name="ubicacion" id="ubicacion" placeholder="Ubicaion del filtro" disabled="disabled" />
                </div>

                <div class="boton"> 
                  <input class="boton-subir" type="submit" id="subir" value="subir" name="subir">
                </div>

            </form>
        </div>
    </body>
</html>