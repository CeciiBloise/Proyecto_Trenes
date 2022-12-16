<?php
include("conexion_manuales.php");
$conexion=conectar();

$id_manual=$_GET['id'];

$sql="DELETE FROM planos_bosques  WHERE id_manuales='$id_manual'";
$query=mysqli_query($conexion,$sql);

    if($query){
        header("Location: lista_de_manuales.php");
    }
?>