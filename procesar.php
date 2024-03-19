<?php

    #Obteninedo los datos del formulario con la variable global  "$_REQUEST" 

    echo "-----Datos obtenidos desde el formulario----- "."<br> <br>";

    $nombre = $_REQUEST['name'];
    echo'El nombre es : '.$nombre.'';
    echo "<br>";

    $edad = $_REQUEST['edad'];
    echo'Su edad es : '.$edad;
    echo "<br>";

    $sexo = $_REQUEST['sexo'];
    echo'Sexo : '.$sexo;

    $rolex = $_REQUEST['roles'];

    echo "<p>Roles:</p>";
    echo "<ul>";
        foreach($rolex as $rol ) {
            echo "<li>$rol</li>";
            
        }

    echo "</ul>";

    $archivo = $_FILES['imag']; #Obteniendo el archivo desde el input
    $patch = $_SERVER['DOCUMENT_ROOT']. '/php/imagenes'.'/'.$archivo['name']; #Definiendo la ruta y el nombre del archivo

    // echo ''.$patch;

    move_uploaded_file($archivo['tmp_name'], $patch); #Moviendo el archivo a la carpeta que deseo, en este caso en la ruta que tiene la variable "$patch"

    echo '<br>';

    $mensaje = $_REQUEST['mensaje'];
    echo "<p>".$mensaje ."</p>";


    // var_dump( $archivo ); para ver el contenido de la variable que le pase