<?php
require '../../html_fns.php';
require '../../includes/headersAPI.php';
    
try {
    $ClsPreguntas = new ClsPreguntas($_POST);
    $resultado = $ClsPreguntas->eliminar();
    echo json_encode([
        "resultado" => $resultado,
    ]);
} catch (PDOException $e) {
    echo json_encode([
        "error" => $e->getMessage() 
    ]);
    exit;
}