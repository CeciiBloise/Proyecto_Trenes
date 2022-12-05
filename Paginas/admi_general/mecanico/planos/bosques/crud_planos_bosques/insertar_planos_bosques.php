<?php
include("conexion_planos_bosques.php");
$conexion=conectar();

date_default_timezone_set('america/argentina/buenos_aires');

$id= $_POST['id_plano_bosques'];
$nombre= $_POST['nombre_bosques'];
$descripcion= $_POST['descripcion_bosques'];
$categoria= $_POST['categoria_bosques'];
$fecha=$_POST['fecha_bosques'];
$fecha_carga=date('d-m-Y H:m:s');
$archivo= $_FILES['plano_bosques'];
$nombre_plano=$archivo['name'];
$type = $archivo['type'];
$url_temporal=$archivo['tmp_name'];


if($nombre_plano != ''){
    $destino="planos_bosques/";
    $plano_nombre=md5(date('d-m-Y H:m:s')).'_'.$nombre;
    $plano=$plano_nombre.'.pdf';
    $src=$destino.$plano;
}

$sql="INSERT INTO planos_bosques(nombre_bosques,descripcion_bosques,categoria_bosques,fecha_bosques,plano_bosques) VALUES('$nombre','$descripcion','$categoria','$fecha','$plano')";

$query=mysqli_query($conexion,$sql);

if($query){
    if($plano_nombre != ''){
        move_uploaded_file($url_temporal, $src);
    }
    header("Location: crear_planos_bosques.php");
}
else{
    echo "ERROR";
}
?> 