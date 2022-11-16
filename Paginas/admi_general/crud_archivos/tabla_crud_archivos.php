<?php
    
    /*
    https://informaticapc.com/tutorial-php/configurar.php#ini

    https://www.configuroweb.com/sistema-gestor-de-archivos-hecho-en-php-y-mysql/ 
    
    https://parzibyte.me/blog/2021/01/27/software-gestor-archivos-nube-php-mysql/

    https://compubinario.com/gestor-de-archivos-en-php-y-mysql/

    https://facultadautodidacta.com/curso/sistema-gestor-de-archivos-con-php-y-mysql

    https://github.com/parzibyte/gestor_archivos_php

    */
    
    
    
    
    include("../crud_registro_con_imagen/conexion_crud_registro_con_imagen.php");
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
        <link rel="stylesheet" href="../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../CSS/estilo_tablas.css"/>
        <script src="https://kit.fontawesome.com/3de4daf040.js" crossorigin="anonymous"></script>
        <!-- Estilos -->
        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav class="navMenu">
            <li><a href="../../admi_general/Inicio.php" >Inicio</a></li>
            
            <li><a href="../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>

    <style>
        /*ancho del menu*/
        .navMenu{
        width: 157rem;
        }
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
            <form accion="buscar.php" method="POST" class="buscador">
                <input type="text" placeholder="" name="buscar">
                <input class="boton" type="submit" value="Buscar">
            </form>
            <table class="content-table">
            <caption>TABLA DE ARCHIVOS</caption>
                <thead>     
                    <tr>
                        <th scope="row">ID
                            <div class="float-right">
                                <!-- Funcionamiento de las flechas -->
                                    <?php if (isset($_GET['columna']) && $_GET['columna'] == 'id_archivo' && $_GET['tipo'] == 'ASC'): ?>
                                        <i class="fa-sharp fa-solid fa-arrow-up"></i>
                                        <?php else : ?>
                                            <a href="tabla_crud_archivos.php?columna=id_archivo&tipo=asc"><i class="fa-sharp fa-solid fa-arrow-up"></i></a><!-- De A a Z ascendente-->
                                        <?php endif; ?>
                                        <?php if (isset($_GET['columna']) && $_GET['columna'] == 'id_archivo' && $_GET['tipo'] == 'DESC') : ?>
                                            <i class="fa-sharp fa-solid fa-arrow-down"></i>
                                        <?php else : ?>
                                            <a href="tabla_crud_registro_con_imagen.php?columna=id_archivo&tipo=desc"><i class="fa-sharp fa-solid fa-arrow-down"></i></a>
                                        <?php endif; ?>
                            </div>
                        </th>
                        <th>Nombre
                            <div class="float-right">
                                    <?php if (isset($_GET['columna']) && $_GET['columna'] == 'nombre' && $_GET['tipo'] == 'ASC'): ?>
                                        <i class="fa-sharp fa-solid fa-arrow-up"></i>
                                        <?php else : ?>
                                            <a href="tabla_crud_registro_con_imagen.php?columna=nombre&tipo=asc"><i class="fa-sharp fa-solid fa-arrow-up"></i></a><!-- De A a Z ascendente-->
                                        <?php endif; ?>
                                        <?php if (isset($_GET['columna']) && $_GET['columna'] == 'nombre' && $_GET['tipo'] == 'DESC') : ?>
                                            <i class="fa-sharp fa-solid fa-arrow-down"></i>
                                        <?php else : ?>
                                            <a href="tabla_crud_registro_con_imagen.php?columna=nombre&tipo=desc"><i class="fa-sharp fa-solid fa-arrow-down"></i></a>
                                        <?php endif; ?>
                            </div>
                        </th>
                        <th>Categoria
                            <div class="float-right">
                                    <?php if (isset($_GET['columna']) && $_GET['columna'] == 'categoria' && $_GET['tipo'] == 'ASC'): ?>
                                        <i class="fa-sharp fa-solid fa-arrow-up"></i>
                                        <?php else : ?>
                                            <a href="tabla_crud_registro_con_imagen.php?columna=categoria&tipo=asc"><i class="fa-sharp fa-solid fa-arrow-up"></i></a><!-- De A a Z ascendente-->
                                        <?php endif; ?>
                                        <?php if (isset($_GET['columna']) && $_GET['columna'] == 'categoria' && $_GET['tipo'] == 'DESC') : ?>
                                            <i class="fa-sharp fa-solid fa-arrow-down"></i>
                                        <?php else : ?>
                                            <a href="tabla_crud_registro_con_imagen.php?columna=categoria&tipo=desc"><i class="fa-sharp fa-solid fa-arrow-down"></i></a>
                                        <?php endif; ?>
                            </div>
                        </th>
                        <th>Fecha</th>
                        <th>Descripcion</th>
                        <th colspan="3">Acciones</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                         while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                    <td scope="col"><?php echo $row['id_archivo']?></td>
                    <td nowrap><?php echo $row['nombre']?></td>
                    <td nowrap><?php echo $row['categoria']?></td>
                    <td><?php echo $row['descripcion']?></td>
                    <td><a href="actualizar_archivos.php?id=<?php echo $row['legajo']?>">Editar</a></td>
                    <td><a href="eliminar_archivos.php?id=<?php echo $row['legajo']?>">Eliminar</a></td>
                    <td><a href="ver_archivo.php?id=<?php echo $row['legajo']?>">Ver</a></td>
                    </tr>
                    <?php
                         }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>