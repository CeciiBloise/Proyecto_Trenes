
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
        <li><a href="../../inicio_registros.php">Inicio registros</a></li>
        <li><a href="../pz_lp.php">pz-lp</a></li>
        <li><a href="../../../../../../logout.php">cerrar sesion</a></li>
      </nav>
    </header>

    <body>
        <div class="form_carga">
            <form action="insertar_bd2.php" method="POST" enctype="multipart/form-data" class="form">
                <h1 class="titulo">Carga de Registros PP</h1>  

                <div class="inputContainer">
                  <label>Paso Peaton:</label>
                  <select name="pp" id="pan">
                    <option value="pp">Dante Alighieri</option>
                    <option value="pp">Polonia</option>
                    <option value="pp">Lomas de Zamora</option>
                    <option value="pp">Caviglia</option>
                    <option value="pp">Neuquén</option>
                    <option value="pp">Bermejo</option>
                    <option value="pan">J. Ingeniero / Los Andes</option>
                    <option value="pan">Formosa / Alvarez</option>
                    <option value="pan">Lomas de Zamora / Montevideo</option>
                    <option value="pan">Ramella</option>
                    <option value="pan">Dean Funes / Castro Barros</option>
                    <option value="pan">Zapiola / M. Moreno</option>
                    <option value="pan">San Juan / Paso</option>
                    <option value="pan">Alberdi</option>
                    <option value="pan">Alsina / Pallegrini</option>
                    <option value="pan">Estacion Quilmes Punta Norte</option>
                    <option value="pan">Estacion Quilmes Punta Sur</option>
                    <option value="pan">Sgto. Cabral / Calle 11</option>
                    <option value="pan">Estacion Berazategui</option>
                    <option value="pan">Calle 17</option>
                    <option value="pan">Calle 21</option>
                    <option value="pan">Sevilla / Italia / Mujica</option>
                    <option value="pan">Portillo</option>
                    <option Value="pp">Sevilla</option>
                    <option value="pp">Santa Rosa</option>
                    <option value="pp">KM 38.012</option>
                    <option value="pp">KM 38.271</option>
                    <option value="pp">Circunvalacion Sur / Calle 422 Bis</option>
                    <option value="pp">T. García</option>
                    <option value="pp">Calle 505</option>
                    <option value="pp">PP Calle 529</option>
                    <option value="pp">PP Calle 33</option>
                    <option value="pp">PP Calle 34</option>
                    <option value="pp">PP Calle 35</option>
                    <option value="pp">PP Calle 36</option>
                    <option value="pp">PP Calle 37</option>
                    <option value="pp">PP Calle 39</option>
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