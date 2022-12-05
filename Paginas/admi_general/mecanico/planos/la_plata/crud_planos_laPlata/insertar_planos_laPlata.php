<?php
include("conexion_planos_laPlata.php");
$conexion=conectar();

date_default_timezone_set('america/argentina/buenos_aires');

$id= $_POST['id_plano_laPlta'];
$nombre= $_POST['nombre_laPlata'];
$descripcion= $_POST['descripcion_laPlata'];
$categoria= $_POST['categoria_laPlata'];
$fecha=$_POST['fecha_laPlata'];
$archivo= $_FILES['plano_laPlata'];
$nombre_plano=$archivo['name'];
$type = $archivo['type'];
$url_temporal=$archivo['tmp_name'];


if($nombre_plano != ''){
    $destino="planos_laPlata/";
    $plano_nombre=md5(date('d-m-Y H:m:s')).'_'.$nombre;
    $plano=$plano_nombre.'.pdf';
    $src=$destino.$plano;
}

$sql="INSERT INTO planos_laPlata(nombre_laPlata,descripcion_laPlata,categoria_laPlata,fecha_laPlata,plano_laPlata) VALUES('$nombre','$descripcion','$categoria','$fecha','$plano')";

$query=mysqli_query($conexion,$sql);

if($query){
    if($plano_nombre != ''){
        move_uploaded_file($url_temporal, $src);
    }
    header("Location: crear_planos_laPlata.php");
}
else{
    echo "ERROR";
}
?> 