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
$rol=$_POST['id_cargo'];
$contraseña=$_POST['contraseña'];

/* actualizacion de image: 
https://www.youtube.com/watch?v=TnyroYqXMe0 
https://www.youtube.com/watch?v=tgwvotG6t64
https://www.youtube.com/watch?v=FWPHpyX2tPY
*/
$imagen=$_FILES['imagen'];
$nombre_imagen=$imagen['name'];
$type=$imagen['type'];
$url_temporal=$imagen['tmp_name'];


if($nombre_imagen != ''){
    $destino='imagen_usuarios/';
    $imagen_nombre='img_'.md5(date('d-m-Y H:m:s'));
    $imagen_usuario=$imagen_nombre.'.jpg';
    $src=$destino.$imagen_usuario;
}

$sql="UPDATE carga_de_usuarios SET apellido='$apellido',nombre='$nombre',dni='$dni',fecha_de_nacimiento='$fecha_de_nacimiento',direccion='$direccion',celular='$celular',mail='$mail',puesto='$puesto',habilitaciones='$habilitaciones',supervisor_cargo='$supervisor',fecha_de_ingreso_a_la_empresa='$fecha_de_ingreso',id_cargo='$rol',contraseña='$contraseña',imagen='$imagen_usuario' WHERE legajo='$legajo'";

$query=mysqli_query($conexion,$sql);

if($query){
    if($nombre_imagen != ''){
        move_uploaded_file($url_temporal, $src);
    
    }
        header("Location: tabla_crud_registro_con_imagen.php");
}else{
    echo "ERROR";
}
?>