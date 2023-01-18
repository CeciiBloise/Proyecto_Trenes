<?php
/*Me lista el contenido de la carpeta*/
include("../../conexion_registros.php");
$conexion=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM registros_tu where id_tu='$id'";
$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

$listar=null;
$carpeta=$row['pan_nuevo_tu'];
$directorio=opendir("registros_pan_tu/".$carpeta);
$url="registros_pan_tu/".$carpeta;

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
        <link rel="stylesheet" href="../../../../../../CSS/listaPdf.css"/>
        <link rel="stylesheet" href="../../../../../../CSS/estilo_menu_horizontal.css"/>
        
        <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    </head>

    <style>
    
    </style>

    <header>
      <nav class="navMenu">
      <li><a href="../../inicio_registros.php">Registros</a></li>
            <li><a href="pan_tu.php">pan TU</a></li>
            <li><a href="../../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    <body>
    <table class="content-table">
        <thead>
            <tr>
                <th><?php echo $row['pan_nuevo_tu'] ?></th> 
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $listar?></td> <!-- aca listo la carpetas por año -->
        </tr>
        </tbody>
        </table>   
    </body>
</html>