<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio4</title>
    </head>
    <body>
        

        <?php

            $nombre = 'Juan';

            

            echo "Información de la variable \"nombre\": ";
            var_dump($nombre);
            echo " \"$nombre\" <br>";

            echo "Contenido de la variable: $nombre <br>";

            $nombre = NULL;

            echo "Después de asignarle un valor nulo: ";

            var_dump($nombre);

        ?>

    </body>
<html>