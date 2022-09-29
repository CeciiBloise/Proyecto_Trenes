<?php

if(isset($_GET['cerrar'])) {

    //Vaciamos y destruimos las variables de sesión
    $_POST['usuario'] = NULL;
    $_POST['contraseña'] = NULL;
    unset($_SESSION['usuario']);
    unset($_SESSION['nombreuser']);
  
    //Redireccionamos a la pagina index.php
    header('Location: index.php');
  }
?>