<?php
     $pais1 = array("ordem" => 1,
                    "pais" => '<img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/22px-Flag_of_the_United_States.svg.png" 
                    alt="EUA"> Estados Unidos',
                    "ouro" => 46,
                    "prata" => 37,
                    "bronze" => 38,
                    "total" => 121);

     $pais2 = array("ordem" => 2,
                    "pais" => '<img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/22px-Flag_of_the_United_Kingdom.svg.png"
                    alt="GBR"> Grã-Bretanha',
                    "ouro" => 27,
                    "prata" => 23,
                    "bronze" => 17,
                    "total" => 67);

     $pais3 = array("ordem" => 3,
                    "pais" => '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/22px-Flag_of_the_People%27s_Republic_of_China.svg.png"
                    alt="CHI"> China',
                    "ouro" => 26,
                    "prata" => 18,
                    "bronze" => 26,
                    "total" => 70);

     $pais4 = array("ordem" => 4,
                    "pais" => '<img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/22px-Flag_of_Russia.svg.png"
                    alt="RUS"> Rússia',
                    "ouro" => 19,
                    "prata" => 17,
                    "bronze" => 20,
                    "total" => 56);

     $pais5 = array("ordem" => 5,
                    "pais" => '<img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/22px-Flag_of_Germany.svg.png"
                    alt="GER"> Alemanha',
                    "ouro" => 17,
                    "prata" => 10,
                    "bronze" => 15,
                    "total" => 42);


    $paises = array();
    array_push($paises, $pais1, $pais2, $pais3, $pais4, $pais5);

    echo "<h1>Ranking de Medalhas Olímpicas por País</h1>";
    echo "<table border='1'>";

    echo "<tr>";
    echo "<th style='background:#B0C4DE'>Ordem</th>";
    echo "<th style='background:#B0C4DE'>País</th>";
    echo "<th style='background:#B0C4DE'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Gold_medal_olympic.svg/20px-Gold_medal_olympic.svg.png' alt='OuroM'></th>";
    echo "<th style='background:#B0C4DE'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Silver_medal_olympic.svg/20px-Silver_medal_olympic.svg.png' alt='PrataM'></th>";
    echo "<th style='background:#B0C4DE'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Bronze_medal_olympic.svg/20px-Bronze_medal_olympic.svg.png' alt='BronzeM'></th>";
    echo "<th style='background:#B0C4DE'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/GoldSilverBronze_medal_olympic.svg/40px-GoldSilverBronze_medal_olympic.svg.png' alt='TotalM'></th>";
    echo "</tr>";

    foreach ($paises as $pais) {
        echo "<tr>";
        echo "<td>" . $pais['ordem'] . "</td>";
        echo "<td>" . $pais['pais'] . "</td>";
        echo "<td style='background-color:gold'>" . $pais['ouro'] . "</td>";
        echo "<td style='background-color:silver'>" . $pais['prata'] . "</td>";
        echo "<td style='background:#9F8170'>" . $pais['bronze'] . "</td>";
        echo "<td style='background:#909090'>" . $pais['total'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
