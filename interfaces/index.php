<?php

   interface iTemplate{
        public function setVariable($name);
        public function getHtml();

    } 

    class template extends iTemplate{

        public function setVariable($name){

        }

        public function getHtml(){

        }
    }

    interface a{
        public function prueba1();

    }

    interface b{
        public function prueba2();

    }

    interface c  extends a, b{
        public function prueba3();
    }

    class d implements c{ //Implementar las interfaces anteriores 
        public function prueba1(){

        }
        public function prueba2(){
            
        }
        public function prueba3(){

        }

    }