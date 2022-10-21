<?php
     include("conexion_crud_registro_con_imagen.php");
     $conexion=conectar();

     $sql="SELECT * FROM carga_de_usuarios";
     $query= mysqli_query($conexion,$sql);

     $row=mysqli_fetch_assoc($query);


/*http://www.forosdelweb.com/f18/sacar-posicion-numerica-resultados-mysql-386006/*/ 

?>
<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        
        <!-- Estilos -->
        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav>
            <a class="nav" href="../../admi_general/Inicio.php" >Inicio</a>
            <a class="nav" href="crear_registro_con_imagen.php">Registro con imagen</a>
            <a class="nav" href="../../../logout.php" >Cerrar Sesion</a>
      </nav>
    </header>

    <body>
        <div>
            <table class="content-table">
            <caption>Tabla de Personal</caption>
                
                <tbody>
                    <?php
                         while($row=mysqli_fetch_assoc($query)){
                            if($row['id'] == $id) {
                                $posicion = $i;
                            }
                            $i++;
                    ?>
                    <tr>
                    <td>LEGAJO</td><td scope="col"><?php echo $row['legajo']?></td>
                    <td>APELLIDO</td><td nowrap><?php echo $row['apellido']?></td>
                    <td>NOMBRE</td><td nowrap><?php echo $row['nombre']?></td>
                    <td>N</td><td nowrap><?php echo $row['id_usuario']?></td>
                    
                    
                    </tr>
                    <?php

                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>