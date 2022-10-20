<?php
include("conexion_crud_registro_con_imagen.php");
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
$habilitaciones=$_POST['habilitaciones'];
$supervisor=$_POST['supervisor_cargo'];
$fecha_de_ingreso=$_POST['fecha_de_ingreso_a_la_empresa'];

$sql="UPDATE carga_de_usuarios SET apellido='$apellido',nombre='$nombre',dni='$dni',fecha_de_nacimiento='$fecha_de_nacimiento',direccion='$direccion',celular='$celular',mail='$mail',puesto='$puesto',habilitaciones='$habilitaciones',supervisor_cargo='$supervisor',fecha_de_ingreso_a_la_empresa='$fecha_de_ingreso' WHERE legajo='$legajo'";

$query=mysqli_query($conexion,$sql);

if($query){
        header("Location: tabla_crud_registro_con_imagen.php");
}else{
    echo "ERROR";
}
?>