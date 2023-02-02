<?php
include("conexion_usuario.php");
$conexion=conectar();

if(isset($_POST['subir'])){
    $legajo=$_POST['legajo'];
    $apellido=$_POST['apellido'];
    $nombre=$_POST['nombre'];
    $alias=$_POST['alias'];
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

    $imagen=$_FILES['imagen'];
    $nombre_imagen=$imagen['name'];
    $type=$imagen['type'];
    $url_temporal=$imagen['tmp_name'];


    //$imagen_usuario='img_usuario.png';

        $destino='imagen_usuarios/';
        $imagen_nombre='img_'.md5(date('d-m-Y H:m:s'));
        $imagen_usuario=$imagen_nombre.'.jpg';
        $src=$destino.$imagen_usuario;
   

    $sql="INSERT INTO usuarios VALUES('$legajo','$apellido','$nombre','$alias','$dni','$fecha_de_nacimiento','$direccion','$celular','$mail','$puesto','$habilitaciones','$supervisor','$fecha_de_ingreso','$rol','$contraseña','$imagen_usuario')";

    $query= mysqli_query($conexion,$sql);

    if($query){
            move_uploaded_file($url_temporal, $src);
    }
    header("Location: crear_usuario.php");
}
else{
    echo "ERROR ESE USUARIO YA EXISTE";
}

?>