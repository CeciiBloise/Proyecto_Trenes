<?php

/* Aca se crea la carpeta del pan*/

include("../../conexion_registros.php");

$conexion=conectar();

if(isset($_POST['subir'])){
    
    $pan_nuevo_tu=htmlspecialchars($_POST['pan_nuevo_tu']); 
    $destino="registros_pan_tu/";//carpeta de almacenamiento
    $directorio=$destino.$pan_nuevo_tu;//carpeta que contiene los manuales
   
    if(!file_exists($directorio)){
        mkdir($directorio, 0777);//crea el directorio
        $sql=$conexion->query("INSERT INTO registros_tu(pan_nuevo_tu) VALUES ('$pan_nuevo_tu')"); //guarda la ruta
       header("Location: cargar_nuevo_pan_tu.php");   
    }
    else{
        echo " $pan_nuevo_tu ya existe";
    }

}

?>