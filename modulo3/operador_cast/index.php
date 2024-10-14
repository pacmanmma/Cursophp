<?php
    $a = (int) "12";

    echo $a;
    echo "<br>";
    echo $a + 10;
    echo "<br>";

    if($a === 12) {
        echo "A é indentico a 12 <br>";
    }

    $b = (float) "3.12424";

    if($b === 3.12424) {
        echo "B é indentico ao 3.12424";
    }

    $c = (string) 34;

    echo $c;
    echo "<br>";

    if($c === "34") {
        echo "C é indentico a '34' <br>";
    }