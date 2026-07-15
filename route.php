<?php

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
$controller = trim(str_replace('/', '', $path));

if (! $controller) {
    $controller = 'index';
}

if (! file_exists(__DIR__ . '/Controller/' . $controller . '.controller.php')) {
    abort(404);
}

require __DIR__ . '/Controller/' . $controller . '.controller.php';


