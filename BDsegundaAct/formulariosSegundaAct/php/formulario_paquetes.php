<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $destinatario = $_POST['destinatario'];
    $direccionDestinatario = $_POST['direccionDestinatario'];

    $sql = "INSERT INTO paquetes (codigo, descripcion, destinatario, direccionDestinatario)
            VALUES ('$codigo', '$descripcion', '$destinatario', '$direccionDestinatario')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado con éxito :D";
        header('location: ../index.html');  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Paquetes</title>
</head>
<body>
    <h1>Agregar Paquete</h1>
    <form method="POST" action="">
        <label>Código:</label><br>
        <input type="number" name="codigo" required><br>
        <label>Descripción:</label><br>
        <input type="text" name="descripcion" required><br>
        <label>Destinatario:</label><br>
        <input type="text" name="destinatario" required><br>
        <label>Dirección del Destinatario:</label><br>
        <input type="text" name="direccionDestinatario" required><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
