<?php
include("../conexion_registros.php");

$conexion=conectar();

$pp_pz_lp=$_POST['pp_pz_lp'];


$sql="INSERT INTO registros_pz_lp(pp_pz_lp) VALUES ('$pp_pz_lp')";

$query=mysqli_query($conexion,$sql);

if($query){
    header("Location:carga_pp_pz_lp.php");
}

?>