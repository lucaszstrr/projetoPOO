<?php

    require_once "Animal.php";
    require_once "Cachorro.php";
    require_once "Gato.php";
    require_once "Passaro.php";
    require_once "Humano.php";
    require_once "Balconista.php";
    require_once "Vendedor.php";
    require_once "Veterinario.php";
    require_once "Venda.php";

    echo PHP_EOL;
    echo "------------ANIMAIS E SEUS DONOS------------" . PHP_EOL;

    $cachorro = new Cachorro('Rex', 'caramelo', 4, 'caramelo', '15', 'medio');
    $cachorro->Falar();
    $humano1 = new Humano('Thiago', 25, 'Rua 4', '12345678', $cachorro->nome);
    $humano1->Identificacao();
    $vendaThiago = new Venda($humano1, 100);
    $vendaThiago->adicionarProduto("Antipulgas", 2);
    $vendaThiago->finalizarPedido();


    echo PHP_EOL;
    echo "-------------------------------------------" . PHP_EOL;
    echo PHP_EOL;


    $gato = new Gato('Max', 'persa', 4, 'branco', '7', 'medio-pequeno');
    $gato->Falar();
    $humano2 = new Humano('Sergio', 23, 'Rua 4', '12345678', $gato->nome);
    $humano2->Identificacao();
    $vendaSergio = new Venda($humano2, 100);
    $vendaSergio->adicionarProduto("Vermífugo", 4);
    $vendaSergio->finalizarPedido();


    echo PHP_EOL;
    echo "-------------------------------------------" . PHP_EOL;
    echo PHP_EOL;


    $passaro = new Passaro('Fly', 'calopsita', 2, 'amarelo', '0,6', 'pequeno');
    $passaro->Falar();
    $humano3 = new Humano('Ana', 22, 'Rua 6', '12345678', $passaro->nome);
    $humano3->Identificacao();
    $vendaAna = new Venda($humano3, 100);
    $vendaAna->adicionarProduto("Antibiótico", 3);
    $vendaAna->finalizarPedido();


    echo PHP_EOL;
    echo PHP_EOL;
    echo "------------CARGOS E SALÁRIOS------------" . PHP_EOL;
    echo PHP_EOL;

    $balconista = new Balconista('Fulano', 20, 'Rua 1', '40028922');
    $balconista->CalculaSalario();

    $vendedor = new Vendedor('Carlos', 23, 'Rua 2', '123456', 40);
    $vendedor->CalculaSalario();

    $veterinario = new Veterinario('Sergio', 40, 'Rua 3', '123456', 25);
    $veterinario->CalculaSalario();
    