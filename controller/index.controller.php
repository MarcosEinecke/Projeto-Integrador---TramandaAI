<?php
$pontosTuristicos = [
    ['id' => 1, 'nome' => 'Praia de Tramandaí', 'url_imagem' => '/view/img/Praia.jpg', 'descricao' => 'Com 12 km de faixa de areia e calçadão repleto de quiosques, é o point mais movimentado da cidade no verão.'],
    ['id' => 2, 'nome' => 'Plataforma Marítima', 'url_imagem' => '/view/img/Plataforma.jpg', 'descricao' => 'Estrutura de concreto com cerca de 400 m mar adentro, palco de competições de pesca e ótimo mirante para fotos.'],
    ['id' => 3, 'nome' => 'Ponta da Barra', 'url_imagem' => '/view/img/Barra.jpg', 'descricao' => 'Onde o Rio Tramandaí encontra o mar. Boto e pescadores dividem a pescaria — um espetáculo natural único.'],
    ['id' => 4, 'nome' => 'Parque Histórico Marechal Osório', 'url_imagem' => '/view/img/ParqueHistorico.jpg', 'descricao' => '174 hectares de área verde, lago, camping e o Museu de Armas, preservando a casa natal do Marechal Osório.'],
    ['id' => 5, 'nome' => 'Monumento à Iemanjá', 'url_imagem' => '/view/img/Estatua.png', 'descricao' => 'Na Av. Beira-Mar, próximo ao farol, com visitação gratuita e aberta todos os dias.'],
    ['id' => 6, 'nome' => 'Museu Municipal Abrilina Hoffmeister', 'url_imagem' => '/view/img/Museu.jpg', 'descricao' => 'Mais de mil peças que contam a história local: fotos, móveis e utensílios da colonização açoriana.'],
];

view('index', compact('pontosTuristicos'));