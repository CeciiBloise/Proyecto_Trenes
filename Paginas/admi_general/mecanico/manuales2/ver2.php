<iframe src="<?php echo $row['carpeta']?>" type="application/pdf" width="100%" height="600px"></iframe>
<?php
include("conexion_manuales.php");
$conexion=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM manuales where id_manuales='$id'";
$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

$carpeta=$row['carpeta'];

$directorio=opendir("pdf_manuales/".$carpeta);

while($elemento=readdir($directorio)){
    if($elemento != '.' && $elemento != '..'){
        if(is_dir($directorio.$elemento)){
            $listar .="<li><a href='$directorio./.$elemento' target='_parent'>$elemento</a></li><br/>";
        }else{
            $listar .="<li><a href='$directorio./.$elemento' target='_parent'>$elemento</a></li><br/>";   
        }
    }
}
?>
<!DOCTYPE html> 
<html lang="es"> 
    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <!-- Estilos -->
        <link rel="stylesheet" href="../../../../CSS/estilo_tablas.css"/>
        
        <title>Trenes Argentinos</title> <!-- titulo de la pagina -->
    </head>

    <header>
      <nav class="navMenu">
      <li><a href="../../mecanico_admi.php" >Inicio</a></li>
            <li><a href="carga_equipos.php">Manuales</a></li>
            <li><a href="ver_contenido.php">Contenido</a></li>
            <li><a href="../../../../logout.php" >Cerrar Sesion</a></li>
      </nav>
    </header>
    <body>
    <table class="content-table">
        <thead>
            <tr>
                <th>Eauipo</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $listar?></td>
            >
        </tr>
        </tbody>
        </table>   
    </body>
</html>