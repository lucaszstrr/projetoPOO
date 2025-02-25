<?php

    require_once "Humano.php";

    class Veterinario extends Humano{

        public $salario;
        public $cargo;
        public $animaisDoMes;

        public function __construct($nomeHumano, $idade, $endereco, $contato, $animaisDoMes){
            $this->nomeHumano = $nomeHumano;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;
            $this->animaisDoMes = $animaisDoMes;
        }

        public function CalculaSalario(){
            
            echo "O salário do veterinario " . $this->nomeHumano . " é de R$" . 4000 + $this->animaisDoMes * 100 . PHP_EOL;
            
        }


    }
    