<?php

    $array = range(10,20); //definir un rango de numeros

    echo $array[0]."<br>";

    #Saber si un elemento se encuentra dentro de un array---

    $nombres =['Juana', 'Mario', 'Carmen'];
    if (in_array( 'Mario', $nombres)) {
        echo 'El valor buscado se encuentra en el array';

    }else{
        echo 'El valor buscado no se encuentra en el array';
    }

    //Eliminar un elemento del array usamos la funcion "unset"--
    // unset($nombres[1]);