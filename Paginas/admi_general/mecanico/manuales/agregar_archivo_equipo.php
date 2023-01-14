<?php
$sql="UPDATE carga_de_usuarios SET apellido='$apellido',nombre='$nombre',dni='$dni',fecha_de_nacimiento='$fecha_de_nacimiento',direccion='$direccion',celular='$celular',mail='$mail',puesto='$puesto',habilitaciones='$habilitaciones',supervisor_cargo='$supervisor',fecha_de_ingreso_a_la_empresa='$fecha_de_ingreso',id_cargo='$rol',contraseña='$contraseña',imagen='$imagen_usuario' WHERE legajo='$legajo'";

$query=mysqli_query($conexion,$sql);

?>