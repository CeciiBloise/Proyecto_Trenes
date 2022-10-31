<?php
//seguridad de session paginacion 
session_start();
error_reporting(0);
$varsesion=$_SESSION['legajo'];
if($varsesion== null || $varsesion=''){
   echo "NO PUEDES INGRESAR, NO TIENES AUTORIZACION";
   //header("location:../../Index.html");
   die();
}
?>
<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../CSS/estilo_menuPrincipal.css"/>

        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    
    </head>
    
    <body>

                <nav class="menuPrincipal">
                        <li><a href="tabla_crud_registro_ap.php">Tabla de personal</a></li>
                        
                        <li><a href="../mecanico/mecanico.php">Mecanico</a></li>
                        
                        <li><a href="../../logout.php">Cerrar Sesion</a></li>
                </nav>

    </body>
</html>