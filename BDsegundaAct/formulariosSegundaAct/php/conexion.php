<?php
$servername = "localhost"; // Cambia según tu configuración
$username = "root"; // Cambia por tu usuario de la base de datos
$password = ""; // Cambia por tu contraseña de la base de datos
$dbname = "transportes"; // Cambia por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
