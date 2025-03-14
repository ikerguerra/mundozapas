<?php

// Configuracion para local
// -------------------------------------------------
$db = 'productos';
$host = 'localhost';
$usuario = 'root';
$clave = '';

$conn = "mysql:dbname={$db};host={$host};charset=utf8";

try {
    $db = new PDO($conn, $usuario, $clave, array(PDO::ATTR_PERSISTENT => true));
    echo '<p>Conexión OK</p>';
} catch (PDOException $e) {
    echo '<p>Error de conexión a la base de datos: ' . $e->getMessage();
}