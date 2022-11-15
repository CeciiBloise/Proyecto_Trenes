<?php 
    include "../crud_registro_con_imagen/conexion_crud_registro_con_imagen.php";
    $conexion=conectar();

    $sql="SELECT * FROM archivos";
    $query= mysqli_query($conexion,$sql);

    $row=mysqli_fetch_array($query);

    $id=$_GET['id'];
    
    $tipo=$datos['tipo'];
    $categoria=$datos['categoria'];
    $nombre=$datos['nombre'];
    $archivo=$datos['archivo'];
    $valor_tipo="Content-type:$tipo";
    header("Content-type:$tipo");
    header("Content-Disposition:inline;filename=$nombre.$categoria");
    echo $archivo;
?>
