<?php

   declare(strict_types= 1); #Restringir para que solo reciba datos del tipo definido por ej: en la funcion

   function sumarEntero(int $num1, int $num2):int // "int | float" al final para decir el tipo de dato como resultado
   {
        return $num1 + $num2;
   }

   $resultado = sumarEntero(8, 5);
   echo $resultado; 
   
