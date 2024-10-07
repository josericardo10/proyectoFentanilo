<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigoProvincia = $_POST['codigoProvincia'];
    $nombre = $_POST['nombre'];

    $sql = "INSERT INTO provincia (codigoProvincia, nombre)
            VALUES ('$codigoProvincia', '$nombre')";

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
    <title>Formulario Provincias</title>
</head>
<body>
    <h1>Agregar Provincia</h1>
    <form method="POST" action="">
        <label>Código Provincia:</label><br>
        <input type="number" name="codigoProvincia" required><br>
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
