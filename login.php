<?php
//variables que van a recibir valor por teclado para la validacion
$usuario-$_POST['usuario'];
$contraseña-$_POST['contraseña'];

session_start();

$_SESSION  ['usuario']-$usuario;

include('bd.php');

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($fila['id_rol']==1){//admi_general
    header("location: Index.html");
}
if($fila['id_rol']==2){//admi_personal
    header("location: Paginas/Servicio_medico/Servicio_medico.html");
}
if($fila['id_rol']==3){//mecanico
    header("location: Paginas_de_servicio_medico/1.html");
}
else {
    ?>
    <?php
    include("Login.html");
    ?>
    <h1>Hay un error en la autotentificacion</h1>
}
    <?php

mysqli_free_result($resultado);
mysqli_close($conexion);