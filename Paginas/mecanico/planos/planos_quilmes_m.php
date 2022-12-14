<?php
    include("../../admi_general/crud_registro_con_imagen/conexion_crud_registro_con_imagen.php");
     $conexion=conectar();


    $sql="SELECT * FROM archivos";
    $query= mysqli_query($conexion,$sql);

    $row=mysqli_fetch_array($query);

    //Si toco alguna flecha entro aca para ordenar
    if(isset($_GET['columna'])){
       $where= " where 1=1";
       $order=" ORDER BY ".$_GET['columna']." ".$_GET['tipo'];
       $sql="SELECT*FROM archivos 
       $where
       $order
       ;
       ";
       $query= mysqli_query($conexion,$sql);
    }
?>

<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../../../CSS/estilo_tablas.css"/>
        <script src="https://kit.fontawesome.com/3de4daf040.js" crossorigin="anonymous"></script>
        <!-- Estilos -->
        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav class="navMenu">
            <li><a href="../inicio_planos.php" >Inicio</a></li>
            <li><a href="../../../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>

    <style>
        /*ancho del menu*/
       /* .navMenu{
        width: 157rem;
        }*/
                /*Barra Buscador*/
        .buscador input[type=search]{
            width:300px;
            height:25px;
            border-radius:5px;
            border-color: #5D6D7E;
        }
          
        .buscador{
            /*float:right;*/
            margin:7px;
        }
          
        .boton{
            background-color: #5D6D7E;
            color: white;
            /*float: right;*/
            padding: 5px 10px;
            margin-right: 16px;
            font-size: 30px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
    </style>

    <body>

        <div>
            <!--Barra buscador-->
            <form accion="buscar.php" method="POST" class="buscador">
                <input type="text" placeholder="" name="buscar">
                <input class="boton" type="submit" value="Buscar">
            </form>

            <table class="content-table">
            <caption>PLANOS</caption>
                <thead>     
                    <tr>
                        <th scope="row">ID</th>

                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Fecha de carga</th>
                        <th colspan="4">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                         while($row=mysqli_fetch_assoc($query)){ /*El assoc lo combierte en un arreglo asociativo*/
                    ?>
                    <tr>
                    <td scope="col"><?php echo $row['id_archivo']?></td>
                    <td nowrap><?php echo $row['nombre_archivo']?></td>
                    <td><?php echo $row['descripcion']?></td>
                    <td><?php echo $row['fecha_creacion']?></td>

                    <td><a href="ver_archivo.php?id=<?php echo $row['id_archivo']?>">Ver</a></td>
                    <td><a href="descargar_archivo.php?id=<?php echo $row['id_archivo']?>">Descarga</a></td>

                    </tr>
                    <?php
                         }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>