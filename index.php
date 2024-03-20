<?php
    //Otra forma de usar el namespace y que traiga los require_once automatico..
    
    // use carpeta1\humano;
    // use carpeta2\humano;

    require_once ('carpeta1/humano.php');
    require_once ('carpeta2/humano.php');

    // spl_autoload_register(function ($clase) {
    //     require_once str_replace('\\','/', $clase) .'php';

    // });

    $humano1 = new carpeta1\humano;
    $humano1->saludar();
