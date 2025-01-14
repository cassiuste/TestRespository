<?php
    if (isset($_POST["submit"])) {
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["archivo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $extension = htmlspecialchars($_POST["extension"]);
        $size = htmlspecialchars($_POST["size"]);
        
        if($imageFileType != $extension){
            echo "El archivo es diferente a la extension elegida.<br>";
            $uploadOk = 0;
        }

        if ($_FILES["archivo"]["size"] > $size) {
            echo "El archivo que has intentado subir es muy grande.<br>";
            $uploadOk = 0;
          }
        
          if($uploadOk == 0){
            echo "Tu archivo no ha sido subido. ";
          }
          else {
            if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {
                echo "El archivo ". htmlspecialchars( basename( $_FILES["archivo"]["name"])). " se ha subido correctamente.";
                } else {
                echo "Hubo un error subiendo el archivo.";
                }
          }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - Formularios</title>
</head>
<body>
    <form action="Exercise06.php" method="post" enctype="multipart/form-data">
        <label for="archivo">Archivo</label>
        <input type="file" name="archivo" id="archivo" required>
        <br>
        <label for="extension">Extension</label>
        <select name="extension" id="extension" required>
            <option value="jpg">jpg</option>
            <option value="png">png</option>
            <option value="pdf">pdf</option>
        </select>
        <br>
        <label for="size">Tamaño MAX</label>
        <input type="number" name="size" id="size" min="0" required>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>