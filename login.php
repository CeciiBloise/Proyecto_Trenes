<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyecto_trenes"; //nombre de la base de datos

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
$query =mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '".$usuario."' and contraseña ='".$contraseña."'" );
//Una vez encontra la coincidencia nos da como resultado una fila, un numero
//$nro = mysqli_num_rows($query);
$nro = mysqli_fetch_array($query); 

//Permite el ingreso o la redirecciona al login
if($nro['id_cargo'] == 1) //administrador general
{
 header("Location: Paginas\Inicio.html");
 //echo "Bienvenido:" .$usuario;
}

if($nro['id_cargo'] == 2) //administrador personal
{
 header("Location: Paginas\Servicio_medico\Servicio_medico.html");
 //echo "Bienvenido:" .$usuario;
}

if($nro['id_cargo'] == 3) //mecanico
{
 header("Location: Paginas\Servicio_medico\Paginas_de_servicio_medico\1.html");
 //echo "Bienvenido:" .$usuario;
}

else
{
    //header("Location: Index.html");
    echo "No ingreso";
}
?>
