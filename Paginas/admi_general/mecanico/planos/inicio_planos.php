<?php
 session_start();
 include("../../../admi_general/usuarios/conexion_usuario.php");
 $conexion=conectar();

 //Validacion de session 
 if (!isset($_SESSION['legajo'])) {
   header("location: ../../../../Index.html");
   exit;
 }

 $legajo = $_SESSION['legajo'];
?>
<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../../../CSS/estilo_menuPrincipal.css"/>

        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    
    </head>
    
    <body>

                <nav class="menuPrincipal">

                        <li><a href="quilmes/tabla_planos_quilmes.php">Quilmes</a></li>

                        <li><a href="bosques/tabla_planos_bosques.php">Bosques</a></li>

                        <li><a href="la_plata/tabla_planos_laPlata.php">La Plata</a></li>

                        <li><a href="../../mecanico_admi.php">Volver al menu anterior</a></li>

                        <li><a href="../../../../logout.php">Cerrar Sesion</a></li>

                </nav>

    </body>
</html>