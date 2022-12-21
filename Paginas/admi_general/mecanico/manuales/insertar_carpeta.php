<?php

foreach($_FILE['manuales']['tmp_name'] as $tmp_name)
{
    $archivo=$_FILES['manuales'];
    $nombre_manuales=$archivo['name'][$key];
    $url_temporal=$archivo['tmp_name'][$key];

    if(isset($_POST['directorio'])){
        $carpeta=htmlspecialchars($_POST['carpeta']);
        $ruta="manuales_pdf/";
        $directorios= $ruta.$carpeta;
        if(!is_dir($directorios)){
            mkdir($directorios, 0777) or die("Hubo un error al crear el directorio de almacenamiento");	
            if($nombre_manuales != ''){
                $manuales_nombre=$nombre.'_'.md5(date('d-m-Y H:m:s'));
                $manuales=$manuales_nombre.'.pdf';
                $src=$directorios.'/'.$manuales;
            }
        }
        if(move_uploaded_file($url_temporal,$src)) {	
            echo "Los archivos $manuales se han cargado de forma correcta.<br>";
            } else {	
            echo "Se ha producido un error, por favor revise los archivos e intentelo de nuevo.<br>";
        }
    
    }
}



/*https://codigosdeprogramacion.com/2017/06/01/subir-multiples-archivos-o-imagenes-con-php/#:~:text=Para%20seleccionar%20m%C3%BAltiples%20archivos%20presionamos,action%20en%20el%20elemento%20form.*/

?>