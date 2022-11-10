<?php
     include("../admi_general/crud_registro_con_imagen/conexion_crud_registro_con_imagen.php");
     $conexion=conectar();


    $sql="SELECT * FROM carga_de_usuarios";
    $query= mysqli_query($conexion,$sql);

    $row=mysqli_fetch_array($query);

    //Si toco alguna flecha entro aca para ordenar
    if(isset($_GET['columna'])){
       $where= " where 1=1";
       $order=" ORDER BY ".$_GET['columna']." ".$_GET['tipo'];
       $sql="SELECT*FROM carga_de_usuarios 
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
        <link rel="stylesheet" href="../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../CSS/estilo_tablas.css"/>
        <script src="https://kit.fontawesome.com/3de4daf040.js" crossorigin="anonymous"></script>
        <!-- Estilos -->
        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav class="navMenu">
      
        <li><a href="../admi_personal/inicio_admi_personal.php" >Inicio</a></li>
        <li><a href="../mecanico/mecanico.php">Mecanico</a></li>
        <li><a href="../../logout.php" >Cerrar Sesion</a></li>
      
       </nav>
    </header>

    <style>
        .navMenu{
             width: 117rem;
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
                <caption>TABLA DE PERSONAL</caption>
                <thead>     
                    <tr>
                        <th scope="row">Legajo</th>
                            <div class="float-right">
                                <!-- Funcionamiento de las flechas -->
                                    <?php if (isset($_GET['columna']) && $_GET['columna'] == 'legajo' && $_GET['tipo'] == 'ASC'): ?>
                                        <i class="fa-sharp fa-solid fa-arrow-up"></i>
                                        <?php else : ?>
                                            <a href="tabla_crud_registro_con_imagen.php?columna=legajo&tipo=asc"><i class="fa-sharp fa-solid fa-arrow-up"></i></a><!-- De A a Z ascendente-->
                                        <?php endif; ?>
                                        <?php if (isset($_GET['columna']) && $_GET['columna'] == 'legajo' && $_GET['tipo'] == 'DESC') : ?>
                                            <i class="fa-sharp fa-solid fa-arrow-down"></i>
                                        <?php else : ?>
                                            <a href="tabla_crud_registro_con_imagen.php?columna=apellido&tipo=desc"><i class="fa-sharp fa-solid fa-arrow-down"></i></a>
                                        <?php endif; ?>
                            </div>
                        <th>Apellido</th>
                             <div class="float-right">
                                    <?php if (isset($_GET['columna']) && $_GET['columna'] == 'apellido' && $_GET['tipo'] == 'ASC'): ?>
                                        <i class="fa-sharp fa-solid fa-arrow-up"></i>
                                        <?php else : ?>
                                            <a href="tabla_crud_registro_con_imagen.php?columna=apellido&tipo=asc"><i class="fa-sharp fa-solid fa-arrow-up"></i></a><!-- De A a Z ascendente-->
                                        <?php endif; ?>
                                        <?php if (isset($_GET['columna']) && $_GET['columna'] == 'apellido' && $_GET['tipo'] == 'DESC') : ?>
                                            <i class="fa-sharp fa-solid fa-arrow-down"></i>
                                        <?php else : ?>
                                            <a href="tabla_crud_registro_con_imagen.php?columna=apellido&tipo=desc"><i class="fa-sharp fa-solid fa-arrow-down"></i></a>
                                        <?php endif; ?>
                            </div>
                        <th>Nombre</th>
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