<?php
$pontosTuristicos = [
    ['id' => 1, 'nome' => 'Praia de Tramandaí', 'url_imagem' => 'https://images.pexels.com/photos/10205953/pexels-photo-10205953.jpeg?auto=compress&cs=tinysrgb&w=800', 'descricao' => 'Com 12 km de faixa de areia e calçadão repleto de quiosques, é o point mais movimentado da cidade no verão.'],
    ['id' => 2, 'nome' => 'Plataforma Marítima', 'url_imagem' => 'https://images.pexels.com/photos/35609297/pexels-photo-35609297.jpeg?auto=compress&cs=tinysrgb&w=800', 'descricao' => 'Estrutura de concreto com cerca de 400 m mar adentro, palco de competições de pesca e ótimo mirante para fotos.'],
    ['id' => 3, 'nome' => 'Ponta da Barra', 'url_imagem' => 'https://images.pexels.com/photos/6930223/pexels-photo-6930223.jpeg?auto=compress&cs=tinysrgb&w=800', 'descricao' => 'Onde o Rio Tramandaí encontra o mar. Boto e pescadores dividem a pescaria — um espetáculo natural único.'],
    ['id' => 4, 'nome' => 'Parque Histórico Marechal Osório', 'url_imagem' => 'https://images.pexels.com/photos/27989902/pexels-photo-27989902.jpeg?auto=compress&cs=tinysrgb&w=800', 'descricao' => '174 hectares de área verde, lago, camping e o Museu de Armas, preservando a casa natal do Marechal Osório.'],
    ['id' => 5, 'nome' => 'Monumento à Iemanjá', 'url_imagem' => 'https://images.pexels.com/photos/12989844/pexels-photo-12989844.jpeg?auto=compress&cs=tinysrgb&w=800', 'descricao' => 'Na Av. Beira-Mar, próximo ao farol, com visitação gratuita e aberta todos os dias.'],
    ['id' => 6, 'nome' => 'Museu Municipal Abrilina Hoffmeister', 'url_imagem' => 'https://images.pexels.com/photos/1203565/pexels-photo-1203565.jpeg?auto=compress&cs=tinysrgb&w=800', 'descricao' => 'Mais de mil peças que contam a história local: fotos, móveis e utensílios da colonização açoriana.'],
];

view('index', compact('pontosTuristicos'));