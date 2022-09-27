<?php
//seguridad de seciones pagiancion
session_start();
$varsecion = $_SESSION['usuario'];

if( $varsecion == null || $varsecion == '')
{
    echo "NO TIENES ACCESO";
    die ();
    
}

?>