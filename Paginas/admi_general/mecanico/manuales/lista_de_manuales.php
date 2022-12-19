<?php
    include("conexion_manuales.php");

     $conexion=conectar();


    $sql="SELECT * FROM manuales";
    $query= mysqli_query($conexion,$sql);

    $row=mysqli_fetch_array($query);

    //Si toco alguna flecha entro aca para ordenar
    if(isset($_GET['columna'])){
       $where= " where 1=1";
       $order=" ORDER BY ".$_GET['columna']." ".$_GET['tipo'];
       $sql="SELECT*FROM manuales 
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
        <link rel="stylesheet" href="../../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../../CSS/estilo_tablas.css"/>
        <script src="https://kit.fontawesome.com/3de4daf040.js" crossorigin="anonymous"></script>
        <!-- Estilos -->
        <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav class="navMenu">
            <li><a href="../../mecanico_admi.php" >Inicio</a></li>
            <li><a href="crear_carpeta_manuales.php">Crear Carpeta</a></li>
            <li><a href="../../../../logout.php" >Cerrar Sesion</a></li>
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
            <caption>MANUALES</caption>
                <thead>     
                    <tr>
                        <th scope="row">Nombre
                            <div class="float-right">
                                <!-- Funcionamiento de las flechas -->
                                    <?php if (isset($_GET['columna']) && $_GET['columna'] == 'nombre_manuales' && $_GET['tipo'] == 'ASC'): ?>
                                        <i class="fa-sharp fa-solid fa-arrow-up"></i>
                                        <?php else : ?>
                                            <a href="lista_de_manuales.php?columna=nombre_manuales&tipo=asc"><i class="fa-sharp fa-solid fa-arrow-up"></i></a><!-- De A a Z ascendente-->
                                        <?php endif; ?>
                                        <?php if (isset($_GET['columna']) && $_GET['columna'] == 'nombre_manuales' && $_GET['tipo'] == 'DESC') : ?>
                                            <i class="fa-sharp fa-solid fa-arrow-down"></i>
                                        <?php else : ?>
                                            <a href="lista_de_manuales.php?columna=nombre_manuales&tipo=desc"><i class="fa-sharp fa-solid fa-arrow-down"></i></a>
                                        <?php endif; ?>
                            </div>
                        </th>
                       
                        <th>Archivo</th>
                        
                        <th colspan="2">Acciones</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                         while($row=mysqli_fetch_array($query)){ /*El assoc lo combierte en un arreglo asociativo*/
                    ?>
                    <tr>
                    <td nowrap scope="col"><?php echo $row['nombre_manuales']?></td>
                    <td><?php echo $row['manuales']?></td>


                    <td><a href="eliminar_manuales.php?id=<?php echo $row['id_manuales']?>">Eliminar</a></td>
                    <td><a href="ver_manuales.php?id=<?php echo $row['id_manuales']?>">Ver</a></td>

                    </tr>
                    <?php
                         }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>