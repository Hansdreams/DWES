<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio1</title>
    </head>
    <body>
        

        <?php

            // Y : año completo
            // y : año abreviado
            // M : mes en letras (ingle)
            // m : mes en numero
            // D : dia en letras (ingles)
            // d : dia en numero

            //dentro del date poner el formato que requiera
            $fecha = date('d - m - y');

            echo "$fecha <br>";

            //otra forma de sacar fecha
            //estableciendo la zona horaria del lugar
            date_default_timezone_set('America/Lima');

            $fecha = date('d / m / y');

            // H : hora formato 24 horas
            // h : hora formato 12 horas
            // i : minutos
            // s : Segundos
            $hora = date('H : i : s');

            echo "$fecha <br>";
            echo "$hora <br>";

        ?>

    </body>
<html>