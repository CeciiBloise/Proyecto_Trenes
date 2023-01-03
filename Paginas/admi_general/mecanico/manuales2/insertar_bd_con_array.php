<?php

/*Mueve el archivo y guarda la url*/
include("conexion_manuales.php");

$conexion=conectar();

if(isset($_POST['subir'])){
    foreach($_FILES['manuales']['tmp_name'] as $key => $value){
        
        $carpeta=$_POST['carpeta'];
        
        
        if(file_exists($_FILES['manuales']['tmp_name'][$key])){
            
            if(move_uploaded_file($_FILES['manuales']['tmp_name'][$key],'pdf_manuales/'.$_FILES['manuales']['name'][$key])){
                echo "el archivo se ha subido";
                
                $ruta="pdf_manuales/".$_FILES['manuales']['name'][$key];
                $sql=$conexion->query("INSERT INTO manuales (carpeta,url) VALUES ('$carpeta','$ruta')"); //guarda la ruta
            }
        }
    }


}

?>