<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    file_put_contents('historial.txt', '');
    echo json_encode(["mensaje" => "Historial del servidor borrado."]);
} else {
    http_response_code(405);
    echo json_encode(["error" => "Solo se permite método POST"]);
}
