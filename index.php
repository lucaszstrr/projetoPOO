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

    $cachorro = new Cachorro('Rex', 'caramelo', 4, 'caramelo', '15', 'medio');
    $cachorro->Falar();

    $humano1 = new Humano('Thiago', 25, 'Rua 4', '12345678', $cachorro->nome);
    $humano1->Identificacao();

    $medicacao1 = new Venda('Artrin', 100, 3);
    $medicacao1->Venda();

    echo "-------------------------------------------" . PHP_EOL;

    $gato = new Gato('Max', 'persa', 4, 'branco', '7', 'medio-pequeno');
    $gato->Falar();

    $humano2 = new Humano('Sergio', 23, 'Rua 4', '12345678', $gato->nome);
    $humano2->Identificacao();

    echo "-------------------------------------------" . PHP_EOL;

    $passaro = new Passaro('passarinho', 'calopsita', 2, 'amarelo', '0,6', 'pequeno');
    $passaro->Falar();

    $humano3 = new Humano('Ana', 22, 'Rua 6', '12345678', $passaro->nome);
    $humano3->Identificacao();

    echo "-------------------------------------------" . PHP_EOL;

    $balconista = new Balconista('Fulano', 20, 'Rua 1', '40028922');
    $balconista->CalculaSalario();

    $vendedor = new Vendedor('Carlos', 23, 'Rua 2', '123456', 40);
    $vendedor->CalculaSalario();

    $veterinario = new Veterinario('Sergio', 40, 'Rua 3', '123456', 25);
    $veterinario->CalculaSalario();