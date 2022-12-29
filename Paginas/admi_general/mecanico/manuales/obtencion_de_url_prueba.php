<?php
include("conexion_manuales.php");
$conexion=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM manuales where id_manuales='$id'";
$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

$directorio=opendir($row['carpeta']);

while($elemento=readdir($directorio)){
    if($elemento != '.' && $elemento != '..'){
        if(is_dir($directorio.$elemento)){
            $listar .="<li><a href='$directorio/$elemento' target='_parent'>$elemento</a></li>";
        }else{
            $listar .="<li><a href='$directorio/$elemento' target='_parent'>$elemento</a></li>";   
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
    <h1>Documentos</h1>
    <?php echo $listar ?>
    </body>

</html>

<?php

function salida_archivos($ruta){
    if(file_exists($ruta) && is_dir($ruta)){

        $resultado = scandir($ruta);

        $archivos= array_diff($resultado, array('.','..'));

        if(count($archivos)>0){
            foreach($archivos as $archivos){ //el primero es el indice, el segundo es el valor
                    if(is_file($ruta)){
                        echo $archivos."</br>";
                    }else if(is_dir("$ruta/$archivos")){
                        salida_archivos("$ruta/$ruta");
                    }
            }
        }else{
            echo "sin archivos";
        }
    }else{
        echo "El directorio no existe";
    }
}

salida_archivos("")

?>