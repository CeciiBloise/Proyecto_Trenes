<?php
//seguridad de session paginacion 
session_start();
error_reporting(0);
$varsesion=$_SESSION['legajo'];
if($varsesion== null || $varsesion=''){
   echo "NO PUEDES INGRESAR, NO TIENES AUTORIZACION";
   //header("location:../../../Index.html");
   die();
}
?>


<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../CSS/estilo_menu.css"/>

        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    
    </head>
    
    <body>
        <div class="contenedor-padre">
            <div class="contenedor-hijo">
                <nav>
                        <li><a href="">XXXXXXXXX</a></li>
                        
                        <li><a href="">XXXXXXXXX</a></li>
                        
                        <li><a href="">XXXXXXXXX</a></li>
                        
                        <li><a href="../../logout.php">Cerrar Sesion</a></li>
                </nav>
            </div>
        </div>
    </body>

</html>