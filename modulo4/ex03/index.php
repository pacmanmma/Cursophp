<?php
    $idade1 = 14;
    $idade2 = 18;
    $idade3 = 24;

    $maioridade = 18;
    $msg =  "Voce é maior de idade <br>";

    if ($idade1 >= $maioridade) {
        echo "1 - ";
        echo $msg;
    } else {
        echo "Voce não é maior de idade <br>";
    }

    if ($idade2 >= $maioridade){
        echo "2 - ";
        echo $msg;
    } else {
        echo "Não é maior de idade <br>";
    }

    if ($idade3 >= $maioridade) {
        echo "3 - ";
        echo $msg;
    } else {
        echo "Não é maior de idade <br>";
    }