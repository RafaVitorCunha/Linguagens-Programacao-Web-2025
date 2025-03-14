<?php
    $r1 = array("base" => 10, 
                "altura" => 7);

    $r2 = array("base" => 13, 
                "altura" => 12);

    $r3 = array("base" => 33, 
                "altura" => 25);

    $ma = array();
    array_push($ma, $r1, $r2, $r3);

    foreach($ma as $m) {
        echo "Área do retângulo: " . ($m["base"] * $m["altura"]) . ".<br><br>";
    }