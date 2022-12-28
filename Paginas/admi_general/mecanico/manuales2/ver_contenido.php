<?php

/*https://programandoointentandolo.com/2013/09/mostrar-archivos-de-una-carpeta-con-php.html#:~:text=Para%20poder%20mostrar%20el%20contenido,se%20puede%20usar%20como%20iterador*/
 
/* 
 Funcion que muestra la estructura de carpetas a partir de la ruta dada.
 */

function obtener_estructura_directorios($ruta){
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        echo "<ul>";

        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {
                
            $ruta_completa = $ruta . "/" . $archivo;

            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                // Si es un directorio se recorre recursivamente
                if (is_dir($ruta_completa)) {
                    echo "<li>" . $archivo . "</li>";
                    obtener_estructura_directorios($ruta_completa);
                } else {
                    echo "<li>" . $archivo . "</li>";
                }
            }
        }
        
        // Cierra el gestor de directorios
        closedir($gestor);
        echo "</ul>";
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}
?>
<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <!--<link rel="stylesheet" href="../../../../CSS/estilo_menu_horizontal.css"/>-->
        <!--<link rel="stylesheet" href="../../../../CSS/estilo_carga.css"/>-->

        <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    
    </head>
    <style>
      body{
        background:  #F2F3F4;
        font-family: Arial;
      }
      nav{
        text-decoration:none;
        font-family: Arial;
        color:black;
        align-items: flex-start;
      }
    </style>
    <header>
      <nav class="navMenu">
            <li><a href="../../mecanico_admi.php" >Inicio</a></li>
            <li><a href="../../mecanico/manuales/crear_cargar_manuales.php">Crear carpeta</a></li>
            <li><a href="../../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    <body>
            <h1>EQUIPOS</h1>
            <nav>
                <ul><?php obtener_estructura_directorios("pdf_manuales/");?></ul>
            </nav>
    </body>
</html>