<?php
include("conexion_manuales.php");
$conexion=conectar();

$id=$_GET['id'];

$sql="SELECT *FROM manuales WHERE id_manuales=$id";

$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

$carpeta=$row['carpeta'];
$dirname="pdf_manuales/".$carpeta;
function borrar_directorio($dirname) {
	//si es un directorio lo abro
         if (is_dir($dirname))
           $dir_handle = opendir($dirname);
        //si no es un directorio devuelvo false para avisar de que ha habido un error
	 if (!$dir_handle)
	      return false;
        //recorro el contenido del directorio fichero a fichero
	 while($file = readdir($dir_handle)) {
	       if ($file != "." && $file != "..") {
                   //si no es un directorio elemino el fichero con unlink()
	            if (!is_dir($dirname."/".$file))
	                 unlink($dirname."/".$file);
	            else //si es un directorio hago la llamada recursiva con el nombre del directorio
	                 borrar_directorio($dirname.'/'.$file);
	       }
	 }
	 closedir($dir_handle);
	//elimino el directorio que ya he vaciado
	 rmdir($dirname);
     header("Location: lista.php");
	 return true;
}
header("Location: lista.php");
?>