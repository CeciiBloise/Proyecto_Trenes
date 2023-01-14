<?php
/*ESTE ANDA*/
include("conexion_manuales.php");
$conexion=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM manuales WHERE id_manuales=$id";

$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

$carpeta=$row['carpeta'];

$eliminar_carpeta = "pdf_manuales/$carpeta";     

foreach(glob("$eliminar_carpeta/*") as $archivos_carpeta){
	unlink($archivos_carpeta);   
}
rmdir($eliminar_carpeta);
$sql="DELETE FROM manuales  WHERE id_manuales='$id'";
$query=mysqli_query($conexion,$sql);
header("Location: lista.php");
?>