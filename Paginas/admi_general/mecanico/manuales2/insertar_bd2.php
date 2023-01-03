<?php
/*Crea la carpeta subiendo los archivos a esa que creo, y guarda la url en la base de datos*/
/*https://www.youtube.com/watch?v=bNeT6A2qmQg&t=704s*/
include("conexion_manuales.php");

$conexion=conectar();

if(isset($_POST['subir'])){
    
    $manual=$_FILES['manuales'];

    foreach($manual['tmp_name'] as $key => $value){
        if(file_exists($manual['tmp_name'][$key])){
            
            $carpeta=htmlspecialchars($_POST['carpeta']); 
            $destino="pdf_manuales/";//carpeta de almacenamiento
            $directorio=$destino.$carpeta;//carpeta que contiene los manuales

            if(!file_exists($directorio)){
                mkdir($directorio, 0777);//crea el directorio
                if(move_uploaded_file($manual['tmp_name'][$key],$directorio."/".$manual['name'][$key])){
        
                    $ruta=$directorio."/".$manual['name'][$key];
                    $sql=$conexion->query("INSERT INTO manuales (url) VALUES ('$ruta')"); //guarda la ruta
                    header("Location: carga_equipo.php");
                }
                else{
                    echo "ocurrio un error";
                }
            }
        }
    }


}

?>