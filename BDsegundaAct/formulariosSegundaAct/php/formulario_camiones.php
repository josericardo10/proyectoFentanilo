<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST['matricula'];
    $tipo = $_POST['tipo'];
    $modelo = $_POST['modelo'];
    $potencia = $_POST['potencia'];

    $sql = "INSERT INTO camiones (matricula, tipo, modelo, potencia)
            VALUES ('$matricula', '$tipo', '$modelo', '$potencia')";

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
    <title>Formulario Camiones</title>
</head>
<body>
    <h1>Agregar Camión</h1>
    <form method="POST" action="">
        <label>Matrícula:</label><br>
        <input type="text" name="matricula" required><br>
        <label>Tipo:</label><br>
        <input type="text" name="tipo" required><br>
        <label>Modelo:</label><br>
        <input type="text" name="modelo" required><br>
        <label>Potencia:</label><br>
        <input type="text" name="potencia" required><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
