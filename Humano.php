<?php

    require_once "Animal.php";
    require_once "Cachorro.php";
    require_once "Gato.php";
    require_once "Passaro.php";


    class Humano{

        public $nomeHumano;
        public $idade;
        public $endereco;
        public $contato;

        public function __construct($nomeHumano, $idade, $endereco, $contato){
            $this->nomeHumano = $nomeHumano;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;
        }

    }