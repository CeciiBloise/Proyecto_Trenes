<?php

/* Esto anda, pero me muestra la busqueda en la tabla */
include("conexion_usuario.php");
$conexion=conectar();

$search = $_POST['buscar'];

$where="";
    if(isset($_GET['buscar'])){
        $busqueda=$_GET['buscar'];

        if(isset($_GET['buscar'])){
            $where="WHERE usuarios.legajo "
        }
    }
