<?php
    class Veiculo{
        private $modelo;
        private $placa;

        public function __set($atributo , $valor){
            $this->$atributo=$valor;
        }
        public function __get($atributo){
            return $this->$atributo;
        }
    }


?>