<?php
    require_once("modelo/Link.php");

    $o1 = new Link('https://images.seeklogo.com/logo-png/23/1/psicologia-logo-png_seeklogo-238746.png', 'Psicologia');
    $o2 = new Link('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxcJDfjc_aLlIUTE9E3P7xE0-h2kg97kqc5g&s', 'História');
    $o3 = new Link('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPCVd__AHsmCgP4Z4rQu2pbtkZeocqO5q3Lg&s', 'Pedagogia');
    $humanas = array();
        array_push($humanas, $o1, $o2, $o3);

    $o4 = new Link('https://www.ifmg.edu.br/governadorvaladares/cursos/superior/informacoes-do-curso-bacharelado-em-engenharia-civil/logo-engenharia-civil/@@images/d4bc88da-6237-4432-a85c-fd00e8931097.jpeg', 'Engenharia');
    $o5 = new Link('https://static.vecteezy.com/ti/vetor-gratis/p1/660676-logo-de-cursos-de-informatica-vetor.jpg', 'Informática');
    $o6 = new Link('https://images.educamaisbrasil.com.br/content/banco_de_imagens/eb/D/logo-de-ciencias-contabeis.jpg', 'Ciências Contáveis');
    $exatas = array();
        array_push($exatas, $o4, $o5, $o6);

    $o7 = new Link('https://ifpr.edu.br/jacarezinho/wp-content/uploads/sites/16/2022/06/teatro.png', 'Artes Cênicas');
    $o8 = new Link('https://wordpress-cms-revista-prod-assets.quero.space/legacy_posts/post_images/17831/68b7bb3a72826856b4c293159f8dc1e380c9d4ed.jpg?1554751568', 'Letras');
    $o9 = new Link('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcST9Cc6IVaZCxwuRhgLRLhoePVhJd3zAlbnWw&s', 'Cinema');
    $linguist = array();
        array_push($linguist, $o7, $o8, $o9);

    $o10 = new Link('https://inisa.ufms.br/files/2017/08/enfe-300x224.png', 'Enfermagem');
    $o11 = new Link('https://www.cfn.org.br/wp-content/uploads/2015/05/Nutricao.jpg', 'Nutrição');
    $o12 = new Link('https://w7.pngwing.com/pngs/157/767/png-transparent-physician-medicine-logo-symbol-miscellaneous-fictional-character-desktop-wallpaper-thumbnail.png', 'Medicina');
    $saude = array();
        array_push($saude, $o10, $o11, $o12);







    print_r($humanas);