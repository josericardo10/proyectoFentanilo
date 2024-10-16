<?php
$servername = "localhost"; // según tu configuración
$username = "root"; //  por tu usuario de la base de datos
$password = ""; //  por tu contraseña de la base de datos
$dbname = "transportes"; //  por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
