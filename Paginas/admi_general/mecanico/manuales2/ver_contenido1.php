<?php

/*https://programandoointentandolo.com/2013/09/mostrar-archivos-de-una-carpeta-con-php.html#:~:text=Para%20poder%20mostrar%20el%20contenido,se%20puede%20usar%20como%20iterador*/
 

/*Lista el contenido del directorio, pero solo muestra */
function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$local_dir='pdf_manuales';

$files=scandir($local_dir);

$files=array_diff($files, array('.','..'));

$files=array_values($files);

$files=array();

$files=array_values(array_diff(scandir($local_dir), array('.','..')));

$files=array();

$files= clean_scandir($local_dir);


function clean_scandir($dir){
    return array_values(array_diff(scandir($dir), array('.','..')));
}

//pre_r($files);

function clean_readdir($dir){

    $files=array();

    if($handle=opendir($dir)){
        while(false !== ($file= readdir($handle))){
            if($file !== '.' && $file !== '..'){
                $files[] = $file;
            }
        }
        closedir($handle);
    }
    return $files;
}
pre_r(clean_readdir($local_dir));
?>