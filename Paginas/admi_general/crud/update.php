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

$sql="UPDATE carga_de_usuarios SET apellido='$apellido',nombre='$nombre',dni='$dni',fecha_de_nacimiento='$fecha_de_nacimiento',direccion='$direccion',celular='$celular',mail='$mail',puesto='$puesto',supervisor_cargo='$supervisor',fecha_de_ingreso='$fecha_de_ingreso' WHERE 'legajo'=$legajo";

$query=mysqli_query($conexion,$sql);

if($query){
        header("Location: tabla_crud.php");
}else{
    echo "ERROR";
}
?>