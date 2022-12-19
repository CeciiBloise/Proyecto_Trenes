<?php
$msg = null;
    if(isset($_POST['directorio'])){
        $carpeta=htmlspecialchars($_POST['carpeta']);
        $ruta="manuales_pdf/";
        $directorios= $ruta.$carpeta;
    }
    //verificacion de existencia del directorio
    if(!file_exists($directorios)){
         $crear=mkdir($directorios, 0777, true);
         if($crear){
            header("Location: crear_carpeta_manuales.php");
            $msg="Directorio creado corectamente";
         }else{
            header("Location: crear_carpeta_manuales.php");
            $msg="A ocurrido un error al crear el directorio";
         }
    }
    else{
        header("Location: crear_carpeta_manuales.php");
        $msg="El directorio que intentas crear ya existe";

    }
    ?>