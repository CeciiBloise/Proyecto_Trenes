<?php
    $msg = null;
    if(isset($_POST['directorio'])){
        $carpeta=htmlspecialchars($_POST['carpeta']);
        $ruta="manuales_pdf/";
        $directorios_ = $ruta.$carpeta;
    }
    //verificacion de existencia del directorio
    if(!file_exists($directorios_)){
         $crear=mkdir($directorios_, 0777, true);
         if($crear){
            $msg="Directorio creado corectamente";
         }else{
            $msg="A ocurrido un error al crear el directorio";
         }
    }
    else{
        $msg="El directorio que intentas crear ya existe";
    }


?>
<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../../CSS/estilo_carga.css"/>

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
            <li><a href="../../mecanico_admi.php" >Inicio</a></li>
            <li><a href="lista_de_manuales.php">Manuales</a></li>
            <li><a href="../../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    <body>
        <div class="form_carga">
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
                <h1 class="titulo">Crear carpeta</h1>  

                <div class="inputContainer">
                  <label>Nombre:</label>
                  <input type="text" name="carpeta">
                </div> 

                <div class="boton">
                <input type="hidden" name="directorio">
                <input class="boton-subir" type="submit"  value="crear">
                </div>
            </form>
        </div>
        <strong><?php echo $msg ?></strong>
    </body>
</html>