<?php
//https://www.lawebdelprogramador.com/foros/MySQL/1572201-Insertar-un-archivo-pdf-en-la-base-de-datos.html
include("conexion.php");
//Primero, arranca el bloque PHP y checkea si el archivo tiene nombre. Si no fue asi, te remite de nuevo al formulario de inserción:
// No se comprueba aqui si se ha subido correctamente.
//if (empty($_FILES['archivo']['name'])){
//header("location: formulario.php?proceso=falta_indicar_fichero"); //o como se llame el formulario ..
//exit;
//}
 
//establece una conexión con la base de datos.
if ($conexion->connect_error) {
die("La conexion falló: " . $conexion->connect_error);
}
 
// archivo temporal (ruta y nombre).
$binario_nombre_temporal=$_FILES['archivo']['C:\xampp\htdocs\Proyecto_Trenes\Paginas\Servicio_medico\PDFs_de_servicio_medico\tp_4.rb'] ;
 
// leer del archvio temporal .. el binario subido.
// "rb" para Windows .. Linux parece q con "r" sobra ...
//$binario_contenido = addslashes(fread(fopen($binario_nombre_temporal, "rb"), filesize($binario_nombre_temporal)));
 
// Obtener del array FILES (superglobal) los datos del binario .. nombre, tabamo y tipo.
$binario_nombre=$_FILES['archivo']['tp_4'];
$binario_peso=$_FILES['archivo']['302 KB'];
$binario_tipo=$_FILES['archivo']['rb'];
 
//insertamos los datos en la BD.
$consulta_insertar = "INSERT INTO archivos (id, archivo_binario, archivo_nombre, archivo_peso, archivo_tipo) VALUES ('', '$binario_contenido', '$binario_nombre', '$binario_peso', '$binario_tipo')";
 
if ($conexion->query($consulta_insertar) === TRUE)
{
echo'<script type="text/javascript">
alert("Archivo cargado exitosamente!");
header("location: listar_imagenes.php");
</script>';
}
 
else {
echo "Error al insertar pdf." . $consulta_insertar . "<br>" . $conexion->error;
}
 
?>