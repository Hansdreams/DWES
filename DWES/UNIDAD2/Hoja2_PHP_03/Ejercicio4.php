<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio4</title>
    </head>
    <body>
        

        <?php

            $primeraFecha = "01-09-2024";
            $segundaFecha = "22-09-2024";

            $fechaUno = new DateTime($primeraFecha);
            $fechaDos = new DateTime($segundaFecha);

            $diasTranscurridos = $fechaUno -> diff($fechaDos);

            echo "Han transcurrido ". $diasTranscurridos->days ." dias entre $primeraFecha y $segundaFecha";

            
        ?>

    </body>
<html>