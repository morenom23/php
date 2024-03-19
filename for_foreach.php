<?php
    $filas =10;

    for($i = 1; $i < $filas; $i++){
        for($j =1; $j < $i; $j++){
            echo "*";
        }
        
        echo "<br>";
    }


    # foreach para recorrer un arrayn con su indice----------------

    $nombres = ['mario', 'carlos',' jose', 'luis'];

    foreach($nombres as $indice => $nombre){
        echo "El nombre -- $nombre -- se encontraba en el indice $indice"."<br>";
    }

