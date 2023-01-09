<?php
/*Tengo que aumentar el tamaño para la carga en la base de datos
https://www.youtube.com/watch?v=_qcs5pbCTqw
*/
?>

<head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../../../CSS/estilo_registro.css"/>

        <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    
    </head>
    <style>
      body{
        background:  #F2F3F4;
        font-family: Arial;
      }
    </style>
    <header>
      <nav class="navMenu">
        <li><a href="../inicio_registros.php">registros</a></li>
        <li><a href="pz_lp.php">pz-lp</a></li>
        <li><a href="../../../../../logout.php">cerrar sesion</a></li>
      </nav>
    </header>
    <body>
        <div class="form_carga">
            <form action="insertar_bd_pp_pz_lp.php" method="POST" class="form">
                <h1 class="titulo">Cargar PP Nuevo</h1>  

                <div class="inputContainer">
                  <label>Paso a Peatonal:</label>
                  <input type="text" name="pp_pz_lp">
                </div>
                <div class="boton">
                    <input class="boton-subir" type="submit"  value="subir" name="subir">
                </div>
            </form>
        </div>
    </body>
</html>