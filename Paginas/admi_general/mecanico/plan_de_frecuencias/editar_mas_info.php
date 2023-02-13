<?php
  session_start();
    include("conexion_plan_de_frecuencias.php");
    $conexion=conectar();
    //Validacion de session 
    if (!isset($_SESSION['legajo'])) {
    header("location: ../../../Index.html");
    exit;
}

$legajo = $_SESSION['legajo'];

    $id=$_GET['id'];

    $sql="SELECT * FROM  plan_de_frecuencias WHERE id_plan_de_frecuencia='$id'";
    $query= mysqli_query($conexion,$sql);

    $row=mysqli_fetch_array($query);
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
            <li><a href="../../mecanico_admi.php">Inicio</a></li>
            <li><a href="tabla_plan_de_frecuencias.php">Plan de Frecuencias</a></li>
            <li><a href="../../../../logout.php">Cerrar Sesion</a></li>
      </nav>
    </header>

    <script>
      function confirmacion() {
        if (confirm("¿Está seguro de que desea editar esta información?")) {
          return true;
        } else {
          return false;
        }
    }
    </script>

    <body>
        <div class="form_carga">
            <form action="update_plan_de_frecuencias.php" method="POST" enctype="multipart/form-data" class="form">
                <h1 class="titulo">Editar <br> Plan de Frecuencias</h1>  
                <?php
                  $sql="SELECT*FROM plan_de_frecuencias WHERE id_plan_de_frecuencia = ".$_REQUEST['id'];
                  $query = mysqli_query($conexion, $sql);
                  $row = mysqli_fetch_assoc($query);
                ?>
                <div class="inputContainer">
                  <label>Paso a Nivel:</label>
                  <input type="text" name="nombre_paso_nivel" placeholder="Paso a nivel" value="<?php echo $row['nombre_paso_nivel'] ?>" style="width: 268px;" required>
                </div>

                <div class="inputContainer">
                  <label>Frecuencia:</label>
                  <br>
                  <input type="text" name="frecuencia_asc" placeholder="Acendente" value="<?php echo $row['frecuencia_asc'] ?>" required>
                  <input type="text" name="frecuencia_desc" placeholder="Descendente" value="<?php echo $row['frecuencia_desc'] ?>" require>
                </div>

                <div class="inputContainer">
                  <label >Niveles de Señal:</label>
                  <br>
                      <input type="text" name="tension_asc" placeholder="Ascendente" value="<?php echo $row['señal_asc'] ?>" required>
                      <input type="text" name="tension_desc" placeholder="Descendente" value="<?php echo $row['señal_desc'] ?>" required>
                </div>

                <div class="inputContainer">
                  <label >Niveles de Tension:</label>
                  <br>
                      <input type="text" name="tension_asc" placeholder="Ascendente" value="<?php echo $row['tension_asc'] ?>" required>
                      <input type="text" name="tension_desc" placeholder="Descendente" value="<?php echo $row['tension_desc'] ?>" required>

                </div>

               <div class="inputContainer">
                  <label>Filtro:</label>
                  <input type="checkbox" name="filtro[]" value="<?php echo $row['filtro']?>" id="si">Si
                  <input type="checkbox" name="filtro[]" value="<?php echo $row['filtro']?>" id="no">No
                      <br>
                      <label>Su ubicacion es:</label>
                      <input type="text" name="ubicacion" placeholder="ubicaion del filtro" value="<?php echo $row['ubicacion']?>" style="width: 242px;">
                </div>

                <div class="boton">
                    <input class="boton-subir" type="submit"  value="actualizar" name="subir"  onclick="return confirmacion()">
                </div>

            </form>
        </div>
    </body>
</html>