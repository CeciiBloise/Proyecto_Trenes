<?php

include("conexion_manuales.php");
$conexion=conectar();

//$sql="SELECT*FROM manuales";
$sql= "SELECT MIN(id_manuales) as id_manuales, carpeta FROM manuales GROUP BY carpeta";

$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <!-- Estilos -->
        <link rel="stylesheet" href="../../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../../CSS/estilo_tablas.css"/>
        
        <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav class="navMenu">
      <li><a href="../../mecanico_admi.php" >Inicio</a></li>
            <li><a href="carga_equipo.php">Carga de Manuales</a></li>
            <li><a href="../../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    <style>
        .content-table{
            position: absolute;
            left: 5%;
        }
    </style>
    <body>
    <table class="content-table">
        <thead>
            <tr>
                <th>Equipos</th>
                <th colspan="2">Accion</th>
            </tr>
        </thead>
        <tbody>
        <tr>
        <?php while($row=mysqli_fetch_array($query)){ ?>

            <td><?php echo $row['carpeta']?></td>

            <td><a href="ver.php?id=<?php echo $row['id_manuales']?>">Ver</a></td>
            <td><a href="eliminar.php?id=<?php echo $row['id_manuales']?>">Eliminar</a></td>
        
        </tr>
        <?php }?> 
        </tbody>
        </table>   
    </body>
</html>
