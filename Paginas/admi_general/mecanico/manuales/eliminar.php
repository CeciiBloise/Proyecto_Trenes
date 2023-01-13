<?php

///ELIMINA LA CARPETA PERO COMO EL NOMBRE DE LA CARPETA SE REPITE NO ME DEJA ELIMINARLO

https://informaticapc.com/tutorial-php/manejo-de-archivos.php#enviar

include("conexion_manuales.php");
$conexion=conectar();

$id=$_GET['id'];

$sql="SELECT carpeta FROM manuales";
$query= mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);

function eliminar_directorio_recursivamente($ruta)
{
    if (is_dir($ruta)) {

        #Obtener un arreglo con directorios y archivos
        $subdirectorios_o_archivos = scandir($ruta);
        foreach ($subdirectorios_o_archivos as $subdirectorio_o_archivo) {

            # Omitir . y .., pues son directorios
            # que se refieren al directorio actual
            # o al directorio padre
            if ($subdirectorio_o_archivo != "." && $subdirectorio_o_archivo != "..") {

                # Si es un directorio, recursión
                if (is_dir($ruta . "/" . $subdirectorio_o_archivo)) {
                    eliminar_directorio_recursivamente($ruta . "/" . $subdirectorio_o_archivo);
                } else {
                    # Si es un archivo, lo eliminamos con unlink
                    unlink($ruta . "/" . $subdirectorio_o_archivo);
                }

            }
        }
        # Al final de todo, el directorio estará vacío
        # y podremos usar rmdir
        rmdir($ruta);
    }
}
$carpeta=$row['carpeta'];
$ruta_directorio =$carpeta."/";
eliminar_directorio_recursivamente($ruta_directorio);
header("Location: lista.php");



?>

