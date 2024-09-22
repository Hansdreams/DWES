<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio2</title>
    </head>
    <body>
        

        <?php

            $restarDias = 12;

            $fechaActual = date("d-m-Y");

           echo "La fecha actual es : $fechaActual <br>";

           echo "La fecha menos $restarDias dias, es: " . date("d-m-Y",strtotime($fechaActual."- $restarDias days"));

            //otra forma de restar 

            $fechaActual = new DateTime();

            $fechaActual -> modify("-$restarDias days");
           
            echo "<br>La fecha actual menos $restarDias días es: " . $fechaActual->format("d-m-Y");
        ?>

    </body>
<html>