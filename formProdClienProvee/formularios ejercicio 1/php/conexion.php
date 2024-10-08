<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "negocio";

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>

