<?php
/*Tengo que hacer que se cree la carpeta pan y pp, que se cree dentro de ellas 
 la carpeta de años y que dentro de ellas se guarden los archivos*/

include("../../conexion_registros.php");

$conexion=conectar();

if(isset($_POST['subir'])){
    
    
    $carpeta=htmlspecialchars($_POST['pan']); 
    $destino="pan_pz_lp/";//carpeta de almacenamiento
    $directorio=$destino.$carpeta;//carpeta que contiene los manuales
    if(!file_exists($directorio)){
        mkdir($directorio, 0777);//crea el directorio
        
        $año=htmlspecialchars($_POST['año_pan']);
        $registro_año=$carpeta."/".$año;
        if(!file_exists($registro_año)){
            mkdir($registro_año, 0777);//crea la subcarpeta
            foreach($_FILES['registros_pz_lp']['tmp_name'] as $key => $value){
                $registros=$_FILES['registros_pz_lp']['tmp_name'];
                if(file_exists($registros[$key])){
                    move_uploaded_file($_FILES['registros_pz_lp']['tmp_name'][$key],$registro_año."/".$_FILES['registros_pz_lp']['name'][$key]);
                    $ruta=$registro_año."/".$_FILES['registros_pz_lp']['name'][$key];
                }
            }
        }
        $sql=$conexion->query("INSERT INTO registros_pz_lp(pan,año_pan) VALUES ('$pan','$año')"); //guarda la ruta
        header("Location: carga_equipo.php");
    }else{
        echo " $carpeta ya existe";
    }
    
}

?>