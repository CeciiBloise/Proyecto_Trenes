<?php
/* Esto anda, pero me muestra la busqueda en la tabla */
include("conexion_usuario.php");
$conexion=conectar();

$search = $_POST['buscar'];

// Prepare statement
$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE nombre LIKE ?");//La pregunta ? se utiliza como marcador de parámetros, y se vinculará con un valor real más tarde.

// Bind variable
$search = "%$search%";
$stmt->bind_param("s", $search);///La primera cadena "s" especifica el tipo de parámetro, donde "s" significa que el parámetro es una cadena. El segundo argumento es la variable que se vincula, en este caso $search. También estamos agregando % al principio y al final de $search para hacer una búsqueda que coincide con cualquier texto que contenga el valor que estamos buscando

// Execute statement
$stmt->execute();

// Get results
$result = $stmt->get_result();

// Fetch rows
while ($row = $result->fetch_assoc()) {
  echo $row['nombre'] . '<br>';
}

// Cierra la sentencia
$stmt->close();

// Close connection
$conexion->close();
?>
