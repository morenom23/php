<?php

    abstract class claseAbstacta{
        abstract protected function getValor();
        abstract public function valorPrefijo($refijo);

        public function imprimir(){
            echo $this->getValor();
        }
    }

    class claseConcreta extends claseAbstacta{
        protected function getValor(){
            return "Clase concreta"."<br>";
        }
        public function valorPrefijo($refijo){

            //Logica del metodo --------

            return($refijo). " Clase conctetass";
        }

    }

    $clase1 = new claseConcreta();
    $clase1->imprimir();
    echo $clase1 ->valorPrefijo("ingresando valor prefijo : ");