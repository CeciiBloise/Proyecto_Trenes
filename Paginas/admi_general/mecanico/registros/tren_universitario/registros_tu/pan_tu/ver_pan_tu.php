<?php
/*Me lista las carpetas*/

include("../../../conexion_registros.php");
$conexion=conectar();

$sql="SELECT*FROM registros_pan_tu";

$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <!-- Estilos -->
        <link rel="stylesheet" href="../../../../../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../../../../../CSS/estilo_tablas.css"/>
        
        <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav class="navMenu">
          <li><a href="../../../inicio_registros.php" >Registros</a></li>
          <li><a href="inicio_pan_tu.php">PAN</a></li>
          <li><a href="carga_registros_pan_año_tu">XX</a></li>
          <li><a href="../../../../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    <style>
        .content-table{
            position: absolute;
            left: 5%;
        }
    </style>
    <body>
        <h1></h1>
        <?php while($row=mysqli_fetch_array($query)){ ?>
            <nav>
                <ol><a href="ver_pan_año_tu.php?id=<?php echo $row['id_pan_tu']?>"><?php echo $row['pan_año_tu']?></a></ol>
            </nav>
        <?php }?> 
    </body>
</html>