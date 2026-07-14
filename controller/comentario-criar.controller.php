<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: /');
    exit();
}

$ponto_id = $_POST['ponto_id'] ?? null;
$nome = $_POST['nome'] ?? '';
$comentario = $_POST['comentario'] ?? '';
$nota = $_POST['nota'] ?? null;

$validacao = Validacao::validar([
    'nome' => ['required', 'min:2', 'max:60'],
    'comentario' => ['required', 'min:5', 'max:300'],
], $_POST);

if ($validacao->naoPassou()) {
    header("Location: /ponto?id=$ponto_id");
    exit();
}

// A foto é opcional — só processa se o usuário realmente escolheu um arquivo
$caminhoFoto = null;

if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $foto = $_FILES['foto'];

    $tiposPermitidos = ['image/jpeg', 'image/png', 'image/webp'];
    $tamanhoMaximo = 5 * 1024 * 1024; // 5MB

    if (!in_array($foto['type'], $tiposPermitidos)) {
        flash()->push('validacoes', ['Formato de foto inválido. Envie uma imagem JPG, PNG ou WEBP.']);
        header("Location: /ponto?id=$ponto_id");
        exit();
    }

    if ($foto['size'] > $tamanhoMaximo) {
        flash()->push('validacoes', ['A foto é muito grande. O limite é 5MB.']);
        header("Location: /ponto?id=$ponto_id");
        exit();
    }

    $extensao = pathinfo($foto['name'], PATHINFO_EXTENSION);
    $nomeArquivo = 'comentario-' . $ponto_id . '-' . uniqid() . '.' . $extensao;

    $pastaDestino = __DIR__ . '/../view/images/uploads/';

    if (!is_dir($pastaDestino)) {
        mkdir($pastaDestino, 0755, true);
    }

    move_uploaded_file($foto['tmp_name'], $pastaDestino . $nomeArquivo);

    $caminhoFoto = '/view/images/uploads/' . $nomeArquivo;
}
flash()->push('mensagem', 'Comentário enviado com sucesso!');

header('Location: /ponto?id=' . $ponto_id);
exit();