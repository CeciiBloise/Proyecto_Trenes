<?php
include("conexion_plan_de_frecuencias.php");
$conexion=conectar();

date_default_timezone_set('america/argentina/buenos_aires');

$id= $_POST['id_plan_de_frecuencia'];
$paso_nivel= $_POST['nombre_paso_nivel'];
$frecuencia_asc=$_POST['frecuencia_asc'];
$frecuencia_desc=$_POST['frecuencia_desc'];
$nivel_señal=$_POST['nivel_señal'];
$nivel_tension=$_POST['nivel_tension'];
$filtro=$_POST['filtro'];
$ubicacion=$_POST['ubicacion'];

/*$archivo= $_FILES['plan_de_frecuencia'];

$nombre_plan=$archivo['name'];
$type = $archivo['type'];
$url_temporal=$archivo['tmp_name'];*


if($nombre_plan != ''){
    $destino="planos_plan_de_frecuencias/";
    $plan_nombre=md5(date('d-m-Y H:m:s')).'_'.$nombre;
    $plan=$plan_nombre.'.pdf';
    $src=$destino.$plan;
}*/

$sql="INSERT INTO plan_de_frecuencias(nombre_paso_nivel,frecuencia_asc,frecuencia_desc,nivel_señal,nivel_tension,filtro,ubicacion) VALUES('$paso_nivel','$frecuencia_asc','$frecuencia_desc','$nivel_señal','$nivel_tension','$filtro','$ubicacion')";

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