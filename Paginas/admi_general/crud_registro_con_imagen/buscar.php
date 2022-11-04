<?php
     include("conexion_crud_registro_con_imagen.php");
     $conexion=conectar();

     $sql="SELECT * FROM carga_de_usuarios";
     $query= mysqli_query($conexion,$sql);

     $row=mysqli_fetch_array($query);

/*
https://www.jose-aguilar.com/blog/search-simple-php/ 
http://ibiblio.org/pub/linux/docs/LuCaS/Manuales-LuCAS/manual_PHP/manual_PHP/mysql/buscador_bd.htm

*/

?>

<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../CSS/estilo_tablas.css"/>
        <!-- Estilos -->
        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav class="navMenu">
            <li><a href="../../admi_general/Inicio.php" >Inicio</a></li>
            <li><a href="crear_registro_con_imagen.php">Registro de usuario</a></li>
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
            <?php
                $busqueda=strtolower($_REQUEST['busqueda']);
                if(empty($busqueda)){
                    header("location: tabla_crud_registro_con_imagen.php");
                }
            ?>
            <form accion="buscar.php" method="get" class="buscador">
                <input type="search" placeholder="" name="buscar" maxlength="10" value="<?php echo $busqueda ?>">
                <input class="boton" type="submit" value="Buscar">
            </form>
            <table class="content-table">
            <caption>TABLA DE PERSONAL</caption>
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
                        <th>Fecha de ingreso a la empresa</th>
                        <th>Rol</th>
                        <th>Contraseña</th>
                        <th>Imagen de Usuario</th>
                        <th colspan="3"></th>
                        
                    </tr>
                </thead>
                <?php
                $sql_registro= mysqli_query($conexion, "SELECT COUNT(*) as total_registro FROM carga_de_usuarios 
                WHERE ( legajo LIKE '%$busqueda%' 
                OR apellido LIKE '%$busqueda%' 
                OR nombre LIKE '%$busqueda%' 
                OR habilitaciones LIKE '%$busqueda%' 
                OR id_cargo LIKE '%$busqueda%') 
                AND id_cargo = 1 ");
                $resultado= mysqli_fetch_array($sql_registro);
                $total_registro= $resultado('total_registro');

                $query=mysqli_query($conexion, "SELECT u.legajo, u.apellido, u.nombre, r.id_cargo
                FROM carga_de_usuarios u
                INNER JOIN legajo r ON u.legajo = r.legajo 
                WHERE ( u.legajo LIKE '%$busqueda%' 
                OR u.apellido LIKE '%$busqueda%' 
                OR u.nombre LIKE '%$busqueda%' 
                OR u.habilitaciones LIKE '%$busqueda%' 
                OR r.id_cargo LIKE '%$busqueda%')
                AND
                id_cargo = 1 ORDER BY u.legajo

                ");
                $resultado=mysqli_num_rows($query);

/*https://www.campusmvp.es/recursos/post/Fundamentos-de-SQL-Consultas-SELECT-multi-tabla-JOIN.aspx */

                ?>
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
                    <td><?php echo $row['id_cargo']?></td>
                    <td><?php echo $row['contraseña']?></td>
                    <td><?php echo $row['imagen']?></td>
                    <td><a href="actualizar_registro_con_imagen.php?id=<?php echo $row['legajo']?>">Editar</a></td>
                    <td><a href="eliminar_registro_con_imagen.php?id=<?php echo $row['legajo']?>">Eliminar</a></td>
                    <td><a href="ficha_personal_con_imagen.php?id=<?php echo $row['legajo']?>">Ver</a></td>
                    </tr>
                    <?php
                         }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>