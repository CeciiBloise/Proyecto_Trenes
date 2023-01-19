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

      /** https://www.baulphp.com/llenar-select-html-con-mysql-php-ejemplos/ **/
    </style>
    <header>
      <nav class="navMenu">
        <li><a href="inicio_tu.php">registros tu</a></li>
        <li><a href="../../../../../logout.php">cerrar sesion</a></li>
      </nav>
    </header>
    <body>
        <div class="form_carga">
            <form action="insertar_bd_tu_año.php" method="POST" class="form">    
              <h1 class="titulo">Crear Un Año Nuevo</h1>

                <div class="inputContainer">
                  <label>Año:</label>
                  <?php
                    $cont = date('Y');
                  ?>
                  <select name="tu_año" id="sel1">
                   <?php while ($cont >= 1950) { ?>
                   <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
                   <?php $cont = ($cont-1); } ?>
                  </select>  
                </div>
                <div class="boton">
                    <input class="boton-subir" type="submit"  value="subir" name="subir">
                </div>
            </form>
        </div>
    </body>
</html>