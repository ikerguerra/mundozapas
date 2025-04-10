<?php
// Configuracion para CDmon
// -------------------------------------------------
$dbname = 'mundozapas';
$host = 'localhost';
$user = 'mymundozapb2';
$pass = 'n4f4JJUO';

// Configuracion para local
// -------------------------------------------------
// $dbname = 'productos';
// $host = 'localhost';
// $user = 'root';
// $pass = '';

try {
    $conexion = mysqli_connect($host, $user, $pass, $dbname);

    // Comprobar conexion
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }
    // echo "Conexión OK";
} catch (mysqli_sql_exception $e) {
    // Log the error for administrators
    error_log("Database Connection Error: " . $e->getMessage());
    
    // Redirect to a specific database error page
    header('Location: ' . MIURL . 'app/views/pages/database-error.php');
    exit();
}