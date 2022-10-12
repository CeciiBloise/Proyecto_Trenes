<?php
include("conexion_crud.php");
$conexion=conectar();
$cod_estudiante=$_GET['id'];

$sql="DELETE FROM carga_de_usuarios  WHERE lagajo='$legajo'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: crear.php");
    }
?>