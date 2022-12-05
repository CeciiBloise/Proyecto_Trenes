<?php
include("conexion_planos_bosques.php");
$conexion=conectar();

$id_plano=$_GET['id'];

$sql="DELETE FROM planos_bosques  WHERE id_plano_bosques='$id_plano'";
$query=mysqli_query($conexion,$sql);

    if($query){
        header("Location: tabla_planos_bosques.php");
    }
?>