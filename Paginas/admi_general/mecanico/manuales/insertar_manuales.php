<?php
include("conexion_manuales.php");
$conexion=conectar();

$id= $_POST['id_manuales'];
$nombre= $_POST['nombre_manuales'];
$archivo= $_FILES['manuales'];

$nombre_manuales=$archivo['name'];
$type = $archivo['type'];
$url_temporal=$archivo['tmp_name'];


if($nombre_manuales != ''){
    $destino="manuales_pdf/";
    $manuales_nombre=$nombre.'_'.md5(date('d-m-Y H:m:s'));
    $manuales=$manuales_nombre.'.pdf';
    $src=$destino.$manuales;
}

$sql="INSERT INTO manuales(nombre_manuales,manuales) VALUES('$nombre','$manuales')";

$query=mysqli_query($conexion,$sql);

if($query){
    if($plano_nombre != ''){
        move_uploaded_file($url_temporal, $src);
    }
    header("Location: crear_manuales.php");
}
else{
    echo "ERROR";
}
?> 