<?php
include("../crud_registro_con_imagen/conexion_crud_registro_con_imagen.php");
$conexion=conectar();

$nombre= $_POST['nombre_archivo'];
$categoria=$_POST['categoria'];
$descripcion= $_POST['descripcion'];
$fecha_carga= $_POST['fecha_creacion'];
/*Tengo que hacer que el nombre que yo le imgreso sea el nuevo nombre del archivo*/
$archivo= $_FILES['archivo'];
$nombre_archivo=$archivo['name'];
$type = $archivo['type'];
$url_temporal=$archivo['tmp_name'];

$url=file_get_contents($url_temporal);
$archivoBLOB=addslashes($url);
$destino = 'archivos/';
$src=$destino.$nombre_archivo;


$sql="INSERT INTO archivos(nombre_archivo, categoria, descripcion, fecha_creacion, archivo, type) VALUES('$nombre','$categoria','$descripcion','$fecha_carga','$archivoBLOB','$type')";
$query=mysqli_query($conexion,$sql);

if($query){
    if($nombre_archivo != ""){
        move_uploaded_file($archivoBLOB, $src);
        echo "Exito";
    }
    header("Location: crear_archivo.php");
}
else{
    echo "ERROR";
}
?> 