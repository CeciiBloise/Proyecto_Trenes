<?php
/*Crea la carpeta subiendo los archivos a esa que creo, y guarda la url en la base de datos los archivos*/
/*https://www.youtube.com/watch?v=bNeT6A2qmQg&t=704s*/
include("conexion_manuales.php");

$conexion=conectar();

if(isset($_POST['subir'])){
    
    
    $carpeta=htmlspecialchars($_POST['carpeta']); 
    $destino="pdf_manuales/";//carpeta de almacenamiento
    $directorio=$destino.$carpeta;//carpeta que contiene los manuales
    foreach($_FILES['manuales']['tmp_name'] as $key => $value){
            mkdir($directorio, 0777);//crea el directorio
            $manuales=$_FILES['manuales']['tmp_name'];
            if(file_exists($manuales[$key])){
                if(move_uploaded_file($_FILES['manuales']['tmp_name'][$key],$directorio."/".$_FILES['manuales']['name'][$key])){
                    $ruta=$directorio."/".$_FILES['manuales']['name'][$key];
                    $sql=$conexion->query("INSERT INTO manuales VALUES ('$carpeta','$manuales','$ruta')"); //guarda la ruta
                    header("Location: carga_equipo.php");
                }else{
                    echo "ocurrio un error";
                }
            }
    }
}

?>