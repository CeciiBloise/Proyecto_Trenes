<?php
include("../../conexion_registros.php");
$conexion=conectar();

$sql="SELECT*FROM registros_pz_lp";

$query= mysqli_query($conexion,$sql);
?>

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
        <li><a href="../carga_nuevo_pan_pz_lp.php">cargar nuevo pan</a></li>
        <li><a href="../../../../../../logout.php">cerrar sesion</a></li>
      </nav>
    </header>

    <body>
        <div class="form_carga">
            <form action="insertar_bd_pz_lp.php" method="POST" enctype="multipart/form-data" class="form">
                <h1 class="titulo">Carga de Registros PAN</h1>  

                <div class="inputContainer">
                  <label>Paso a Nivel:</label>
                  <select name="pan" id="pan">
                  <option value="0">Seleccione:</option>
                    <?php        
                    foreach($query as $opcion){ 
                    ?>
                    
                        <option value="<?php echo $opcion['pan_pz_lp']; ?>"> <?php echo $opcion['pan_pz_lp']; ?></option>
                    
                    <?php 
                    }
                    ?>
                  </select>
                </div>

                <div class="inputContainer">
                  <label>Año del Registro:</label>
                  <?php
                    $cont = date('Y');
                  ?>
                  <select name="año_pan" id="sel1">
                   <?php while ($cont >= 1950) { ?>
                   <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
                   <?php $cont = ($cont-1); } ?>
                  </select>
          
                </div>

                <div class="inputContainer">
                  <label>Registro:</label> 
                  <input type="file" name="registros_pz_lp[]" id="registros_pz_lp[]" multiple="">
                </div>  

                <div class="boton">
                    <input type="hidden" name="directorio">
                    <input class="boton-subir" type="submit"  value="subir" name="subir">
                </div>
            </form>
          </div>
    </body>
</html>