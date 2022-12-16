<?php
    include("conexion_manuales.php");

    $conexion=conectar();


      $id=$_GET['id'];

      $sql="SELECT * FROM manuales WHERE id_manuales='$id'";
      $query=mysqli_query($conexion,$sql);

      $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="utf-8" /> <!-- tipos de caracter -->
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
      <link rel="stylesheet" href="../../../../CSS/estilo_menu_horizontal.css"/>

      <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav class="navMenu">
            <li><a href="../../mecanico_admi.php" >Inicio</a></li>
            <li><a href="../manuales/lista_de_manuales.php">Manuales</a></li>
            <li><a href="../../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>

    <body>
      <div class="mi-iframe">
        <iframe src="manuales_pdf/<?php echo $row['manuales']?>" type="application/pdf" width="100%" height="600px"></iframe>
      </div>
    </body>
</html>
