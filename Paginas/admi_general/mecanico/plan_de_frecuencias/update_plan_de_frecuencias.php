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

$sql="UPDATE plan_de_frecuencias(nombre_paso_nivel,frecuencia_asc,frecuencia_desc,nivel_señal,nivel_tension,filtro,ubicacion) SET 'nombre_paso_nivel=$paso_nivel',frecuencia_asc='$frecuencia_asc',frecuencia_desc='$frecuencia_desc',nivel_señal='$nivel_señal',nivel_tension='$nivel_tension',filtro='$filtro',ubicacion='$ubicacion' WHERE id_plan_de_frecuencia='$id'";

$query=mysqli_query($conexion,$sql);

if($query){
    if($nombre_imagen != ''){
        move_uploaded_file($url_temporal, $src);
    
    }
        header("Location: ver_mas_info.php");
}else{
    echo "ERROR";
}
?>