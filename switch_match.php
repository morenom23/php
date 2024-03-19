
<?php

    $a =4;
    
    // switch($a){
    //     case "1":
    //         echo "Lunes";
    //         break;
    //     case "2":
    //         echo "Martes";
    //         break;
    //     case "3":
    //         echo "Miercoles";
    //         break;
    //     case "4":
    //         echo "Jueves";
    //         break;
    //     case "5":
    //         echo "Viernes";
    //         break;
    //     case "6":
    //         echo "Sabado";
    //         break;
    //     case "7":
    //         echo "Domingo";
    //         break;
    //     default:
    //         echo"La seleccion no es valida";

        
    // }

    #Utilizando MATCH para la mismo ejercicio  .............
    # A PARTIR DE PHP 8 
    echo match($a){
        1 => "Lunes",
        2 => "Martes",
        3 => "Miercoles",
        4 => "Jueves",
        5 => "Viernes",
        6 => "Sabado",
        7 => "Domingo",
        default => "La opcion no es valida."
    };
