<?php

    require_once "Animal.php";
    require_once "Cachorro.php";

    $cachorro = new Cachorro('Rex', 'cachorro', 'caramelo', 4, 'caramelo', '15', 'medio');
    $cachorro->Falar();