<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio6</title>
    </head>
    <body>
        

        <?php

            $a = 8;
            $b = 3;
            $c = 5;
            echo "Valores: <br>";
            echo "A = $a <br>";
            echo "B = $b <br>";
            echo "C = $c <br>";

            echo "<br>(A == B) && (C > B): " . (($a == $b) && ($c > $b) ? 'verdadero' : 'falso') . "<br>";
            echo "(A == B) || (B == C): " . (($a == $b) || ($b == $c) ? 'verdadero' : 'falso') . "<br>";
            echo "(B <= C): " . ($b <= $c ? 'verdadero' : 'falso');
      
        ?>

    </body>
<html>