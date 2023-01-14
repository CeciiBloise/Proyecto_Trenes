<?php
include("conexion_manuales.php");
$conexion=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM manuales WHERE id_manuales=$id";

$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

$carpeta=$row['carpeta'];

$ruta="pdf_manuales/$carpeta";
/*$files = glob("$carpeta/*"); //obtenemos todos los nombres de los ficheros
foreach($files as $file){
    if(is_file($file)){
	    unlink($file); //elimino el fichero
	}
}*/

$mis_fotos = $ruta;     

foreach(glob("$mis_fotos/*") as $archivos_carpeta){
	unlink($archivos_carpeta);   
}
rmdir($ruta);
$sql="DELETE FROM manuales  WHERE id_manuales='$id'";
$query=mysqli_query($conexion,$sql);
header("Location: lista.php");
?>