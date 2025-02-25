<?php

    require_once "Cachorro.php";

    class Animal{

        public $nome;
        public $tipo;
        public $raca;
        public $qtdPatas;
        public $cor;
        public $peso;
        public $tamanho;

        function __construct($nome, $tipo, $raca){
            $this->nome = $nome;
            $this->tipo = $tipo;
            $this->raca = $raca;          
        }

        public function Falar(){

            return 0;

        }

    }
    