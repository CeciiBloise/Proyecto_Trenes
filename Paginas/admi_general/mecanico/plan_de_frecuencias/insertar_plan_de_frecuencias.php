<?php
include("conexion_plan_de_frecuencias.php");
$conexion=conectar();

$id= $_POST['id_plan_de_frecuencia'];
$paso_nivel= $_POST['nombre_paso_nivel'];
$frecuencia_asc=$_POST['frecuencia_asc'];
$frecuencia_desc=$_POST['frecuencia_desc'];
$señal_asc=$_POST['señal_asc'];
$señal_desc=$_POST['señal_desc'];
$tension_asc=$_POST['tension_asc'];
$tension_desc=$_POST['tension_desc'];
$filtro=$_POST['filtro'];
$ubicacion=$_POST['ubicacion'];


$sql="INSERT INTO plan_de_frecuencias(nombre_paso_nivel,frecuencia_asc,frecuencia_desc,señal_asc,señal_desc,tension_asc,tension_desc,filtro,ubicacion) VALUES('$paso_nivel','$frecuencia_asc','$frecuencia_desc','$señal_asc','$señal_desc','$tension_asc','$tension_desc','$filtro','$ubicacion')";

$query=mysqli_query($conexion,$sql);

if($query){
    if($plan_nombre != ''){
        move_uploaded_file($url_temporal, $src);
    }
    header("Location: crear_plan_de_frecuencias.php");
}
else{
    echo "ERROR";
}
?> 