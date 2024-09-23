<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio8</title>
    </head>
    <body>
        

        <?php

            $cantidad = 67;
            
            $billetesDeDiez = intdiv($cantidad,10);
            $resto = $cantidad % 10;

            $billetesDeCinco = intdiv($resto,5);
            $resto = $resto % 5;

            $monedasDeUno = $resto;

            echo "Cantidad: $cantidad € <br>";
            echo "Cantidad de billetes de 10€: $billetesDeDiez <br>";
            echo "Cantidad de billetes de 5€: $billetesDeCinco <br>";
            echo "Cantidad de monedas de 1€: $monedasDeUno";

        ?>

    </body>
<html>