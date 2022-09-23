<?php

$legajo=$_POST['legajo'];
$contraseña=$_POST['contraseña'];

session_star();

$_SESSION['legajo']=$legajo;

include('basededatos.php')


$conexion=mysqli_connect('localhost', 'root', '', 'proyecto_trenes');
$consulta="SELECT * FROM ejemplo_usuario WHERE legajo='$legajo' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($fila['id_rol']==1){//admi_general
    include("location: Paginas/Inicio.html");
}
if($fila['id_rol']==2){//admi_personal
    include("location: Paginas/Servicio_medico/Servicio_medico.html");
}
if($fila['id_rol']==3){//mecanico
    include("location: Paginas/Servicio_medico/Paginas_de_servicio_medico/1.html");
}
else {
    ?>
    <?php
    include("Index.html");
    ?>
    <h1>Hay un error en la autotentificacion</h1>
}
    <?php

mysqli_free_result($resultado);
mysqli_close($conexion);


//https://www.youtube.com/watch?v=mZG7VvHkOjI