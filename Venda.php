<?php

    require_once "Humano.php";
    require_once "Animal.php";

    class Venda{

        public $medicacao;
        public $estoqueMedicacao;
        public $quantidade;

        public function __construct($medicacao, $estoqueMedicacao, $quantidade){
            $this->estoqueMedicacao = $estoqueMedicacao;
            $this->medicacao = $medicacao;
            $this->quantidade = $quantidade;
        }

        public function Venda(){

            if($this->estoqueMedicacao >= $this->quantidade){
                $this->estoqueMedicacao -= $this->quantidade;
                echo "Comprou " .$this->quantidade ." ". $this->medicacao . PHP_EOL;
                return true;

            }else{
                echo "Não foi possível fazer a compra devido à falta de estoque" . PHP_EOL;
                return false;
            }

        }

    }