<?php
   session_start();
   include("usuarios/conexion_usuario.php");
   $conexion=conectar();
 
   //Validacion de session 
   if (!isset($_SESSION['legajo'])) {
     header("location: ../../Index.html");
     exit;
   }

   $legajo = $_SESSION['legajo'];
?>
<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../CSS/estilo_menuPrincipal.css"/>

        <title>Trenes Argentino</title> <!-- titulo de la pagina -->
    
    </head>
    
    <body>

                <nav class="menuPrincipal">

                        <li><a href="mecanico/planos/inicio_planos.php">Planos</a></li>

                        <li><a href="mecanico/manuales/lista.php">Manuales</a></li>

                        <li><a href="mecanico/plan_de_frecuencias/tabla_plan_de_frecuencias.php">Plan de Frecuencia</a></li>

                        <li><a href="mecanico/registros/inicio_registros.php">Registros</a></li>

                        <li><a href="inicio_personal.php">Volver al inicio</a></li>

                        <li><a href="../../logout.php">Cerrar Sesion</a></li>

                </nav>

    </body>
</html>