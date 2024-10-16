<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $salario = $_POST['salario'];
    $direccion = $_POST['direccion'];
    $localidad = $_POST['localidad'];

    $sql = "INSERT INTO camioneros (dni, nombre, telefono, salario, direccion, localidad)
            VALUES ('$dni', '$nombre', '$telefono', '$salario', '$direccion', '$localidad')";

    if ($conn->query($sql) === TRUE) {
        echo '<div >
                <label>Nuevo registro creado con éxito :D<label>
                <a class="return" href="../index.html">regresar<a>
            </div>'; 
    } else {
        echo "Error: usuario ya existente " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleForms2.css">
    <title>Formulario Camioneros</title>
</head>
<body>

    <div class="container">
        <h1>Agregar Camionero</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="number" name="dni" id="dni" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="number" name="telefono" id="telefono" required>
            </div>
            <div class="form-group">
                <label for="salario">Salario:</label>
                <input type="number" name="salario" id="salario" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" required>
            </div>
            <div class="form-group">
                <label for="localidad">Localidad:</label>
                <input type="text" name="localidad" id="localidad" required>
            </div>
            <div class="button-container">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>

</body>
</html>

