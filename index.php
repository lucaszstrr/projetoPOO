<?php

    require_once "Animal.php";
    require_once "Cachorro.php";
    require_once "Gato.php";
    require_once "Passaro.php";
    require_once "Humano.php";
    require_once "Balconista.php";
    require_once "Vendedor.php";
    require_once "Veterinario.php";

    $cachorro = new Cachorro('Rex', 'caramelo', 4, 'caramelo', '15', 'medio');
    $cachorro->Falar();

    $gato = new Gato('Gato', 'persa', 4, 'branco', '7', 'medio-pequeno');
    $gato->Falar();

    $passaro = new Passaro('asd', 'calopsita', 2, 'amarelo', '0,6', 'pequeno');
    $passaro->Falar();

    $balconista = new Balconista('fulano', 20, 'Rua 1', '40028922', 'balconista');
    $balconista->CalculaSalario();

    $vendedor = new Vendedor('carlos', 23, 'Rua 2', '123456', 'vendedor', 40);
    $vendedor->CalculaSalario();

    $veterinario = new Veterinario('sergio', 40, 'Rua 3', '123456', 'veterinario', 25);
    $veterinario->CalculaSalario();