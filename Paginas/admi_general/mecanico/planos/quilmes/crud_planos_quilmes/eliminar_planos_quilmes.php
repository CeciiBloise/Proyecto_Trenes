<?php
include("conexion_planos_quilmes.php");
$conexion=conectar();

$id_plano=$_GET['id'];

$sql="DELETE FROM planos_quilmes  WHERE id_plano_quilmes='$id_plano'";
$query=mysqli_query($conexion,$sql);

    if($query){
        header("Location: tabla_planos_quilmes.php");
    }
?>