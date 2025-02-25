<?php

    require_once "Humano.php";
    require_once "Animal.php";

    class Venda {

        public $humano;
        public $produtos = [];
        public $estoqueMedicacao;
    
        public function __construct(Humano $humano, $estoqueMedicacao) {
            $this->humano = $humano;
            $this->estoqueMedicacao = $estoqueMedicacao;
        }
    
        public function adicionarProduto($medicacao, $quantidade) {
            $this->produtos[] = [
                'medicacao' => $medicacao,
                'quantidade' => $quantidade
            ];
            echo "Adicionado ao pedido: $quantidade unidades de $medicacao." . PHP_EOL;
        }
    
        public function finalizarPedido() {
    
            foreach ($this->produtos as $produto) {
                $medicacao = $produto['medicacao'];
                $quantidade = $produto['quantidade'];
    
                if ($this->estoqueMedicacao >= $quantidade) {
                    $this->estoqueMedicacao -= $quantidade;
                    echo "Venda realizada: $quantidade unidades de $medicacao." . PHP_EOL;
                } else {
                    echo "Não foi possível vender $quantidade unidades de $medicacao. Estoque insuficiente." . PHP_EOL;
                }
            }
    
            $this->produtos = [];
            echo "Pedido finalizado!" . PHP_EOL;
        }

    }
    