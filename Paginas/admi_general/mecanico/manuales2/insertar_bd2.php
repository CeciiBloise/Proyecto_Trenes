<?php
/*Crea la carpeta subiendo los archivos a esa que creo, y guarda la url en la base de datos de un solo archivo*/
/*https://www.youtube.com/watch?v=bNeT6A2qmQg&t=704s*/
include("conexion_manuales.php");

$conexion=conectar();

if(isset($_POST['subir'])){
    
    foreach($_FILES['manuales']['tmp_name'] as $key => $value){
        
        $carpeta=htmlspecialchars($_POST['carpeta']); 
        $destino="pdf_manuales/";//carpeta de almacenamiento
        $directorio=$destino.$carpeta;//carpeta que contiene los manuales
            
        if(!file_exists($directorio)){
            mkdir($directorio, 0777);//crea el directorio
            if(file_exists($_FILES['manuales']['tmp_name'][$key])){
                if(move_uploaded_file($_FILES['manuales']['tmp_name'][$key],$directorio."/".$_FILES['manuales']['name'][$key])){
            
                    echo "el archivo se ha subido";
    
                    $ruta=$directorio."/".$_FILES['manuales']['name'][$key];
                    $sql=$conexion->query("INSERT INTO manuales (carpeta,url) VALUES ('$carpeta','$ruta')"); //guarda la ruta
    
                }
            }
        }
    }
}

?>