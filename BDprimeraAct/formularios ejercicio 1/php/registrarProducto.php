<?php
// Incluir la conexión a la base de datos
include('conexion.php');

// Verificar si se enviaron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim($_POST['nombre']);
    $precio = trim($_POST['precio']);

    // Comprobar que todos los campos estén llenos
    if (empty($nombre) || empty($precio)) {
        echo "Todos los campos son obligatorios.";
    } else {
        // Insertar los datos en la tabla "producto"
        $query = "INSERT INTO producto (nombre, precio) VALUES ('$nombre', '$precio')";
        if (mysqli_query($conexion, $query)) {
            echo "Registro de producto exitoso.";
            header('location: ../provedores.html');
        } else {
            echo "Error al registrar producto: " . mysqli_error($conexion);
        }
    }
}
?>
