<?php
include("conexion_planos_laPlata.php");
$conexion=conectar();

$id_plano=$_GET['id'];

$sql="DELETE FROM planos_laPlata  WHERE id_plano_laPlata='$id_plano'";
$query=mysqli_query($conexion,$sql);

    if($query){
        header("Location: tabla_planos_laPlata.php");
    }
?>