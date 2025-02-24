<?php

    class Animal{

        public $nome;
        public $raca;
        public $qtdPatas;
        public $cor;
        public $peso;
        public $tamanho;

        function __construct($nome, $raca, $qtdPatas, $cor, $peso, $tamanho){
            $this->nome = $nome;
            $this->raca = $raca;
            $this->qtdPatas = $qtdPatas;
            $this->cor = $cor;
            $this->peso = $peso;
            $this->tamanho = $tamanho;
        }

        public function Falar(){

            return 0;

        }

    }