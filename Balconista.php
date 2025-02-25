<?php

    require_once "Humano.php";

    class Balconista extends Humano{

        public $salario;
        public $cargo;

        public function __construct($nomeHumano, $idade, $endereco, $contato){
            $this->nomeHumano = $nomeHumano;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;
        }

        public function CalculaSalario(){
            
            echo "O salário do balconista " . $this->nomeHumano . " é R$1500" . PHP_EOL;

        }

    }