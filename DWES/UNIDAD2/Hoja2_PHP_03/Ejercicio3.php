<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio3</title>
    </head>
    <body>
        

        <?php

            $dia = 22;
            $mes = 9;
            $anio = 2024;

            if (checkdate($mes,$dia,$anio)){
                echo "La fecha $dia-$mes-$anio es valida";
            }else{
                echo "La fecha $dia-$mes-$anio no es valida";
            }

            
        ?>

    </body>
<html>