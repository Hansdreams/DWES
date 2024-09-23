<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio5</title>
    </head>
    <body>
        

        <?php

            $temporal = "juan";

            echo "El tipo de 'juan' es: ";
            echo gettype($temporal);
            echo "<br>";

            echo 'El tipo de \'juan\' es:' . gettype($temporal) . "<br>";

            $temporal = 3.14;
            echo "El tipo de 3.14 es: " . gettype($temporal) . "<br>";

            $temporal = false;
            echo "El tipo de false es: " . gettype($temporal) . "<br>";

            $temporal = 3;
            echo "El tipo de 3 es: " . gettype($temporal) . "<br>";

            $temporal = null;
            echo "El tipo de null es: " . gettype($temporal) . "<br>";

        ?>

    </body>
<html>