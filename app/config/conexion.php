<?php

// Configuracion para local
// -------------------------------------------------
$dbname = 'productos';
$host = 'localhost';
$user = 'root';
$pass = '';

$conexion = mysqli_connect($host, $user, $pass, $dbname);

// Comprobar conexion
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
// echo "Conexión OK";