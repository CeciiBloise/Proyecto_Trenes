<?php

/* Aca se crea la carpeta del año*/

include("../conexion_registros.php");

$conexion=conectar();

if(isset($_POST['subir'])){
    
    $tu_año=htmlspecialchars($_POST['tu_año']); 
    $destino="registros_tu/";//carpeta de almacenamiento
    $directorio=$destino.$tu_año;//carpeta que contiene los manuales
   
    if(!file_exists($directorio)){
        mkdir($directorio, 0777);//crea el directorio
        $sql=$conexion->query("INSERT INTO registros_tu_año(tu_año) VALUES ('$tu_año')"); //guarda la ruta
       header("Location: carga_tu_año.php");   
    }
    else{
        echo " $tu_año ya existe";
    }

}

?>