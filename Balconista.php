<?php

    require_once "Humano.php";

    class Balconista extends Humano{

        public $salario;
        public $cargo;

        public function __construct($nomeHumano, $idade, $endereco, $contato, $cargo){
            $this->nomeHumano = $nomeHumano;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;
            $this->cargo = $cargo;
        }

        public function CalculaSalario(){
            
            echo "O salário do balconista " . $this->nomeHumano . " é R$1518" . PHP_EOL;

        }

    }