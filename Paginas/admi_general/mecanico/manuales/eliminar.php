<?php

///ELIMINA LA CARPETA PERO COMO EL NOMBRE DE LA CARPETA SE REPITE NO ME DEJA ELIMINARLO

https://informaticapc.com/tutorial-php/manejo-de-archivos.php#enviar

include("conexion_manuales.php");
$conexion=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM manuales where carpeta='$id'";
$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

?>

