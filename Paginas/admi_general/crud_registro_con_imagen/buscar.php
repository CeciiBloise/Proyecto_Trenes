<?php
include("conexion_crud_registro_con_imagen.php");
$conexion=conectar();
   
    
$sql = "SELECT * FROM carag_de_usuarios WHERE legajo,nombre,apellido LIKE '%$buscar%' ORDER BY legajo,nombre,apellido";
    
$result = mysql_query($sql, $conexion);
    
if ($row = mysql_fetch_array($result)){
    
echo "<table border = '1'> \n";
    
    //Mostramos los nombres de las tablas
    
    echo "<tr> \ndigo" style="margin-left: 50">echo "<tr> \n";
    
    mysql_field_seek($result,0);
    
    while ($field = mysql_fetch_field($result)){
    
    echo "<td><b>$field->name</b></td> \n";
    
    }
    
    echo "</tr> \n";
    
    do {
    
    echo "<tr> \n";
    
    echo "<td>".$row["id"]."</td> \n";
    
    echo "<td>".$row["nombre"]."</td> \n";
    
    echo "<td>".$row["direccion"]."</td> \n";
    
    echo "<td>".$row["telefono"]."</td> \n";
    
    echo "<td><a
    
    href='mailto:"
    
    href='mailto:".$row["email"]."'>".
    
    $row["email"]."</a></td> \n";
    
    echo "</tr> \n";
    
    } while ($row = mysql_fetch_array($result));
    
    echo "<p><a href=buscador_bd.htm>Volver</p> \n";
    
    echo "</table> \n";
    
    } else {
    
    echo "<p>¡No se ha encontrado ningún registro!</p>\n";
    
    echo "<p><a href=buscador_bd.htm>Volver</p> \n";
    
    }

/*
https://www.jose-aguilar.com/blog/search-simple-php/ 
http://ibiblio.org/pub/linux/docs/LuCaS/Manuales-LuCAS/manual_PHP/manual_PHP/mysql/buscador_bd.htm

*/


?>