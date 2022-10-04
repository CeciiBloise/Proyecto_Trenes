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
        
        <!-- Estilos -->
        <!-- En casa: C:\Users\PC\Documents\Proyecto_Trenes\CSS\Hoja_de_estilos.css -->
        <!-- En el trabajo: C:\xampp\htdocs\Proyecto_Trenes\CSS\Hoja_de_estilos.css -->
        <link rel="stylesheet" href="../../CSS/Hoja_de_estilos.css"/> <!--Aca llamo a la hoja de estilos-->
        <link rel="stylesheet" href="../../CSS/Hoja_de_estilos_cajas.css"/>
        <!---link rel="stylesheet" href="C:\Users\PC\Documents\Proyecto_Trenes\CSS\normalize.css" /--> <!--No me funca-->

        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    
    </head>
    
    <body>

        <!-- contenido principal del cuerpo -->
        <div class="flex-contenedor">

        <!-- Voy a dividir la pagina en tres secciones -->

        <!-- 1 -->
               <!-- esta seccion va ser del menu -->
               <div class="menu">
                  <nav>
                     <ul>
                        <li><a href="Inicio.php">Volver al inicio</a></li>
                        <br>
                          <li><a href="">boton1</a><li> 
                     </ul>
                     <h1>Acceso a otras cosas</h1>
                  </nav>
               </div>
               
            <section class="contenedor">

               <!-- 2 -->
               <!-- esta seccion va a ser la del titulo, seria el header -->
               <header class="header">
                  <div class="titulo">
                    <h1>XXXXXXXXX</h1>
                    <nav>
                     <ul>
                        <li>
                           <a href="../../logout.php" class="boton_cerrar_sesion">Cerrar Sesion</a>
                        </li>
                     </ul>
                    </nav>  
                  </div>

                  <div class="logo"></div>
               </header>  

               <!-- 3 -->
               <!-- Esta seccion va a ser donde muestro la info -->  
               <div class="info1">
                  <!--en data va la direccion del pdf -->
                    <!--<object class="pdf" type="application/pdf" data="C:\xampp\htdocs\Proyecto_Trenes\Paginas\Servicio_medico\PDFs_de_servicio_medico\Vue1"></object> -->
                        
               
                </div>

            </section>

        </div>
        
        <!-- pie de pagina -->
        <footer class="footer"> 
         <p> © 2022 Estacion de Trenes Quilmes </p>
      </footer>

      </body>
</html>