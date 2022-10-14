<?php
     include("conexion_crud.php");
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
        }
        th, td{ 
            padding: 12px 15px;
            text-align: middle;
            font-family: Arial; 
            border-bottom: solid 1px grey;
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
            <a class="nav" href="../../../logout.php" >Cerrar Sesion</a>
      </nav>
    </header>

    <body>
        <header></header>
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
                        <th>Supervisor a cargo</th>
                        <th>Fecha de ingreso a la empresa</th>
                        <!--<th>Foto</th>-->
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                         while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                    <td scope="col"><?php echo $row['legajo']?></td>
                    <td><?php echo $row['apellido']?></td>
                    <td><?php echo $row['nombre']?></td>
                    <td><?php echo $row['dni']?></td>
                    <td><?php echo $row['fecha_de_nacimiento']?></td>
                    <td><?php echo $row['direccion']?></td>
                    <td><?php echo $row['celular']?></td>
                    <td><?php echo $row['mail']?></td>
                    <td><?php echo $row['puesto']?></td>
                    <td><?php echo $row['supervisor_cargo']?></td>
                    <td><?php echo $row['fecha_de_ingreso_a_la_empresa']?></td>
                    <td><a href="actualizar.php?id=<?php echo $row['legajo']?>">Editar</a></td>
                    <td><a href="eliminar.php?id=<?php echo $row['legajo']?>">Eliminar</a></td>
                    </tr>
                    <?php
                         }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>