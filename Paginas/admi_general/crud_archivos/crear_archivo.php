<?php
    include("../crud_registro_con_imagen/conexion_crud_registro_con_imagen.php");
    $conexion=conectar();

    $sql="SELECT * FROM archivos";
    $query= mysqli_query($conexion,$sql);

    $row=mysqli_fetch_assoc($query);


?>
<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../CSS/estilo_registro.css"/>

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
            <li><a href="../../admi_general/Inicio.php" >Inicio</a></li>
            <li><a href="tabla_crud_archivos.php">Tabla de archivos</a></li>
            <li><a href="../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    <body>
        <div class="form_carga">
            <form action="insertar_archivo_bd.php" method="POST" enctype="multipart/form-data" class="form">
                <h1 class="titulo">Carga de archivo</h1>  
                <div class="inputContainer">
                  <label>Nombre del archivo:</label>
                  <input type="text" name="nombre_archivo" placeholder="Nombre">
                </div>
                <div class="inputContainer">
                  <label for="estacion">Estacion:</label>
                    <select name="Estacion" id="subestacion">
                      <option value="quilmes">Quilmes</option>
                      <option value="bosques">Bosques</option>
                      <option value="tolosa">Tolosa</option>
                    </select>  
                </div>
                <div class="inputContainer">
                  <label for="categoria">Categoria:</label>
                    <select name="categoria" id="categoria">
                      <option value="planos">Planos</option>
                      <option value="manuales">Manuales</option>
                      <!--https://www.freecodecamp.org/espanol/news/etiqueta-select-de-html-como-hacer-un-menu-desplegable-o-lista-combinada/-->
                    </select>
                </div>
                <div class="inputContainer">
                  <label>Descripcion:</label>
                  <input type="text" name="descripcion" placeholder="Breve descripcion">
                </div>   
                <div class="inputContainer">
                  <label>Fecha de carga:</label>
                  <input type="date" name="fecha_creacion">
                </div>
                <div class="inputContainer">
                  <label>Archivo</label> 
                  <input type="file" name="archivo" accept="application/*">
                </div>     
                <div class="boton">
                    <input class="boton-subir" type="submit"  value="subir" name="subir">
                </div>
            </form>
        </div>
    </body>
</html>