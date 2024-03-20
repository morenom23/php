<?php

    class persona{
        public $nombre,  $edad, $correo;
        public $apellido1, $apellido2;


        /*public function __construct($nombre,$apellido,$edad, $correo){
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->edad=$edad;
            $this->correo=$correo;
            
        }*/

        public function setNombre($nombre){
            $this->nombre = strtolower($nombre); #pasar todo en minusculas 
        }

        public function getNombre(){
            return ucwords($this->nombre); #Recibir la primera letra de cada palabra en mayuscula
        }

        public function setApellidos($apellido1, $apellido2){
            $this->apellido1 = ($apellido1);
            $this->apellido2 = ($apellido2);
        }

        public function getApellidos(){
            return $this->apellido1 ." ". $this->apellido2;
        }

    }

    class peruano extends persona{
       public $ciudad , $departamento;

       // Extends metodos -- aquí puedo modificar tambien si lo requiero..
       public function setApellidos($apellido1, $apellido2)
       {
         parent::setApellidos($apellido1, $apellido2);

         echo "Los apellidos se asignaron con éxito : >>>> Este mensaje viene de una extension de metodos" ."<br>";
       }

    }

    class chileno extends persona{
        public $comuna, $region;

        //sobre escribir metodos 

        public function setApellidos($apellido1, $apellido2){
            $this->apellido1 = ($apellido2);
            $this->apellido2 = ($apellido1);
        }

    }