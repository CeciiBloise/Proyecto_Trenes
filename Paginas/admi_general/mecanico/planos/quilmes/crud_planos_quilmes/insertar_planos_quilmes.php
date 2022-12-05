<?php
include("conexion_planos_quilmes.php");
$conexion=conectar();

date_default_timezone_set('america/argentina/buenos_aires');

$id= $_POST['id_plano_quilmes'];
$nombre= $_POST['nombre_quilmes'];
$descripcion= $_POST['descripcion_quilmes'];
$categoria= $_POST['categoria_quilmes'];
$fecha=$_POST['fecha_quilmes'];
$archivo= $_FILES['plano_quilmes'];
$nombre_plano=$archivo['name'];
$type = $archivo['type'];
$url_temporal=$archivo['tmp_name'];


if($nombre_plano != ''){
    $destino="planos_quilmes/";
    $plano_nombre=md5(date('d-m-Y H:m:s')).'_'.$nombre;
    $plano=$plano_nombre.'.pdf';
    $src=$destino.$plano;
}

$sql="INSERT INTO planos_quilmes(nombre_quilmes,descripcion_quilmes,categoria_quilmes,fecha_quilmes,plano_quilmes) VALUES('$nombre','$descripcion','$categoria','$fecha','$plano')";

$query=mysqli_query($conexion,$sql);

if($query){
    if($plano_nombre != ''){
        move_uploaded_file($url_temporal, $src);
    }
    header("Location: crear_planos_quilmes.php");
}
else{
    echo "ERROR";
}
?> 