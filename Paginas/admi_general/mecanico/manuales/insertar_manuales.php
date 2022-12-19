<?php
include("conexion_manuales.php");
$conexion=conectar();

$id= $_POST['id_manuales'];
$nombre= $_POST['nombre_manuales'];
$archivo= $_FILES['manuales'];

$nombre_manuales=$archivo['name'];
$type = $archivo['type'];
$url_temporal=$archivo['tmp_name'];

if(isset($_POST['directorio'])){
    $carpeta=htmlspecialchars($_POST['carpeta']);
    $ruta="manuales_pdf/";
    $directorios= $ruta.$carpeta;
    if(!is_dir($directorios)){
        $crear=mkdir($directorios, 0777, true);
        if($nombre_manuales != ''){
            $manuales_nombre=$nombre.'_'.md5(date('d-m-Y H:m:s'));
            $manuales=$manuales_nombre.'.pdf';
            $src=$directorios.'/'.$manuales;
        }
    }

}
else{
    $msg="El directorio que intentas crear ya existe";

}

$sql="INSERT INTO manuales(nombre_manuales,manuales) VALUES('$nombre','$manuales')";

$query=mysqli_query($conexion,$sql);

if($query){
    if($manuales_nombre != ''){
        move_uploaded_file($url_temporal, $src);
    }
    header("Location: crear_cargar_manuales.php");
}
else{
    echo "ERROR";
}
?> 