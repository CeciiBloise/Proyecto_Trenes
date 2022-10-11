<?php
//Se guarda paro no ando lo que esta en verde, no se porque
//Obtengo los datos del archivo
if(isset($_POST['subir'])){
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/".$nombre;
    
    if($nombre != ""){
        
        if(copy($ruta, $destino)){
            //echo "Exito";
         /*  $titulo= $_POST['titulo'];
            $descripcion= $_POST['descripcion'];
            $db=new mysql_connect('localhost', 'Proyecto_trenes','');
            $sql= "INSERT INTO pdf(id_documento, titulo, descripcion, tamanio, tipo, nombre_archivo) VALUES ('$titulo', '$descripcion', '$tamanio', '$tipo', '$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }*/
        }
    }else{
        echo "Erros";
    }
}
?> 

<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        
        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    
    </head>
    <body>
        <div style="width: 500px; margin: auto; border: 1px solid black; padding: 30px">
        <h1 style="text-align: center">Carga de PDF</h1>
        <!--form accion="upfile.php" method="POST" enctype="multipart/form-data"-->
        <form acc method="POST" enctype="multipart/form-data"-->
            <table>
                <tr>
                    <td><label>Titulo</label></td>
                    <td><input type="text" name="titulo"></td>
                </tr>
                <tr>
                    <td><label>Descripcion</label></td>
                    <td><textarea name="descripcion"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="file" name="archivo"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="subir" name="subir"></td>
                </tr>
            </table>
        </form>
        </div>
    </body>
</html>