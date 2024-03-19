<?php

    //  $a = 1;

    for ($a =1 ; $a <= 10; $a++){
        echo $a ."<br>";
    }

    $b = 1;
    while($b <=7){

        echo "Hola mundo $b "."<br>";
        $b++;

    }

    "<br>";

    $c = 8;
    
    do{
        echo "Utilizando do-while $c "."<br>";
        $c++;

    }while($c <= 10);

    echo "Has salido del ciclo"."<br>";

    #Ejercicio practico -------------

    $n1 = 2;
    $n2 = 5;
    $resultado = 1;
    $i =1;


    #utilizando while para elevar $n1 a $n2 -----------
    // while($i <= $n2){
    //     $resultado = $resultado * $n1;
    //     $i++;
    // }
    
    // echo "El valor de $n1 elevado a la $n2 es =  $resultado"."<br>";

    #utilizando do - while para elevar $n1 a $n2 -----------
    do{
        $resultado = $resultado * $n1;
        $i++;
        echo "El resultado es $resultado"."<br>";

    }while($i <= $n2);

    echo "Aqui finaliza el ciclo";

    