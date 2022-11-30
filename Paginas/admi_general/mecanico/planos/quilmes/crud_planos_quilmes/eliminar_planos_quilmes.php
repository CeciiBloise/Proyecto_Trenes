<?php
include("conexion_planos_quilmes.php");
$conexion=conectar();

$id_plano=$_GET['id'];

$sql="DELETE FROM planos  WHERE id_plano='$id_plano'";
$query=mysqli_query($conexion,$sql);

    if($query){
        header("Location: tabla_planos_quilmes.php");
    }
?>