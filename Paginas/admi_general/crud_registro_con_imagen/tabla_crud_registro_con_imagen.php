<?php
     include("conexion_crud_registro_con_imagen.php");
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
        
        <!-- Estilos -->
        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    </head>
    <style>
        .content-table{ 
            border-collapse: collapse; 
           margin: 25px 0;  
            min-width: 150px;
            table-layout:auto;
        }
        th, td{ 
            padding: 12px 15px;
            text-align: middle;
            font-family: Arial; 
            border-bottom: solid 1px grey;
            border: solid 1px grey ;
        }
        th{
             border: solid 1px lightgrey;
        }
        
        tr:nth-child(even){
            background-color:rgba(128, 128, 128, 0.4);
        }
        tr:hover td{
            background-color: #1EBBFA;
        }
        caption{
            font-size: 2em;
            font-family: Arial, Helvetica, sans-serif;
        }
        thead{
            background-color: grey;
            border-bottom: solid 3px black;
        }
    </style>

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
                <thead>     
            <!--<caption>Tabla de Personal</caption>-->
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
                        <th>Fecha de ingreso a la empresa</th>
                        <th>Imagen de Usuario</th>
                        <th colspan="2"></th>
                        
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
                    <td nowrap><?php echo $row['fecha_de_ingreso_a_la_empresa']?></td>
                    <td><?php echo $row['imagen']?></td>
                    <td><a href="actualizar_registro_con_imagen.php?id=<?php echo $row['legajo']?>">Editar</a></td>
                    <td><a href="eliminar_registro_con_imagen.php?id=<?php echo $row['legajo']?>">Eliminar</a></td>
                    <td><a href="ficha_personal.php?id=<? echo $row['legajo']?>">Ver</a></td>
                    </tr>
                    <?php
                         }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>