<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Borra el historial
    file_put_contents('historial.txt', '');
    // Elimina todos los archivos que empiezan por convertido_
    foreach (glob('convertido_*') as $archivo) {
        if (is_file($archivo)) {
            unlink($archivo);
        }
    }
    echo json_encode(["mensaje" => "Historial del servidor y archivos convertidos borrados."]);
} else {
    http_response_code(405);
    echo json_encode(["error" => "Solo se permite método POST"]);
}
