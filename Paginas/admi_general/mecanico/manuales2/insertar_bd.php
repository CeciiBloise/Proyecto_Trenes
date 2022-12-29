<?php
include("conexion_manuales.php");

$conexion=conectar();

foreach($_FILES['manuales']['tmp_name'] as $key => $tmp_name){
    if($_FILES['manuales']['name'][$key]){

        $filename = $_FILES['manuales']['name'][$key];
        $temporal = $_FILES['manuales']['tmp_name'][$key];

        $carpeta=htmlspecialchars($_POST['carpeta']);
        
        $destino = "pdf_manuales/"; //carpeta de almacenamiento

        $directorio = $destino.$carpeta;//carpeta que contiene a los manuales

        if(!file_exists($directorio)){
            mkdir($directorio, 0777);//crea el directorio

            $sql="INSERT INTO manuales(carpeta) VALUES ('$directorio')";
       
            $query= mysqli_query($conexion,$sql);
        }

        $dir = opendir($directorio);
        $ruta = $directorio.'/'.$filename;

        if(move_uploaded_file($temporal,$ruta)){
            header("Location: carga_equipo.php");
        } else{
            echo "ocurrio un error";
        }

        closedir($dir);
    }
}

?>