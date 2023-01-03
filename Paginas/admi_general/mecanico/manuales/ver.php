<?php
/*Me lista el contenido de la carpeta*/
include("conexion_manuales.php");
$conexion=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM manuales where id_manuales='$id'";
$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

$listar=null;
$carpeta=$row['carpeta'];
$directorio=opendir("pdf_manuales/".$carpeta);
$url="pdf_manuales/".$carpeta;

while($elemento=readdir($directorio)){
    if($elemento != '.' && $elemento != '..'){
        if(is_dir($directorio.$elemento)){
            $listar .="<ul><a href='$url/$elemento' target='_parent'>$elemento</a></ul><br/>";
        }else{
            //error_reporting(0);
            $listar .="<ul><a href='$url/$elemento' target='_parent'>$elemento</a></ul><br/>";   
        }
    }
}
?>
<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        
        <!-- Estilos -->
        <link rel="stylesheet" href="../../../../CSS/listaPdf.css"/>
        <link rel="stylesheet" href="../../../../CSS/estilo_menu_horizontal.css"/>
        
        <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    </head>

    <style>
    
    </style>

    <header>
      <nav class="navMenu">
      <li><a href="../../mecanico_admi.php" >Inicio</a></li>
            <li><a href="carga_equipo.php">Manuales</a></li>
            <li><a href="../../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    <body>
    <table class="content-table">
        <thead>
            <tr>
                <th><?php echo $row['carpeta'] ?></th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $listar?></td>
        </tr>
        </tbody>
        </table>   
    </body>
</html>
