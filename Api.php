<?php
// Captura errores fatales y los devuelve como JSON
set_exception_handler(function ($e) {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['error' => $e->getMessage()]);
    exit;
});
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['error' => "$errstr en $errfile:$errline"]);
    exit;
});
register_shutdown_function(function () {
    $error = error_get_last();
    if ($error && ($error["type"] === E_ERROR || $error["type"] === E_PARSE)) {
        http_response_code(500);
        header('Content-Type: application/json');
        echo json_encode(['error' => $error["message"]]);
        exit;
    }
});

require __DIR__ . '/vendor/autoload.php'; // Carga mpdf si está instalado

header("Content-Type: application/json");

$input = json_decode(file_get_contents("php://input"), true);
if (!isset($input['contenido'], $input['tipo'], $input['formato'])) {
    echo json_encode(["error" => "Faltan datos"]);
    exit;
}

$contenido = $input['contenido'];
$tipo = strtolower($input['tipo']);
$formato = strtolower($input['formato']);
$fecha = date("Y-m-d_H-i-s");
$archivoFinal = "convertido_$fecha.$formato";

function convertir($contenido, $tipo, $formato)
{
    if ($formato === "json") {
        if ($tipo === "csv") {
            $filas = array_map("str_getcsv", explode("\n", trim($contenido)));
            $cabeceras = array_shift($filas);
            $data = [];
            foreach ($filas as $fila) {
                if (count($fila) > 1) {
                    $data[] = array_combine($cabeceras, $fila);
                }
            }
            return json_encode($data, JSON_PRETTY_PRINT);
        } else {
            return json_encode(["contenido" => $contenido], JSON_PRETTY_PRINT);
        }
    }

    if ($formato === "xml") {
        return "<contenido>" . htmlspecialchars($contenido) . "</contenido>";
    }

    if ($formato === "md") {
        return "# Conversión a Markdown\n\n" . $contenido;
    }

    if ($formato === "txt") {
        return $contenido;
    }

    return null;
}

function generarPDF($contenido, $tipo, $archivoFinal)
{
    $mpdf = new \Mpdf\Mpdf();
    if ($tipo === "csv") {
        $filas = array_map("str_getcsv", explode("\n", trim($contenido)));
        $html = "<h2>Tabla CSV</h2><table border='1'><tr>";
        foreach ($filas[0] as $col) {
            $html .= "<th>$col</th>";
        }
        $html .= "</tr>";
        for ($i = 1; $i < count($filas); $i++) {
            $html .= "<tr>";
            foreach ($filas[$i] as $celda) {
                $html .= "<td>$celda</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
        $mpdf->WriteHTML($html);
    } else {
        $mpdf->WriteHTML(nl2br(htmlspecialchars($contenido)));
    }
    $mpdf->Output($archivoFinal, \Mpdf\Output\Destination::FILE);
}

if ($formato === "pdf") {
    generarPDF($contenido, $tipo, $archivoFinal);
    file_put_contents("historial.txt", "[$fecha] $tipo → $formato ($archivoFinal)\n", FILE_APPEND);
    echo json_encode([
        "mensaje" => "PDF generado correctamente",
        "formato" => "pdf",
        "archivo" => $archivoFinal
    ]);
    exit;
}

// Otras conversiones
$resultado = convertir($contenido, $tipo, $formato);
file_put_contents($archivoFinal, $resultado);
file_put_contents("historial.txt", "[$fecha] $tipo → $formato ($archivoFinal)\n", FILE_APPEND);

echo json_encode([
    "mensaje" => "Conversión completada",
    "formato" => $formato,
    "archivo" => $archivoFinal,
    "contenido" => $resultado
]);
