<?php
    include("conexion_planos_quilmes.php");
    $conexion=conectar();

    $id=$_GET['id'];

    $sql="SELECT * FROM planos WHERE id_plano='$id'";
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
            <li><a href="../../inicio_planos.php" >Inicio</a></li>
            <li><a href="tabla_planos_quilmes.php">Tabla de archivos</a></li>
            <li><a href="../../../../../../login.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    <body>
        <div class="form_carga">
            <form action="update_planos_quilmes.php" method="POST" enctype="multipart/form-data" class="form">
                <h1 class="titulo">Carga de archivo</h1>  

                <div class="inputContainer">
                  <label>Nombre del archivo:</label>
                  <input type="text" name="nombre_plano" placeholder="Nombre" value="<?php echo $row['nombre_plano'] ?>">
                </div>

                <div class="inputContainer">
                  <label>Brebe descripcion:</label>
                  <input type="text" name="descripcion" placeholder="Breve descripcion" value="<?php echo $row['descripcion'] ?>">
                </div>   
                <div class="inputContainer">
                  <label>Fecha de carga:</label>
                  <input type="date" name="fecha_creacion" value="<?php echo $row['fecha_creacion'] ?>">
                </div>
                <div class="inputContainer">
                  <label>Archivo</label> 
                  <input type="file" name="plano" accept="application/*" value="<?php echo $row['plano'] ?>">
                </div>     
                <div class="boton">
                    <input class="boton-subir" type="submit"  value="subir" name="subir" value="Actualizar">
                </div>
            </form>
        </div>
    </body>
</html>