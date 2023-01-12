<?php

///ELIMINA LA CARPETA PERO COMO EL NOMBRE DE LA CARPETA SE REPITE NO ME DEJA ELIMINARLO

https://informaticapc.com/tutorial-php/manejo-de-archivos.php#enviar

include("conexion_manuales.php");
$conexion=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM manuales where carpeta='$id'";
$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);
//elimina la carpeta de la base de datos
$sql="DELETE FROM manuales WHERE id_manuales='$id'";
//$query=mysqli_query($conexion,$sql);
// https://underc0de.org/foro/dudas-generales-121/(solucionado)-eliminar-carpeta-con-contenido-desde-php/

//Elimina la carpeta del servidor pero no se eliminan de la bd de datos
$carpeta=$row['carpeta'];
$mis_fotos = "pdf_manuales/".$carpeta;     

foreach(glob($mis_fotos."/*.*") as $archivos_carpeta) 

{ 
 unlink($archivos_carpeta);
 //$sql="DELETE FROM manuales WHERE carpeta='$id'";
 //$query= mysqli_query($conexion,$sql);   
} 
//rmdir($mis_fotos);
header("Location: ver.php");    

?>

