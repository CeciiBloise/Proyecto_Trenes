<?php
function conectar(){
    $conexion=mysqli_connect( "proyecto_trenes.com", "root", "") or die ("Error al conectar la base de datos" .mysql_error());
    mysqli_select_db($proyecto_trenes, $conexion);
}

?>