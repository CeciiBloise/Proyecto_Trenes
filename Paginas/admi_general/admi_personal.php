<?php
    session_start();
    include("usuarios/conexion_usuario.php");
    $conexion=conectar();
  
    //Validacion de session 
    if (!isset($_SESSION['legajo'])) {
      header("location: ../../../Index.html");
      exit;
    }

    $legajo = $_SESSION['legajo'];
    $sql = "SELECT * FROM usuarios";
    $query = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
        <link rel="stylesheet" href="../../CSS/estilo_menuPrincipal.css"/>

        <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    
    </head>
    <body>
      
               <nav class="menuPrincipal">
                        <li><a href="Inicio.php">Volver al inicio</a></li>

                        <li><a href="../admi_general/usuarios/crear_usuario.php">Registar usuario</a></li>
                        
                        <li><a href="../admi_general/usuarios/tabla_usuario.php">Tabla de personal</a></li>
                        
                        <li><a href="../../logout.php">Cerrar Sesion</a></li>
                    </ul>
                </nav>
          
    </body>
</html>