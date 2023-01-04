<?php
include("conexion_manuales.php");
$conexion=conectar();

$id=$_GET['id'];

//elimina la carpeta de la base de datos
$sql="DELETE FROM manuales WHERE id_manuales='$id'";
$carpeta=['carpeta'];
$query=mysqli_query($conexion,$sql);

function rmDir_rf($url)
    {
      foreach(glob($url) as $archivos_carpeta){             
        if (is_dir($archivos_carpeta)){
          rmDir_rf($archivos_carpeta);
        } else {
        unlink($archivos_carpeta);
        }
      }
      rmdir($url);
    }
    /*if($query){*/
        $url="pdf_manuales/".$carpeta;
        rmDir_rf($url);
        header("Location: lista.php");
    /*}*/
?>
