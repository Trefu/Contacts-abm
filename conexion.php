<?php
function connect()
{
    include('config/config.php');
    $conn = new mysqli(HOST_NAME, USER_DATABASE, PASSWORD_DATABASE, DATABASE_NAME);
    if (!$conn) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    return $conn;
}

$conexion = connect();
