<?php
/* Esto anda, pero me muestra la busqueda en la tabla */
 include("conexion_usuario.php");
 $conexion=conectar();
  $search = mysqli_real_escape_string($conexion, $_POST['buscar']);
  $query = "SELECT * FROM usuarios WHERE nombre LIKE '%".$search."%'";
  $result = mysqli_query($conexion, $query);
  if ($result) {
    while ($row = mysqli_fetch_array($result)) {
      echo $row['nombre'] . '<br>';
    }
  } else {
    echo "Error en la consulta: " . mysqli_error($conn);
  }
?>
