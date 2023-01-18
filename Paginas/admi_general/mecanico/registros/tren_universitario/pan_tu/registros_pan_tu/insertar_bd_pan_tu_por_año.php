<?php

/* Aca se crea la carpeta año dentro del pan, pero no mueve el archivo*/

include("../../../conexion_registros.php");

$conexion=conectar();

if(isset($_POST['subir'])){
    
    $año_pan_tu=htmlspecialchars($_POST["año_pan_tu"]); 
    $carpeta=$_POST["pan_tu_año"];//nombre de la carpeta del pan que seleccione
    $destino="$carpeta/";//carpeta de almacenamiento
    $directorio=$destino.$año_pan_tu;//carpeta que contiene los manuales
   
    if(!file_exists($directorio)){
        mkdir($directorio, 0777);//crea el directorio
        foreach($_FILES['registros_tu']['tmp_name'] as $key => $value){
            $registros_tu=$_FILES['registros_tu']['tmp_name'];
            if(file_exists($registros_tu[$key])){
                move_uploaded_file($_FILES['registros_tu']['tmp_name'][$key],$directorio."/".$_FILES['registros_tu']['name'][$key]);
            }
        }
        $sql=$conexion->query("INSERT INTO registros_tu(año_pan_tu) VALUES ('$año_pan_tu')"); //guarda la ruta
        header("Location: cargar_pan_por_año.php");   
    }
    else{
        echo " $año_pan_tu ya existe";
    }

}

?>