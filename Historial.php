<?php
header("Content-Type: application/json");

$archivo = 'historial.txt';

if (!file_exists($archivo)) {
    echo json_encode([]);
    exit;
}

$lineas = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$ultimas = array_slice(array_reverse($lineas), 0, 10); // Últimos 10

echo json_encode($ultimas);
