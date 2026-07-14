<?php

$pontosTemp = [
    1 => [
        'id' => 1,
        'nome' => 'Praia de Tramandaí',
        'descricao' => 'Com 12 km de faixa de areia e calçadão repleto de quiosques, é o point mais movimentado da cidade no verão. Durante o resto do ano se torna um lugar calmo, ótimo para caminhadas e para curtir a vista.',
        'endereco' => 'Av. Beira Mar, Tramandaí - RS',
        'horario' => 'Aberta 24h, acesso livre',
        'galeria' => [
            'https://images.pexels.com/photos/10205953/pexels-photo-10205953.jpeg?auto=compress&cs=tinysrgb&w=1200',
        ],
    ],
    2 => [
        'id' => 2,
        'nome' => 'Plataforma Marítima',
        'descricao' => 'Estrutura de concreto com cerca de 400 metros mar adentro, em forma de "T" no final. É palco de inúmeras competições de pesca ao longo do ano e um dos melhores mirantes para fotos da orla.',
        'endereco' => 'Av. Beira Mar, próximo ao Centro, Tramandaí - RS',
        'horario' => 'Visitação livre durante o dia',
        'galeria' => [
            'https://images.pexels.com/photos/35609297/pexels-photo-35609297.jpeg?auto=compress&cs=tinysrgb&w=1200',
        ],
    ],
    3 => [
        'id' => 3,
        'nome' => 'Ponta da Barra',
        'descricao' => 'Onde o Rio Tramandaí encontra o mar. Um dos pontos mais visitados da cidade — botos e pescadores dividem a pescaria em um espetáculo natural que só acontece em pouquíssimos lugares do Brasil.',
        'endereco' => 'Ponta da Barra, Tramandaí - RS',
        'horario' => 'Acesso livre',
        'galeria' => [
            'https://images.pexels.com/photos/6930223/pexels-photo-6930223.jpeg?auto=compress&cs=tinysrgb&w=1200',
        ],
    ],
    4 => [
        'id' => 4,
        'nome' => 'Parque Histórico Marechal Osório',
        'descricao' => '174 hectares de área verde, lago, camping e o Museu de Armas, preservando a casa natal do Marechal Osório, patrono da Arma de Cavalaria do Exército brasileiro.',
        'endereco' => 'RS-030, Tramandaí - RS',
        'horario' => 'Diariamente, das 8h às 18h',
        'galeria' => [
            'https://images.pexels.com/photos/27989902/pexels-photo-27989902.jpeg?auto=compress&cs=tinysrgb&w=1200',
        ],
    ],
    5 => [
        'id' => 5,
        'nome' => 'Monumento à Iemanjá',
        'descricao' => 'Localizado na Av. Beira Mar, próximo ao farol, o monumento em homenagem a Iemanjá é aberto à visitação diariamente com acesso gratuito.',
        'endereco' => 'Av. Beira Mar, próximo ao farol, Tramandaí - RS',
        'horario' => 'Diariamente, acesso gratuito',
        'galeria' => [
            'https://images.pexels.com/photos/12989844/pexels-photo-12989844.jpeg?auto=compress&cs=tinysrgb&w=1200',
        ],
    ],
    6 => [
        'id' => 6,
        'nome' => 'Museu Municipal Abrilina Hoffmeister',
        'descricao' => 'Mais de mil peças que contam a história local: fotografias, móveis, utensílios domésticos e ferramentas que valorizam a colonização açoriana do Litoral Norte gaúcho.',
        'endereco' => 'Centro, Tramandaí - RS',
        'horario' => 'Terça a domingo, das 9h às 17h',
        'galeria' => [
            'https://images.pexels.com/photos/1203565/pexels-photo-1203565.jpeg?auto=compress&cs=tinysrgb&w=1200',
        ],
    ],
];
$comentariosTemp = [];

$id = (int) ($_REQUEST['id'] ?? 0);

if (!$id || !isset($pontosTemp[$id])) {
    header('Location: /');
    exit();
}

$ponto = $pontosTemp[$id];
$comentarios = $comentariosTemp[$id] ?? [];

view('ponto', compact('ponto', 'comentarios'));