<?php

    if(5 > 2 || 3 < 4){ // true true
        echo "Operação 1 é verdadeira <br>";
    }

    if(5 > 4 || 30 < 1) { // true false
        echo "A operação 2 é verdadeira <br>";
    }

    if(5 > 6 || 3 < 4) { // false true
        echo "A operação 2 é verdadeira <br>";
    }
    if(5 > 24 || 30 < 4) { // false false
        echo "A operação 2 é verdadeira <br>";
    }

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;

    if($a > $b || $d > $c) { // false e true
        echo "A  operação 5 é verdadeira <br>";
    }

    if(($a > $b || $d > $c) && $c > $d) { // false e true
        echo "A  operação 5 é verdadeira <br>";
    }