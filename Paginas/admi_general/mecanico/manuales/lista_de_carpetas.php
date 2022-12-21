<?php
$listar=null;
$directorio=opendir("manuales_pdf/");
while($elemento=readdir($directorio)){
    if($elemento != '.' && $elemento != '..'){
        if(is_dir("manuales_pdf/".$elemento)){
            $listar .="<li><a href='manuales_pdf/$elemento' target='_blank'>$elemento/</a></li>";
        }else{
            $listar .="<li><a href='manuales_pdf/$elemento' target='_blank'>$elemento/</a></li>";   
        }
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
                <?php
                echo $listar;
                ?>
            </nav>
    </body>
</html>