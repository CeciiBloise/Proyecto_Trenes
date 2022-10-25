<!DOCTYPE html> <!-- version html5 -->
<html lang="es"> <!-- tipo de lenguaje -->

    <head>
        <meta charset="utf-8" /> <!-- tipos de caracter -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        
        <title> Estacion Quilmes</title> <!-- titulo de la pagina -->
    
    </head>
    <style>
        .contenedor-padre{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            min-height: 100px;
            color: #fff;
            background: grey;
            
        }
        .contenedor-hijo{
            display: block;
            min-width: 50%;
            background-color: black;
            align-items: center;
            height: 100vh;
            justify-content: center;
        }
       
        li{
            list-style-type:none;
        }
        a{         
            border: 1px solid #2e518b; /*anchura, estilo y color borde*/
            padding: 10px; /*espacio alrededor texto*/
            background-color: #2e518b; /*color botón*/
            color: #ffffff; /*color texto*/
            text-transform: uppercase; /*capitalización texto*/
            border-radius: 20px; /*bordes redondos*/
            text-decoration:none;
            display:inline-block;
        }
    </style>
    
    <body>
        <div class="contenedor-padre">
            <div class="contenedor-hijo">
            <nav>
             <ul>
                
                <li><a href="../mecanico/xvx.php">Mecanico</a></li>
                <br>
                <li><a href="">Ficha del personal</a></li>
                <br>
                <li><a href="tabla_crud_registro_con_imagen.php">Tabla de personal</a></li>
             </ul>
           </nav>

            </div>
        </div>
    </body>
</html>