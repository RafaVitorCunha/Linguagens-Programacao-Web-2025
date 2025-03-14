<?php
    $a;
    $b;
    $c;

    function Media($a, $b, $c) {
        $m = ($a + $b + $c) / 3;
        echo $m . ".<br><br>";
    }

    echo Media(10, 15, 20) . "=<br><br>";
    echo Media(100, 200, 300) . "=<br><br>";
    echo Media(4, 16, 7) . "<br><br>";

