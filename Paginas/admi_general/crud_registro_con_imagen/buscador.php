<?php
include("conexion_crud_registro_con_imagen.php");
     $conexion=conectar();

$buscar=$_POST['buscar'];

$sql_read="SELECT * FROM carga_de_usuarios WHERE legajo LIKE '%$buscar'";

$sql_query= mysqli_query($conexion, $sql_read);


?>