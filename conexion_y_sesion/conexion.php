<?php
function conectar(){
    $dbhost = "localhost";//"localhost";
    $dbuser = "id20352428_base_quilmes";//"root";
    $dbpass = "01092022#baseQuilmes";
    $dbname = "id20352428_proyecto_trenes_argentinos";//"proyecto_trenes_argentinos"; //nombre de la base de datos
    $conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
   return $conexion;
}
?>