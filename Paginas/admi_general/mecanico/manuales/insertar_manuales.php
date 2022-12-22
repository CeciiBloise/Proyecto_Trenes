<?php
include("conexion_manuales.php");

$conexion=conectar();

foreach($_FILES['manuales']['tmp_name'] as $key => $tmp_name){
    if($_FILES['manuales']['name'][$key]){

        $filename = $_FILES['manuales']['name'][$key];
        $temporal = $_FILES['manuales']['tmp_name'][$key];

        $carpeta=htmlspecialchars($_POST['carpeta']);
        
        $destino = "manuales_pdf/"; //carpeta de almacenamiento

        $directorio = $destino.$carpeta;

        if(!file_exists($directorio)){
            mkdir($directorio, 0777);
        }

        $dir = opendir($directorio);
        $ruta = $directorio.'/'.$filename;

        if(move_uploaded_file($temporal,$ruta)){
            header("Location: crear_cargar_manuales.php");
        } else{
            echo "ocurrio un error";
        }

        closedir($dir);
    }
}

?>