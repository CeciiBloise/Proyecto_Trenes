<?php

session_start();
// Eliminar todas las sesiones:
session_destroy();


/*if(isset($_GET['cerrar'])) {

    //Vaciamos y destruimos las variables de sesión
    $_POST['usuario'] = NULL;
    $_POST['contraseña'] = NULL;
    unset($_SESSION['usuario']);
    unset($_SESSION['contraseña']);
  
    //Redireccionamos a la pagina index.php
    header('Location: Index.html');
  }*/

  /*
  https://diego.com.es/sesiones-en-php#:~:text=%24_SESSION%20es%20un%20array,mientras%20la%20sesi%C3%B3n%20est%C3%A9%20abierta.*/
?>

