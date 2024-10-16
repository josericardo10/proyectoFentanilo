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
    <title>Formulario Camiones</title>
</head>
<body>

    <div class="container">
        <h1>Agregar Camión</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="matricula">Matrícula:</label>
                <input type="text" name="matricula" id="matricula" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" name="tipo" id="tipo" required>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" required>
            </div>
            <div class="form-group">
                <label for="potencia">Potencia:</label>
                <input type="text" name="potencia" id="potencia" required>
            </div>
            <div class="button-container">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>

</body>
</html>

