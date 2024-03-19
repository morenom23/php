<?php

    function valoracion($nombre, $rating =5){ #Le asigno un valor por defecto por si no se ingresa un valor.
        echo "El $nombre tiene un raiting de $rating"."<br>";
    }

    valoracion("Curso PHP desde cero"); # Pasandole argumentos a la funcion


    $a = 5;
    $b = 5;

    $resultado;

    $resultado = $a > $b ? 'Mayor' : ($a < $b ? 'Menor' : 'Igual' ); #Operador ternario ----------

    echo $resultado;

    