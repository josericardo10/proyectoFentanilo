<?php
// Incluir la conexión a la base de datos
include('conexion.php');

// Verificar si se enviaron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim($_POST['nombre']);
    $apellidos = trim($_POST['apellidos']);
    $direccion = trim($_POST['direccion']);
    $fechaNac = trim($_POST['fechaNac']);

    // Comprobar que todos los campos estén llenos
    if (empty($nombre) || empty($apellidos) || empty($direccion) || empty($fechaNac)) {
        echo "Todos los campos son obligatorios.";
    } else {
        // Insertar los datos en la tabla "clientes"
        $query = "INSERT INTO clientes (nombre, apellidos, direccion, fechaNac) VALUES ('$nombre', '$apellidos', '$direccion', '$fechaNac')";
        if (mysqli_query($conexion, $query)) {
            echo "Registro de cliente exitoso.";
            header('location: ../producto.html');
        } else {
            echo "Error al registrar cliente: " . mysqli_error($conexion);
        }
    }
}
?>
