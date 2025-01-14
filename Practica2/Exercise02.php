<?php
    if(isset($_GET["numero1"])) {
        $numero1 = htmlspecialchars($_GET["numero1"]);
        $numero2 = htmlspecialchars($_GET["numero2"]);
        echo "<br>";
        if($numero1>$numero2){
            echo "El numero {$numero1} es mayor al numero {$numero2}.";
        }
        elseif($numero1<$numero2){
            echo "El numero {$numero1} es menor al numero {$numero2}.";
        }
        else{
            echo "El numero {$numero1} es igual al numero {$numero2}.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Formularios</title>
</head>
<body>
    <h1>Ejercicio 2 - Formularios</h1>
    <h4>Introduce numeros: </h4>
    <form action="Exercise02.php" method="GET">
        <label for="primero">Primer numero: </label>
        <input type="number" name="numero1" id="primero" required>
        <br>
        <label for="segundo">Segundo numero: </label>
        <input type="number" name="numero2" id="segundo" required>
        <br>
        <input type="submit">
    </form>

</body>
</html>