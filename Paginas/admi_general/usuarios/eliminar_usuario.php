<?php
include("conexion_usuario.php");
$conexion=conectar();
$legajo=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE legajo='$legajo'";
$query=mysqli_query($conexion,$sql);

    if($query){
        header("Location: tabla_usuario.php");
    }
?>