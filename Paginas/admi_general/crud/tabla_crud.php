<?php
     include("conexion_crud.php");
     $conexion=conectar();

     $sql="SELECT * FROM carga_de_usuarios";
     $query= mysqli_query($conexion,$sql);
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
        .style-table { 
            border-collapse: collapse; 
            margin: 25px 0; 
            font-size: 1em; 
            font-family: sans-serif; 
            min-width: 450px; 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); 
        }
        .styled-table thead tr { 
            background-color: black; 
            color: #ffffff; 
            text-align: middle; 
        }
        .styled-table th, .styled-table td { 
            padding: 12px 15px; 
        }
        .styled-table tbody tr { 
            border-bottom: 1px solid #dddddd; 
        } 
        .styled-table tbody tr:nth-of-type(even) { 
            background-color: #f3f3f3; 
        } 
        .styled-table tbody tr:last-of-type { 
            border-bottom: 2px solid #009879; 
        }
    </style>

    <body>
        <div>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Legajo</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>D.N.I</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Direccion</th>
                        <th>Celular</th>
                        <th>Puesto</th>
                        <th>Supervisor a cargo</th>
                        <th>Fecha de ingreso a la empresa</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                         while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                    <th><?php echo $row['legajo']?></th>
                    <th><?php echo $row['apellido']?></th>
                    <th><?php echo $row['nombre']?></th>
                    <th><?php echo $row['dni']?></th>
                    <th><?php echo $row['fecha_de_nacimiento']?></th>
                    <th><?php echo $row['direccion']?></th>
                    <th><?php echo $row['celular']?></th>
                    <th><?php echo $row['puesto']?></th>
                    <th><?php echo $row['supervisor_cargo']?></th>
                    <th><?php echo $row['fecha_de_ingreso_a_la_empresa']?></th>
                    <th><a href="actualizar.php?id=<?php echo $row['legajo']?>">Editar</a></th>
                    <th></th>
                    <th><a href="delete.php?id=<?php echo $row['legajo']?>">Eliminar</a></th>
                    <th></th>
                    </tr>
                    <?php
                         }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>