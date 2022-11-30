<?php
    include("conexion_planos_quilmes.php");

    $conexion=conectar();


      $id=$_GET['id'];

      $sql="SELECT * FROM carga_de_usuarios WHERE legajo='$id'";
      $query=mysqli_query($conexion,$sql);

      $row=mysqli_fetch_array($query);
      header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=documento.pdf");
readfile("$plano");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="utf-8" /> <!-- tipos de caracter -->
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
      <link rel="stylesheet" href="../../../CSS/estilo_menu_horizontal.css"/>
      <link rel="stylesheet" href="../../../CSS/estilo_ficha.css"/>

      <title>Estacion Quilmes</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav class="navMenu">
            <li><a href="../../admi_general/Inicio.php" >Inicio</a></li>
            <li><a href="crear_registro_con_imagen.php">Registro</a></li>
            <li><a href="tabla_crud_registro_con_imagen.php">Tabla personal</a></li>
            <li><a href="../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>

    <body>
        <embed src="planos_quilmes/<?php echo $row['plano']?>" type="application/pdf" width="420px" height="630"></embed>
    </body>
</html>
