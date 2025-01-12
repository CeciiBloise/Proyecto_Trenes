<?php
/*Me lista las carpetas*/
session_start();
include("../../../../conexion_y_sesion/conexion.php");
$conexion=conectar();

//Validacion de session 
if (!isset($_SESSION['legajo'])) {
    header("location: ../../../../index.html");
    exit;
  }

$legajo = $_SESSION['legajo'];

$sql="SELECT*FROM manuales";
//$sql= "SELECT MIN(id_manuales) as id_manuales, carpeta FROM manuales GROUP BY carpeta";
$query= mysqli_query($conexion,$sql);

//Si toco alguna flecha entro aca para ordenar
if(isset($_GET['columna'])){
    $columna = mysqli_real_escape_string($conexion, $_GET['columna']);
    $tipo = mysqli_real_escape_string($conexion, $_GET['tipo']);

    $where= " where 1=1";
    $order=" ORDER BY ".$columna." ".$tipo;
    $sql="SELECT * FROM manuales
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
        <!-- Estilos -->
        <link rel="stylesheet" href="../../../../CSS/estilo_menu_horizontal.css"/>
        <link rel="stylesheet" href="../../../../CSS/estilo_tablas.css"/>
        <script src="https://kit.fontawesome.com/3de4daf040.js" crossorigin="anonymous"></script>
        
        <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    </head>

    <script>
        //Alerta eliminar
        function confirmacionEliminar(){
        var respuesta=confirm("¿Estas seguro que deseas eliminar este manual?");
        if(respuesta==true){
          return true;
        }
        else{
          return false;
        }
      }
    </script>

    <header>
      <nav class="navMenu">
      <li><a href="../../mecanico_admi.php" >Inicio</a></li>
            <li><a href="carga_equipo.php">Carga de Manuales</a></li>
            <li><a href="../../../../conexion_y_sesion/logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    <style>
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
        .content-table{
            position: absolute;
            left: 5%;
        }
    </style>
    <body>
        <div>
            <!--Barra buscador-->
        <form action="lista.php" method="POST" class="buscador">
                <input type="text" id="buscar" name="buscar" value="<?php echo isset($_POST['buscar']) ? htmlspecialchars($_POST['buscar'], ENT_QUOTES) : ''; ?>" >    
                <input class="boton" type="submit" value="Buscar">
            </form>

            <?php
                if (isset($_POST['buscar'])) {
                    $search_term = mysqli_real_escape_string($conexion, $_POST['buscar']);
                    $sql = "SELECT * FROM manuales 
                    WHERE carpeta LIKE '%" . $search_term . "%'
                    ";
                    $query = mysqli_query($conexion, $sql);
                }
            ?>
    <table class="content-table">
        <thead>
            <tr>
                <th scope="row"><a href="lista.php" style="color:black; text-decoration: none;" >EQUIPOS</a>
                    <div class="float-right">
                        <!-- Funcionamiento de las flechas -->
                            <?php if (isset($_GET['columna']) && $_GET['columna'] == 'carpeta' && $_GET['tipo'] == 'ASC'): ?>
                                <i class="fa-sharp fa-solid fa-arrow-up"></i>
                            <?php else : ?>
                                <a href="lista.php?columna=carpeta&tipo=asc"><i class="fa-sharp fa-solid fa-arrow-up"></i></a><!-- De A a Z ascendente-->
                            <?php endif; ?>
                            <?php if (isset($_GET['columna']) && $_GET['columna'] == 'carpeta' && $_GET['tipo'] == 'DESC') : ?>                                    <i class="fa-sharp fa-solid fa-arrow-down"></i>
                            <?php else : ?>
                                <a href="lista.php?columna=carpeta&tipo=desc"><i class="fa-sharp fa-solid fa-arrow-down"></i></a>
                            <?php endif; ?>
                    </div>
                </th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_array($query)){ ?>

        <tr align="center">
            <td nowrap scope="col"><?php echo $row['carpeta']?></td>

            <td><a href="ver.php?id=<?php echo $row['id_manuales']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16"><path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/><path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/></svg></a></td>
            <td><a onclick="return confirmacionEliminar()" href="eliminar.php?id=<?php echo $row['id_manuales']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/></svg></a></td>        
        </tr>
        <?php }?>
            </tbody>
        </table>
        </div>  
    </body>
</html>
