<?php
    include("conexion_planos_quilmes.php");

    $conexion=conectar();


      $id=$_GET['id'];

      $sql="SELECT * FROM planos WHERE id_plano='$id'";
      $query=mysqli_query($conexion,$sql);

      $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="utf-8" /> <!-- tipos de caracter -->
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
      <link rel="stylesheet" href="../../../../../../CSS/estilo_menu_horizontal.css"/>

      <title>Estacion Quilmes</title> <!-- titulo de la pagina -->
    </head>
    <style>
      /*TENGO QUE HACER EL PDF RESPONSIVE

      https://www.sessionstudio.com.ar/blog/2018/08/25/como-hacer-un-iframe-responsivo/

      /* CSS general 
.mi-iframe {
  width: 100px;
  height: 50px;
}

/* CSS pantallas de 320px o superior 
@media (min-width: 320px) {

  .mi-iframe {
    width: 200px;
    height: 150px;
  } 

}

/* CSS pantalla 768px o superior 
@media (min-width: 768px) {

  .mi-iframe {
    width: 500px;
    height: 350px;
  } 

}

      
      */ 
    </style>

    <header>
      <nav class="navMenu">
            <li><a href="../../inicio_planos.php" >Planos</a></li>
            <li><a href="tabla_planos_quilmes.php">Tabla planos</a></li>
            <li><a href="../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>

    <body>
      <div class="mi-iframe">
        <iframe src="planos_quilmes/<?php echo $row['plano']?>" type="application/pdf" width="100%" height="600px"></iframe>
      </div>
    </body>
</html>
