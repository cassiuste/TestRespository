<?php
    if(isset($_GET["nombre"])) {
        $nombre = htmlspecialchars($_GET["nombre"]);
        echo "<br>";
        echo "Bienvenido " . $nombre . "!";
        echo "<br>";
    }
    
    if(isset($_GET["numero1"]) && isset($_GET["numero2"])) {
        $numero1 = htmlspecialchars($_GET["numero1"]);
        $numero2 = htmlspecialchars($_GET["numero2"]);

        if ($numero1 === $numero2) {
            if($numero1 % 2 == 0){
                echo "El numero {$numero1} es par<br>";
                echo"<div class='par'>{$numero1} </div>";
            }
            else{
                echo "El numero {$numero1} es impar";
                echo"<div class='impar'>{$numero1} </div>";
            }
            ;
        }
        else {
            if ($numero1 % 2 == 0) {
                echo "El numero {$numero1} es par ";
            }
            else {
                echo "El numero {$numero1} es impar ";
            }
            if ($numero2 % 2 == 0) {
                echo " y el numero {$numero2} es par ";
            }
            else{
                echo " y el numero {$numero2} es impar ";
            }
         
            if($numero1<$numero2){
                for($i=$numero1; $i <= $numero2 ; $i++){
                    if ($i % 2 == 0) {
                        echo "<div class='par'>{$i} </div>";
                    }
                    else{
                        echo "<div class='impar'>{$i} </div>";
                    }
                }
            }
            else{
                if($numero2<$numero1){
                    for($i=$numero2; $i <= $numero1 ; $i++){
                        if ($i % 2 == 0) {
                            echo "<div class='par'>{$i} </div>";
                        }
                        else{
                            echo "<div class='impar'>{$i} </div>";
                        }
                    }
            }
        }
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Formularios</title>
    <style>
        .par{
            color: green;
        }
        .impar{
            color: orange;
        }
    </style>
</head>
<body>
<form action="Exercise05.php" method="GET">
        <label for="nombre">Nombre: </label>
        <br>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="primero">Primer numero: </label>
        <input type="number" name="numero1" id="primero" min=0 max=15 required>
        <br>
        <label for="segundo">Segundo numero: </label>
        <input type="number" name="numero2" id="segundo" min=0 max=15 required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>