<?php
     include("../admi_general/crud_registro_con_imagen/conexion_crud_registro_con_imagen.php");
     $conexion=conectar();

     $sql="SELECT * FROM carga_de_usuarios";
     $query= mysqli_query($conexion,$sql);

     $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../CSS/estilo_tablas.css"/>
        <!-- Estilos -->
        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    </head>

    <style>
        .navMenu{
             width: 117rem;
        }
    </style>

    <header>
      <nav class="navMenu">
      
        <li><a href="../admi_personal/inicio_admi_personal.php" >Inicio</a></li>
        <li><a href="../mecanico/mecanico.php">Mecanico</a></li>
        <li><a href="../../logout.php" >Cerrar Sesion</a></li>
      
       </nav>
    </header>

    <body>
        <div>
            <table class="content-table">
                <caption>Tabla de Personal</caption>
                <thead>     
                    <tr>
                        <th scope="row">Legajo</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>D.N.I</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Direccion</th>
                        <th>Celular</th>
                        <th>Correo Electronico</th>
                        <th>Puesto</th>
                        <th>Habilitaciones</th>
                        <th>Supervisor</th>
                        <th colspan="1"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                         while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                    <td scope="col"><?php echo $row['legajo']?></td>
                    <td nowrap><?php echo $row['apellido']?></td>
                    <td nowrap><?php echo $row['nombre']?></td>
                    <td><?php echo $row['dni']?></td>
                    <td><?php echo $row['fecha_de_nacimiento']?></td>
                    <td nowrap><?php echo $row['direccion']?></td>
                    <td><?php echo $row['celular']?></td>
                    <td><?php echo $row['mail']?></td>
                    <td><?php echo $row['puesto']?></td>
                    <td nowrap><?php echo $row['habilitaciones']?></td>
                    <td nowrap><?php echo $row['supervisor_cargo']?></td>

                    <td><a href="ficha_personal_ap.php?id=<?php echo $row['legajo']?>">Ver</a></td>
                    </tr>
                    <?php
                         }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>