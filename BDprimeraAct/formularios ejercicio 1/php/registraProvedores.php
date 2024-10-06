<?php
// Incluir la conexión a la base de datos
include('conexion.php');

// Verificar si se enviaron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim($_POST['nombre']);
    $direccion = trim($_POST['direccion']);

    // Comprobar que todos los campos estén llenos
    if (empty($nombre) || empty($direccion)) {
        echo "Todos los campos son obligatorios.";
    } else {
        // Insertar los datos en la tabla "proveedores"
        $query = "INSERT INTO provedores (nombre, direccion) VALUES ('$nombre', '$direccion')";
        if (mysqli_query($conexion, $query)) {
            echo "Registro de proveedor exitoso.";
            
        } else {
            echo "Error al registrar proveedor: " . mysqli_error($conexion);
        }
    }
}
?>
