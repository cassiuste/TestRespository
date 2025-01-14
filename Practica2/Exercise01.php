<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $nombre = htmlspecialchars(string: $_POST["nombre"]);
        $apellido = htmlspecialchars(string: $_POST["apellido"]);
        echo"<br>";
        echo"Nombre: {$nombre} <br>";
        echo"Apellido: {$apellido}";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Formularios</title>
</head>
<body>
    <h1>Ejercicio 1 - Formularios</h1>
    <h4>Datos personales</h4>
    <form action="Exercise01.php" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido" required>
        <br>
        <input type="submit">
    </form>
</body>
</html>