<?php
include("conexion_plan_de_frecuencias.php");
$conexion=conectar();

$id_plano=$_GET['id'];

$sql="DELETE FROM plan_de_frecuencias  WHERE id_plan_de_frecuencia='$id_plano'";
$query=mysqli_query($conexion,$sql);

    if($query){
        header("Location: tabla_plan_de_frecuencias.php");
    }
?>