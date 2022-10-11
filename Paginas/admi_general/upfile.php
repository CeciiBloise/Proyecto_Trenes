
<?php

//echo $_FILES['archivo']['nombre'];
//Conexicion base de datos
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyecto_trenes"; //nombre de la base de datos

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//Condicional por si no hay conexion que muestre el error
if(!$conexion){
    die("NO HAY CONEXION" .mysqli_connect_error());
}

//Obtengo los datos del archivo
$nombre = $_FILES['archivo']['name'];
$tipo = $_FILES['archivo']['type'];
$tamanio = $_FILES['archivo']['size'];
$ruta = $_FILES['archivo']['tmp_name'];//archivo temporario
$destino = "archivos/".$nombre;

if(isset($_POST['subir'])){
    if($nombre != ""){
        if(copy($ruta, $destino)){
            //echo "Exito";
            $titulo= $_POST['titulo'];
            $descripcion= $_POST['descripcion'];
            $db=new Conect_MySql();
            $sql= "INSERT INTO pdf(id_documento, titulo, descripcion, tamanio, tipo, nombre_archivo) VALUES ('$titulo', '$descripcion', '$tamanio', '$tipo', '$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        }
    }else{
        echo "Erros";
    }
?>