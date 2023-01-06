
<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../../../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../../../../CSS/estilo_registro.css"/>

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
        <li><a href="../../inicio_registros.php">registros</a></li>
        <li><a href="../pz_lp.php">pz-lp</a></li>
        <li><a href="../../../../../../logout.php">cerrar sesion</a></li>
      </nav>
    </header>

    <body>

    <div class="container">
        <form action="index.php" method="post">
            <select>
                <option value="0">Seleccione:</option>
                <?php foreach ($users as $user) { ?>
                    <option value="<?= $user['Codigo'] ?>"><?= $user['Nombre'] . ' ' . $user['Apellido1'] ?></option>
                <?php } ?>
            </select>
        </form>
    </div>

        <div class="form_carga">
            <form action="insertar_bd2.php" method="POST" enctype="multipart/form-data" class="form">
                <h1 class="titulo">Carga de Registros PAN</h1>  

                <div class="inputContainer">
                  <label>Paso a Nivel:</label>
                  <select name="pan" id="pan">
                    <option value="Gral.Otero">Gral. Otero</option>
                    <option value="pan">San Vicente</option>
                    <option value="pan">Bahia Blanca</option>
                    <option value="pan">Las Flores</option>
                    <option value="pan">Las Heras / Lamadrid</option>
                    <option value="pan">Castelli / Rpca. Del Libano</option>
                    <option value="pan">Conesa / Rodolfo López</option>
                    <option value="pan">12 de Octubre</option>
                    <option value="pan">Primera Junta</option>
                    <option value="pan">Dorrego</option>
                    <option value="pan">Varela</option>
                    <option value="pan">Lavalle / Calle 7</option>
                    <option value="pan">Rigoleau / Calle 14</option>
                    <option value="pan">Calle 24</option>
                    <option value="pan">Calle 39 / M. Chingolo / Rpca. Argentina</option>
                    <option value="pan">Calle 46</option>
                    <option value="pan">Calle 55 / Otto Bemberg</option>
                    <option value="pan">CIFIM</option>
                    <option value="pan">Punta Lara</option>
                    <option value="pan">Circunvalación Sur / Guemes / López Merino</option>
                    <option value="pan">Calle 502</option>
                    <option value="pan">Calle 528 Bis</option>
                    <option value="pan">Calle 38</option>
                    <option value="pan">Calle 38 Bis</option>
                  </select>
                </div>

                <div class="inputContainer">
                  <label>Año del Registro:</label>
                  <?php
                    $cont = date('Y');
                  ?>
                  <select id="sel1">
                   <?php while ($cont >= 1950) { ?>
                   <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
                   <?php $cont = ($cont-1); } ?>
                  </select>
          
                </div>

                <div class="inputContainer">
                  <label>Registro:</label> 
                  <input type="file" name="manuales[]" id="manuales[]" multiple="">
                </div>  

                <div class="boton">
                    <input type="hidden" name="directorio">
                    <input class="boton-subir" type="submit"  value="subir" name="subir">
                </div>
            </form>
          </div>
    </body>
</html>