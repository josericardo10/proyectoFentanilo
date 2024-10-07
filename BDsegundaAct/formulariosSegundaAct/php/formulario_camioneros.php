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
        echo "Nuevo registro creado con éxito :D";
        header('location: ../index.html');  
    } else {
        echo "Error: usuario ya existente " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Camioneros</title>
</head>
<body>
    <h1>Agregar Camionero</h1>
    <form method="POST" action="">
        <label>DNI:</label><br>
        <input type="number" name="dni" required><br>
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br>
        <label>Teléfono:</label><br>
        <input type="number" name="telefono" required><br>
        <label>Salario:</label><br>
        <input type="number" name="salario" required><br>
        <label>Dirección:</label><br>
        <input type="text" name="direccion" required><br>
        <label>Localidad:</label><br>
        <input type="text" name="localidad" required><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
