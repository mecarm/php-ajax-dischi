<?php
// Richiamo la directory del database
include_once __DIR__ . '/../db/index.php';
// var_dump(__DIR__);

header('Content-type: application/json');

echo json_encode( $database );
?>