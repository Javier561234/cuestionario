<?php
require '../../html_fns.php';
require '../../includes/headersAPI.php';
    
try {
    $ClsTemas = new ClsTemas($_POST);
    $resultado = $ClsTemas->eliminar();
    echo json_encode([
        "resultado" => $resultado,
    ]);
} catch (PDOException $e) {
    echo json_encode([
        "error" => $e->getMessage()
    ]);
    exit;
}