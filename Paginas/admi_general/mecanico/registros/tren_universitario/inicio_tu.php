<?php
/* ACA VEO LA LISTA DE LAS CARPETAS AÑO */
/*Me lista las carpetas*/

include("../conexion_registros.php");
$conexion=conectar();

$sql="SELECT*FROM registros_tu_año";

$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <!-- Estilos -->
        <link rel="stylesheet" href="../../../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../../../CSS/estilo_tablas.css"/>
        
        <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav class="navMenu">

      <li><a href="inicio_registros_tu.php" >Registros</a></li>
      <li><a href="carga_tu_año.php">Agregar año</a></li>
      </nav>
    </header>
    <style>
        .content-table{
            position: absolute;
            left: 5%;
        }
    </style>
    <body>
        <?php while($row=mysqli_fetch_array($query)){ ?>
            <nav>
                <ol><a href="ver_pan_tu2.php?id=<?php echo $row['id_tu_año']?>"><?php echo $row['tu_año']?></a></ol>
            </nav>
        <?php }?> 
    </body>
</html>