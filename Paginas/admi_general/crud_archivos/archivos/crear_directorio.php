<?php
  $my_dir = "carpeta";
  if(!is_dir($my_dir)) {
    mkdir($my_dir);
    echo "Se ha creado el directorio $my_dir";
  } else {
    echo "El directorio $my_dir ya existe!";
  }
?>