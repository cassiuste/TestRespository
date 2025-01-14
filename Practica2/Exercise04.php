<?php


if(isset($_POST["submit"])) {
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["archivo"]["name"]);
        $uploadOk = 1;

        if ($uploadOk == 0) {
            echo "El archivo no se ha subido.";
        } else {
            if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {
            echo "El archivo ". htmlspecialchars( basename( $_FILES["archivo"]["name"])). " ha sido subido correctamente.";
            } else {
            echo "Hubo un error al subir un archivo.";
            }
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Formularios</title>
</head>
<body>
    <form action="Exercise04.php" method="post" enctype="multipart/form-data">
        <label for="archivo">Archivo</label>
        <input type="file" name="archivo" id="archivo">
        <br>
        <button type="submit" name="submit">Enviar</button>
    </form>
</body>
</html>