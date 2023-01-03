<?php
include("conexion_manuales.php");
$conexion=conectar();

$id=$_GET['id'];
//elimina la carpeta de la base de datos
$sql="DELETE FROM manuales WHERE id_manuales='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        header("Location: lista.php");
    }
?>