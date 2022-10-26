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
<style>
   body{
            background: #F2F3F4;
            font-family: Arial;
        }
        .contenedor-padre{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
           /* min-height: 100px;*/
            color: #fff; /*revisar esto*/ 
            background: #F2F3F4;
            height: 100vh;
            
        }
        .contenedor-hijo{
            /*display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 90%;
            height: 100vh;*/
            width: 400px;
            background-color: #F2F3F4;
            list-style: none;
            box-shadow: 0 10px 25px rgba(92, 99, 105, .2);
            border-radius: 6px;

        }
       
        li{
            flex-direction: column;
            align-items: center;
            list-style-type:none;
            display: flex;
            justify-content: center;

        }
        a{         
            border: 0.5px solid #5D6D7E; /*anchura, estilo y color borde*/
            padding: 10px; /*espacio alrededor texto*/
            background-color: #5D6D7E; /*color botón*/
            color: white; /*color texto*/
            text-transform: uppercase; /*capitalización texto*/
            border-radius: 6px; /*bordes redondos*/
            text-decoration:none;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);
        }
        a:hover {
            background-color: #3498DB;
            border: 0.5px solid #3498DB;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);
            color: white;
        }

</style>

<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        
        <!-- Estilos -->
        <!-- En casa: C:\Users\PC\Documents\Proyecto_Trenes\CSS\Hoja_de_estilos.css -->
        <!-- En el trabajo: C:\xampp\htdocs\Proyecto_Trenes\CSS\Hoja_de_estilos.css -->
      <!--  <link rel="stylesheet" href="../../CSS/Hoja_de_estilos.css"/> <--Aca llamo a la hoja de estilos-->
     <!--   <link rel="stylesheet" href="../../CSS/Hoja_de_estilos_cajas.css"/>
        <---link rel="stylesheet" href="C:\Users\PC\Documents\Proyecto_Trenes\CSS\normalize.css" /--> <!--No me funca-->

        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    
    </head>
    
    <body>

        <!-- contenido principal del cuerpo -->
        <!--<div class="flex-contenedor">-->
        <div class="contenedor-padre">

        <!-- Voy a dividir la pagina en tres secciones -->
            <div class="contenedor-hojo">
               <nav>
                  <ul>
                     <li><a href="../admi_personal/inicio_admi_personal.php">Servicio medico</a></li>
                     <br>
                     <li><a href="mecanico.php">Mecanico</a></li>
                     <br>
                     <li><a href="crud_registro/crear.php">Registrar usuarios</a></li>
                     <br>
                     <li><a href="crud_registro_con_imagen/crear_registro_con_imagen.php">Registar con imagen</a></li>
                     <br>
                     <li><a href="carga_de_pdf.php">PDF</a></li>
                     <br>
                     <li><a href="">Actualizacion de PDFs</a></li>
                     <br>
                     <li><a href="../../logout.php">Cerrar sesion</a></li>
                  </ul>
                </nav>
            </div>
        </div>
      </body>
</html>