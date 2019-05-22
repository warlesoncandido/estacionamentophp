<?php

    class Usuario{
        public $nome;
        public $email;
        public $senha;

        function __set($atributo,$valor){
            $this->$atributo = $valor;
        }
        function __get($atributo){
            return $this->$atributo;
        }

    }

?>