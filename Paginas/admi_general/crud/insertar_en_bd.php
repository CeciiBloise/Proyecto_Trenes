<?php
include("conexion_crud.php");
$conexion=conectar();

$legajo=$_POST['legajo'];
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$dni=$_POST['dni'];
$fecha_de_nacimiento=$_POST['fecha_de_nacimiento'];
$direccion=$_POST['direccion'];
$celular=$_POST['celular'];
$mail=$_POST['mail'];
$puesto=$_POST['puesto'];
$supervisor=$_POST['supervisor_cargo'];
$fecha_de_ingreso=$_POST['fecha_de_ingreso_a_la_empresa'];

$sql="INSERT INTO carga_de_usuarios VALUES('$legajo','$apellido','$nombre','$dni','$fecha_de_nacimiento','$direccion','$celular','$mail','$puesto','$supervisor','$fecha_de_ingreso')";
$query= mysqli_query($conexion,$sql);

if($query){
    header("Location: crear.php");
}
else{
    echo "ERROR";
}

?>