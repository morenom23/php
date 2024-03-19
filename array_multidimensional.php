<?php

    $datos =[
        [
            'nombre' => 'Ezequiel Moreno',
            'pais' => 'Colombia',
            'ciudad' => 'Medellin',
            'telefono' => '3002322212',
            'direccion' => [
                'local' => 'cr 23 # 23-30A',
                'email' => 'morenoestudio22@gmail.com'
            ]
            ],

            [
                'nombre'=> 'Juan David',
                'pais'=> 'Mexico',
                'ciudad'=> 'Guadalajara'
            ],

            [
                'nombre'=> 'Juliana Mejia',
                'pais'=> 'Peru',
                'ciudad'=> 'Lima'
            ]

    ];

 
    # Acceder a un array dentro de otro array --------

    echo "En el primer elemento: ".$datos[0]['direccion']['local']."<br>";
    echo "En el segundo elemento: ". $datos[1]['pais']."<br>";
    echo "<hr>";
    
    foreach ($datos as $item ) { # Traer todos los nombre de los array
        echo $item ['nombre'].'<br>';
        echo $item ['pais'].'<br>';
        echo $item ['ciudad'].'<br>';

        echo "<hr>";
    }

