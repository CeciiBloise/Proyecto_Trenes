<?php

/*https://es.stackoverflow.com/questions/163082/c%C3%B3mo-puedo-guardar-m%C3%BAltiples-archivos-con-un-mismo-id*/

include("conexion_manuales.php");

$conexion=conectar();

$manuales=$_FILES['manuales'];
foreach($manuales['tmp_name'] as $key => $tmp_name){
    if($manuales['name'][$key]){

        $filename = $_FILES['manuales']['name'][$key];
        $temporal = $_FILES['manuales']['tmp_name'][$key];

        $carpeta=htmlspecialchars($_POST['carpeta']);
        
        $destino = "pdf_manuales/"; //carpeta de almacenamiento

        $directorio = $destino.$carpeta;//carpeta que contiene a los manuales

        if(!file_exists($directorio)){
            mkdir($directorio, 0777);//crea el directorio

            $sql="INSERT INTO manuales(carpeta,"; 
            
            for ($i=0, $size = count($manuales); $i<$size;$i++){
                $sql.=' manuales'.($i+1);
                if ( $size >  $i+1 ){
                    $sql .= ',';
                }
            }
            $sql .= ' ) VALUES (';
            for ($i=0, $size = count($manuales); $i<$size;$i++){
                $sql .= $carpeta.', '.$manuales[$i];
                if ( $size >  $i+1 ){
                    $sql .= ',';
                }
            }
            $sql.= ')'; 

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