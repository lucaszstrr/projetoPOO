<?php

    require_once "Animal.php";

    class Cachorro extends Animal{

        public function __construct($nome, $raca, $qtdPatas, $cor, $peso, $tamanho){
            $this->nome = $nome;
            $this->raca = $raca;
            $this->qtdPatas = $qtdPatas;
            $this->cor = $cor;
            $this->peso = $peso;
            $this->tamanho = $tamanho;
        }

        public function Falar(){
            
            echo "AuAuAu!" . PHP_EOL;
         
        }

    }
