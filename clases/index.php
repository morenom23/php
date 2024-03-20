<?php

    require_once('./persona.php');

    /*$persona1 = new Persona('Carlos alfredo','Moreno Martinez', 29, 'mmm@gmail.com');
    // $persona1-> setNombre('carlos alfredo');
    // $persona1->apellido = 'Moreno Martinez';
    // $persona1->edad = 29;

    $persona2 = new Persona('andrea maria','Flores Mendoza', 30, 'and@gmail.com');

    // $persona2->nombre = 'andrea maria';
    // $persona2->apellido = 'Flores Mendoza';
    // $persona2->edad = 30;
    echo'Datos de la persona #1 :';
    echo '<br>';
    echo 'Nombre  : '.$persona1->getNombre(); 
    echo "<br>";
    echo 'Apellidos : '.$persona1->apellido;
    echo '<br>';
    echo 'Edad : '.$persona1->edad;
    echo "<br>";
    echo 'Correo : '.$persona1->correo;

    echo "<hr>";
    
    echo'Datos de la persona #2 :';
    echo '<br>';
    echo 'Nombre : '.$persona2->getNombre();
    echo '<br>';
    echo 'Apellidos : '.$persona2->apellido;
    echo '<br>';
    echo 'Edad : '.$persona2->edad;
    echo '<br>';
    echo 'Correo : '.$persona2->correo;*/

    $peruano = new Peruano();
    $peruano->setNombre('Ezequiel');
    $peruano->setApellidos('Moreno', 'Martinez');

    echo "Extendiendo de peruano : ".$peruano->getApellidos();

    echo "<br>";

    $chileno = new Chileno();

    $chileno->setNombre('ezequiel');
    $chileno->setApellidos('Moreno', 'Martinez');

    echo "Modificando los metodos : ". $chileno->getApellidos();

    // var_dump($peruano);
    // var_dump($chileno);
