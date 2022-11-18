<?php
include("../crud_registro_con_imagen/conexion_crud_registro_con_imagen.php");
$conexion=conectar();

$nombre= $_POST['nombre_archivo'];
$descripcion= $_POST['descripcion'];
$fecha_carga= $_POST['fecha_creacion'];

$archivo= $_FILES['archivo'];
$nombre_archivo=$archivo['name'];
$type = $archivo['type'];
$url_temporal= $archivo['tmp_name'];

$destino = 'archivos/';
$src=$destino.$nombre_archivo;

$sql="INSERT INTO archivos VALUES('$nombre','$descripcion','$fecha_carga','$nombre_archivo')";
$query=mysqli_query($conexion,$sql);

if($query){
    if($nombre_archivo != ""){
        copy($url_temporal, $src);
        echo "Exito";
    }
    header("Location: crear_archivo.php");
}
else{
    echo "ERROR";
}
?> 