<?php
session_start();
include("../../../../conexion_y_sesion/conexion.php");
$conexion=conectar();

//Validacion de session 
if (!isset($_SESSION['legajo'])) {
    header("location: ../../../../index.html");
    exit;
}

$legajo = $_SESSION['legajo'];
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
            <li><a href="../../admi_personal_mecanico.php" >Inicio</a></li>
            <li><a href="tabla_plan_de_frecuencias.php">Tabla Plan de Frecuencias</a></li>
            <li><a href="../../../../conexion_y_sesion/logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>

    <body>
      <div class="mi-iframe">
        <iframe src="../../../admi_general/mecanico/plan_de_frecuencias/planos_plan_de_frecuencias/PLAN DE FRECUENCIAS NUEVO AV-BZ CAD 2007-Presentación1.pdf" type="application/pdf" width="100%" height="1000px"></iframe>
      </div>
    </body>
</html>
