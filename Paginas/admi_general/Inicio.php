<?php
//seguridad de session paginacion 
session_start();
error_reporting(0);
$varsesion=$_SESSION['legajo'];
if($varsesion== null || $varsesion=''){
   //echo "NO PUEDES INGRESAR, NO TIENES AUTORIzACION";
   header("location: ../../Index.html");
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
                  <ul>
                     <li><a href="admi_personal.php">Servicio medico</a></li>
                     <br>
                     <li><a href="mecanico_admi.php">Mecanico</a></li>
                     <br>
                     <li><a href="crud_registro_con_imagen/crear_registro_con_imagen.php">Registar usuario</a></li>
                     <br>
                     <li><a href="crud_registro_con_imagen/tabla_crud_registro_con_imagen.php">Tabla de personal</a></li>
                     <br>
                     <li><a href="carga_de_pdf.php">Carga de PDF</a></li>
                     <br>
                     <li><a href="../../logout.php">Cerrar sesion</a></li>
                  </ul>
                </nav>
            </div>
        </div>
    </body>

</html>