<?php

include("conexion_manuales.php");
$conexion=conectar();


$sql="SELECT * FROM manuales";
$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../../../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../../../../CSS/estilo_tablas.css"/>
        <script src="https://kit.fontawesome.com/3de4daf040.js" crossorigin="anonymous"></script>
        <!-- Estilos -->
        <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav class="navMenu">
      <li><a href="../../mecanico_admi.php" >Inicio</a></li>
            <li><a href="lista_de_carpetas.php">Manuales</a></li>
            <li><a href="../../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    <body>
    <table class="content-table">
        <tr>
            <th>Carpetas</th>
        </tr>

    </table>
    <tbody>
    <?php
         while($row=mysqli_fetch_array($query)){ /*El assoc lo combierte en un arreglo asociativo*/
    ?>
    <tr>
        <td><a href="<?php echo $row['carpeta']?>"><?php echo $row['carpeta']?></a></td>
        <td><a href="obtencion_de_url_prueba.php?id=<?php echo $row['id_manuales']?>">Ver</a></td>
    </tr>
    <?php
       }                
    ?>
    </tbody>    
    </body>
</html>

