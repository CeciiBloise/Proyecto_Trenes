<?php
include("conexion_crud.php");
$conexion=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$celular=$_POST['celular'];
$mail=$_POST['mail'];
$direccion=$_POST['direccion'];
$fecha_de_nacimiento=$_POST['fecha_de_nacimiento'];
$legajo=$_POST['legajo'];
$fecha_de_ingreso=$_POST['fecha_de_ingreso_a_la_empresa'];
$puesto=$_POST['puesto'];
$supervisor=$_POST['supervisor_cargo'];

$sql="INSERT INTO carga_de_usuarios VALUES('$legajo','$nombre','$apellido','$dni','$celular','$mail','$direccion','$fecha_de_nacimiento','$fecha_de_ingreso','$puesto','$supervisor')";
$query= mysqli_query($conexion,$sql);

if($query){
    header("Location: crear.php");
}else{
    echo "ERROR";
}

?>