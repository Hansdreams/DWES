<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio7</title>
    </head>
    <body>
        

        <?php

            $numero1 = 28;
            $numero2 = 18;

            echo "Los numero antes de intercambiar son:<br>";
            echo "primer numero: $numero1 <br>";
            echo "segundo numero: $numero2 <br>";

            $temporal = $numero1;
            $numero1 = $numero2;
            $numero2 = $temporal;

            echo "Los numero despues del intercambio son: <br>";
            echo "primer numero: $numero1 <br>";
            echo "segundo numero: $numero2 <br>";
        ?>

    </body>
<html>