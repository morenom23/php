<?php

    class persona{
        public $nombre, $apellido, $edad, $correo;


        public function __construct($nombre,$apellido,$edad, $correo){
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->edad=$edad;
            $this->correo=$correo;
            
        }

        public function setNombre($nombre){
            $this->nombre = strtolower($nombre); #pasar todo en minusculas
        }

        public function getNombre(){
            return ucwords($this->nombre); #Recibir la primera letra de cada palabra en mayuscula
        }

    }
    