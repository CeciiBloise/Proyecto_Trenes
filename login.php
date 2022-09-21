<?php
//variables que van a recibir valor por teclado para la validacion
$usuario-$_POST['usuario'];
$contraseña-$_POST['contraseña'];

session_start();

$_SESSION  ['usuario']-$usuario;

include('bd.php');

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_nun_rows($resultado);

if($fila){
    header("location:home.php");
}
else {
    ?>
    <?php
    include("Login.html");
    ?>
    <h1>Hay un error en la autotentificacion</h1>}
<?php
mysqli_free_result($resultado);
mysqli_close($conexion);
?>