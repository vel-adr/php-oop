<?php
    require_once ('./animal.php');
    require_once ('./ape.php');
    require_once ('./frog.php');

    $sheep = new Animal("shaun");

    echo $sheep->name . '<br>';
    echo $sheep->legs . '<br>';
    echo $sheep->cold_blooded ? 'true' : 'false' . '<br>';

    $sungokong = new Ape("Kera sakti");
    $sungokong->yell();
    echo '<br>';
    
    $kodok = new Frog("buduk");
    $kodok->jump();
    echo '<br>';
    echo $kodok->legs;