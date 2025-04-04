<?php
    $j1 = array("numero" => 1, "nome" => "Tafarel", "corFundo" => "yellow");
    $j2 = array("numero" => 2, "nome" => "Jorginho", "corFundo" => "palegreen");
    $j3 = array("numero" => 13, "nome" => "Aldair", "corFundo" => "yellow");
    $j4 = array("numero" => 15, "nome" => "Márcio Santos", "corFundo" => "palegreen");
    $j5 = array("numero" => 6, "nome" => "Branco", "corFundo" => "yellow");
    $j6 = array("numero" => 5, "nome" => "Mauro Silva", "corFundo" => "palegreen");
    $j7 = array("numero" => 8, "nome" => "Dunga", "corFundo" => "yellow");
    $j8 = array("numero" => 17, "nome" => "Mazinho", "corFundo" => "palegreen");
    $j9 = array("numero" => 9, "nome" => "Zinho", "corFundo" => "yellow");
    $j10 = array("numero" => 11, "nome" => "Romário", "corFundo" => "palegreen");
    $j11 = array("numero" => 7, "nome" => "Bebeto", "corFundo" => "yellow");

    $jogadores = array();
    array_push($jogadores, $j1, $j2, $j3, $j4, $j5, $j6, $j7, $j8, $j9, $j10, $j11);

    function desenhaLinha($jogador) {
        echo "<tr>";
            echo "<td style='background:" . $jogador["corFundo"] . "'>" . $jogador["numero"] . "</td>";
            echo "<td style='background:" . $jogador["corFundo"] . "'>" . $jogador["nome"] . "</td>";
        echo "</tr>";
    }

    echo "<h1>Seleção brasileira de futebol campeã mundial em 1994</h1>";
    echo "<table border='2'>";
        echo "<tr>";
            echo "<th>Número</th>";
            echo "<th>Nome</th>";
        echo "</tr>";

    for($i = 0; $i <= count($jogadores)-1; $i++) {
        desenhaLinha($jogadores[$i]);
    }
    
    echo "</table>";