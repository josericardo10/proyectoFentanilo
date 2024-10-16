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
        echo '<div >
                <label>Nuevo registro creado con éxito :D<label>
                <a class="return" href="../index.html">regresar<a>
            </div>'; 
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
    <link rel="stylesheet" href="../css/styleForms2.css">
    <title>Formulario Paquetes</title>
</head>
<body>

    <div class="container">
        <h1>Agregar Paquete</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="number" name="codigo" id="codigo" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion" required>
            </div>
            <div class="form-group">
                <label for="destinatario">Destinatario:</label>
                <input type="text" name="destinatario" id="destinatario" required>
            </div>
            <div class="form-group">
                <label for="direccionDestinatario">Dirección del Destinatario:</label>
                <input type="text" name="direccionDestinatario" id="direccionDestinatario" required>
            </div>
            <div class="button-container">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>

</body>
</html>
