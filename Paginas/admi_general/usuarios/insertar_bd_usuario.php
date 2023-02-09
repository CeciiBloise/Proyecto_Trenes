<?php
/*anda, tengo que ponerle algo que me diga que el legajo esta repetido*/
include("conexion_usuario.php");
$conexion=conectar();
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['subir'])){
    $legajo = mysqli_real_escape_string($conexion, $_POST['legajo']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $alias = mysqli_real_escape_string($conexion, $_POST['alias']);
    $dni = mysqli_real_escape_string($conexion, $_POST['dni']);
    $fecha_de_nacimiento = mysqli_real_escape_string($conexion, $_POST['fecha_de_nacimiento']);
    $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
    $celular = mysqli_real_escape_string($conexion, $_POST['celular']);
    $mail = mysqli_real_escape_string($conexion, $_POST['mail']);
    $puesto = mysqli_real_escape_string($conexion, $_POST['puesto']);
    $habilitaciones = mysqli_real_escape_string($conexion, $_POST['habilitaciones']);
    $supervisor = mysqli_real_escape_string($conexion, $_POST['supervisor_cargo']);
    $fecha_de_ingreso = mysqli_real_escape_string($conexion, $_POST['fecha_de_ingreso_a_la_empresa']);
    $rol = mysqli_real_escape_string($conexion, $_POST['roles_id']);
    $contraseña = mysqli_real_escape_string($conexion, $_POST['contraseña']);

    $imagen=$_FILES['imagen'];
    $nombre_imagen=$imagen['name'];
    $type=$imagen['type'];
    $url_temporal=$imagen['tmp_name'];

    //$imagen_usuario='img_usuario.png';

        $destino='imagen_usuarios/';
        $imagen_nombre='img_'.md5(date('d-m-Y H:m:s'));
        $imagen_usuario=$imagen_nombre.'.jpg';
        $src=$destino.$imagen_usuario;
    
        $sql="INSERT INTO usuarios (legajo, apellido,nombre,alias,dni,fecha_de_nacimiento,direccion,celular,mail,puesto,habilitaciones,supervisor_cargo, fecha_de_ingreso_a_la_empresa, id_rol,contraseña,imagen) 
        VALUES('$legajo','$apellido','$nombre','$alias','$dni','$fecha_de_nacimiento','$direccion','$celular','$mail','$puesto','$habilitaciones','$supervisor','$fecha_de_ingreso','$rol','$contraseña','$imagen_usuario')";
    
    $query=mysqli_query($conexion,$sql);
        if ($query) {
            move_uploaded_file($url_temporal, $src);
        }
            header("Location: crear_usuario.php");
}
else{
    echo "ERROR ESE USUARIO YA EXISTE";
}
?>