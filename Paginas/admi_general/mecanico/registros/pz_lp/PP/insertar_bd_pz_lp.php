<?php
/*Tengo que hacer que se cree la carpeta pan y pp, que se cree dentro de ellas 
 la carpeta de años y que dentro de ellas se guarden los archivos*/

/* https://www.baulphp.com/llenar-select-html-con-mysql-php-ejemplos/*/

include("conexion_registros.php");

$conexion=conectar();

$pan_pz_lp=['pan_pz_lp'];

if(isset($_POST['subir'])){
    
    foreach($_FILES[''][''] as $key => $value){
        
        $carpeta=htmlspecialchars($_POST['']); 
        $destino="pdf_manuales/";//carpeta de almacenamiento
        $directorio=$destino.$carpeta;//carpeta que contiene los manuales
            mkdir($directorio, 0777);//crea el directorio
            if(file_exists($_FILES[''][''][$key])){
                if(move_uploaded_file($_FILES[''][''][$key],$directorio."/".$_FILES[''][''][$key])){
                    $ruta=$directorio."/".$_FILES[''][''][$key];
                    $sql=$conexion->query("INSERT INTO registros_pz_lp(id_pz_lp,pan_pz_lp) VALUES ('$id_pz_lp','$pan_pz_lp')"); //guarda la ruta
                    header("Location: carga_pan_pz_lp.php");
                }else{
                    echo "ocurrio un error";
                }
            }
    }
}

?>