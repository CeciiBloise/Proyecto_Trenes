<?php
/*ANDA*/
    session_start();
    include("../admi_general/usuarios/conexion_usuario.php");
    $conexion=conectar();
  
    //Validacion de session 
    if (!isset($_SESSION['legajo'])) {
      header("location: ../../../Index.html");
      exit;
    }

    $legajo = $_SESSION['legajo'];
    $sql = "SELECT * FROM usuarios
    INNER JOIN roles ON usuarios.id_rol=roles.id_rol";

    $query = mysqli_query($conexion, $sql);

    //Si toco alguna flecha entro aca para ordenar
    if(isset($_GET['columna'])){
        $columna = mysqli_real_escape_string($conexion, $_GET['columna']);
        $tipo = mysqli_real_escape_string($conexion, $_GET['tipo']);
    
        $where= " where 1=1";
        $order=" ORDER BY ".$columna." ".$tipo;
        $sql="SELECT * FROM usuarios
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
        <title> Trenes Argentinos </title> <!-- titulo de la pagina -->
    </head>

    <style>
        /*ancho del menu*/
        .navMenu{
        width: 160rem; /*Aca hay un error, deberia el menu ajustarse junto con la tabla */
        
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

    <header>
      <nav class="navMenu">
            <li><a href="inicio_personal.php" >Inicio</a></li>
            <li><a href="../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>

    <body>

        <div>
        <form action="tabla_usuario_personal.php" method="POST" class="buscador">
            <input type="text" id="buscar" name="buscar" value="<?php echo isset($_POST['buscar']) ? htmlspecialchars($_POST['buscar'], ENT_QUOTES) : ''; ?>" >    
            <input class="boton" type="submit" value="Buscar">
        </form>

        <?php
        if (isset($_POST['buscar'])) {
            $search_term = mysqli_real_escape_string($conexion, $_POST['buscar']);
            $sql = "SELECT * FROM usuarios 
            INNER JOIN roles ON usuarios.id_rol=roles.id_rol
            WHERE legajo LIKE '%" . $search_term . "%'
            OR apellido LIKE '%" . $search_term . "%'
            OR nombre LIKE '%" . $search_term . "%'
            OR alias LIKE '%" . $search_term . "%'";
            $query = mysqli_query($conexion, $sql);
        }
        ?>
            <table class="content-table">
            <caption><a href="tabla_usuario.php" style="color:black; text-decoration: none;" >TABLA DE PERSONAL</a></caption>
                <thead>     
                    <tr>
                        <th scope="row">Legajo</th>
                        <th>Apellido
                            <div class="float-right">
                                    <?php if (isset($_GET['columna']) && $_GET['columna'] == 'apellido' && $_GET['tipo'] == 'ASC'): ?>
                                        <i class="fa-sharp fa-solid fa-arrow-up"></i>
                                        <?php else : ?>
                                            <a href="tabla_usuario.php?columna=apellido&tipo=asc"><i class="fa-sharp fa-solid fa-arrow-up"></i></a><!-- De A a Z ascendente-->
                                        <?php endif; ?>
                                        <?php if (isset($_GET['columna']) && $_GET['columna'] == 'apellido' && $_GET['tipo'] == 'DESC') : ?>
                                            <i class="fa-sharp fa-solid fa-arrow-down"></i>
                                        <?php else : ?>
                                            <a href="tabla_usuario.php?columna=apellido&tipo=desc"><i class="fa-sharp fa-solid fa-arrow-down"></i></a>
                                        <?php endif; ?>
                            </div>
                        </th>
                        <th>Nombre
                            <div class="float-right">
                                    <?php if (isset($_GET['columna']) && $_GET['columna'] == 'nombre' && $_GET['tipo'] == 'ASC'): ?>
                                        <i class="fa-sharp fa-solid fa-arrow-up"></i>
                                        <?php else : ?>
                                            <a href="tabla_usuario.php?columna=nombre&tipo=asc"><i class="fa-sharp fa-solid fa-arrow-up"></i></a><!-- De A a Z ascendente-->
                                        <?php endif; ?>
                                        <?php if (isset($_GET['columna']) && $_GET['columna'] == 'nombre' && $_GET['tipo'] == 'DESC') : ?>
                                            <i class="fa-sharp fa-solid fa-arrow-down"></i>
                                        <?php else : ?>
                                            <a href="tabla_usuario.php?columna=nombre&tipo=desc"><i class="fa-sharp fa-solid fa-arrow-down"></i></a>
                                        <?php endif; ?>
                            </div>
                        </th>
                        <th>Alias</th>
                        <th nowrap>Puesto</th>
                        <th colspan="1"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                         while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr align="center">
                    <td scope="col"><?php echo $row['legajo']?></td>
                    <td nowrap><?php echo $row['apellido']?></td>
                    <td nowrap><?php echo $row['nombre']?></td>
                    <td nowrap><?php echo $row['alias']?></td>
                    <td><?php echo $row['puesto']?></td>
                    
                    <td><a href="personal_ficha_usuarios.php?id=<?php echo $row['id_usuario']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16"><path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/><path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/></svg></a></td>
                    </tr>
                    <?php
                         }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>