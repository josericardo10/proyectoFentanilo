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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleForms.css">
    <title>Formulario Provincias</title>
</head>
<body>

    <div class="container">
        <h1>Agregar Provincia</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="codigoProvincia">Código Provincia:</label>
                <input type="number" name="codigoProvincia" id="codigoProvincia" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="button-container">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>

</body>
</html>
