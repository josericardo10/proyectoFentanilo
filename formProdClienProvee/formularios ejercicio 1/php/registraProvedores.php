<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Registro Proveedores</title>
</head>
<body>
    <div class="container mt-5">
        <?php
        // Incluir la conexión a la base de datos
        include('conexion.php');

        // Verificar si se enviaron los datos del formulario
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = trim($_POST['nombre']);
            $direccion = trim($_POST['direccion']);

            // Comprobar que todos los campos estén llenos
            if (empty($nombre) || empty($direccion)) {
                echo "<div class='alert alert-danger'>Todos los campos son obligatorios.</div>";
            } else {
                // Insertar los datos en la tabla "proveedor"
                $query = "INSERT INTO proveedor (nombre, direccion) VALUES ('$nombre', '$direccion')";
                if ($conexion->query($query) === TRUE) {
                    echo "<div class='alert alert-success'>Registro de proveedor exitoso.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error al registrar proveedor: " . $conexion->error . "</div>";
                }
            }
        }
        ?>
        <a href="../../index.html" class="btn btn-primary mt-3">Volver al Menú</a>
    </div>
</body>
</html>
