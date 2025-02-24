<?php

    require_once "Humano.php";

    class Vendedor extends Humano{

        public $salario;
        public $cargo;
        public $qtdVendas;

        public function __construct($nomeHumano, $idade, $endereco, $contato, $cargo, $qtdVendas){
            $this->nomeHumano = $nomeHumano;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;
            $this->cargo = $cargo;
            $this->qtdVendas = $qtdVendas;

        }

        public function CalculaSalario(){
            
            if($this->cargo === 'vendedor'){
                echo "O salário do vendedor " . $this->nomeHumano . " é de R$" . 2000 + $this->qtdVendas * 15 . PHP_EOL;
            }

        }

    }