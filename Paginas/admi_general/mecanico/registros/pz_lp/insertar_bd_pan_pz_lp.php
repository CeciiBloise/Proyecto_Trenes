<?php
include("../conexion_registros.php");

$conexion=conectar();

$pan_pz_lp=$_POST['pan_pz_lp'];


$sql="INSERT INTO registros_pz_lp(pan_pz_lp) VALUES ('$pan_pz_lp')";

$query=mysqli_query($conexion,$sql);

if($query){
    header("Location:carga_pan_pz_lp.php");
}

?>