<?php

 $pesquisar = $_REQUEST['pesquisar'] ?? '';

$artigos = $database->artigos($pesquisar);




view('index', compact('artigos'));
