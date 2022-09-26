<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test"; //nombre de la base de datos

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//Condicional por si no hay conexion que muestre el error
if(!$conexion){
    die("No hay conexion" .mysqli_connect_error());
}

//variables que van a recibir valor por teclado para la validacion
$usuario = $_POST["legajo"];
$contraseña = $_POST["contraseñaa"];

//Consulta que le va hacer al SQL, selecciona todo de la tabla login
//y buscara coincidencia entre el usuario y la contrasena ingresados con la tabla del SQL
$query =mysqli_query($conexion, "SELECT * FROM login WHERE usuario = '".$usuario."' and contraseña ='".$contraseña."'" );
//Una vez encontra la coincidencia nos da como resultado una fila, un numero
$nro = mysqli_num_rows($query);

//Permite el ingreso o la redirecciona al login
if($nro == 1)
{
 header("Location: Paginas\Inicio.html");
 //echo "Bienvenido:" .$usuario;
}
else if ($nro == 0)
{
    //header("Location: Index.html");
    echo "No ingreso";
}
?>