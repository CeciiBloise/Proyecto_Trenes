<?php
include("../conexion_registros.php");

$conexion=conectar();

if(isset($_POST['subir'])){
    
    $pan_pz_lp=htmlspecialchars($_POST['pan_pz_lp']); 
    $destino="PAN/pan_pz_lp/";//carpeta de almacenamiento
    $directorio=$destino.$carpeta;//carpeta que contiene los manuales
   
    if(!file_exists($directorio)){
        mkdir($directorio, 0777);//crea el directorio
        $sql=$conexion->query("INSERT INTO registros_pz_lp(pan_pz_lp) VALUES ('$carpeta')"); //guarda la ruta
       header("Location: carga_nuevo_pan_pz_lp.php");   
    }
    else{
        echo " $carpeta ya existe";
    }

}

?>