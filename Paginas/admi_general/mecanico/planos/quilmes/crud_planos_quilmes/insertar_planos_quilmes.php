<?php
include("conexion_planos_quilmes.php");
$conexion=conectar();

date_default_timezone_set('america/argentina/buenos_aires');

$id= $_POST['id_plano'];
$nombre= $_POST['nombre_plano'];
$descripcion= $_POST['descripcion'];
$categoria= $_POST['categoria'];
$fecha=$_POST['fecha'];
$fecha_carga=date('d-m-Y H:m:s');
$fecha_creacion=
$archivo= $_FILES['plano'];
$nombre_plano=$archivo['name'];
$type = $archivo['type'];
$url_temporal=$archivo['tmp_name'];


if($nombre_plano != ''){
    $destino="planos_quilmes/";
    $plano_nombre=md5(date('d-m-Y H:m:s')).'_'.$nombre;
    $plano=$plano_nombre.'.pdf';
    $src=$destino.$plano;
}

$sql="INSERT INTO planos(nombre_plano,descripcion,categoria,fecha,plano) VALUES('$nombre','$descripcion','$categoria','$fecha_carga','$plano')";

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