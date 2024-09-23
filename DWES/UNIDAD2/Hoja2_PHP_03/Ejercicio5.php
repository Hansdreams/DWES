<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio5</title>
    </head>
    <body>
        

        <?php

            $fechaInicial = "22-09-2024 21:36:00";
            $horaAsumar = 2;

            $fecha = new DateTime($fechaInicial);

            $fecha -> modify("+$horaAsumar hours");

            echo "La fecha inicial es: $fechaInicial , despues de sumar $horaAsumar horas, son: ". $fecha->format('d-m-Y H:i:s') ;
      
        ?>

    </body>
<html>