<?php
/*ESTE TAMBIEN ANDA */
/*Crea la carpeta subiendo los archivos a esa que creo y guarda en la base de datos solo el nobre de la carpeta */
/*https://www.youtube.com/watch?v=bNeT6A2qmQg&t=704s*/
include("conexion_manuales.php");

$conexion=conectar();

if(isset($_POST['subir'])){
    
    
    $carpeta=htmlspecialchars($_POST['carpeta']); 
    $destino="pdf_manuales/";//carpeta de almacenamiento
    $directorio=$destino.$carpeta;//carpeta que contiene los manuales
    if(!file_exists($directorio)){
        mkdir($directorio, 0777);//crea el directorio
        foreach($_FILES['manuales']['tmp_name'] as $key => $value){
                $manuales=$_FILES['manuales']['tmp_name'];
                if(file_exists($manuales[$key])){
                    move_uploaded_file($_FILES['manuales']['tmp_name'][$key],$directorio."/".$_FILES['manuales']['name'][$key]);
                    $ruta=$directorio."/".$_FILES['manuales']['name'][$key];
                }
        }
        $sql=$conexion->query("INSERT INTO manuales(carpeta) VALUES ('$carpeta')"); //guarda la ruta
        header("Location: carga_equipo.php");
    }else{
        echo " $carpeta ya existe";
    }
    
}
?>