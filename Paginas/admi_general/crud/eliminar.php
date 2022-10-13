<?php
include("conexion_crud.php");
$conexion=conectar();
$legajo=$_GET['id'];

$sql="DELETE FROM carga_de_usuarios  WHERE legajo='$legajo'";
$query=mysqli_query($conexion,$sql);

    if($query){
        header("Location: tabla_crud.php");
    }
?>