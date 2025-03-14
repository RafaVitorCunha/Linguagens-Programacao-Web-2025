<?php
    for($i = 20; $i <= 70; $i++) {
        if($i % 2 == 0) {
            $Npares = $Npares + $i;
        } else {
            $Nimpares = $Nimpares + $i;
        }
    }

    echo "A soma dos números pares é de " . $Npares . ".<br><br>";
    echo "A soma dos números ímpares é de " . $Nimpares . ".";