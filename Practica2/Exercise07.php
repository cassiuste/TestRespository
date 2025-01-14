<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Formularios</title>
</head>

<body>
    <form action="Exercise07.php" method="post">
        <label for="personaje1">Personaje</label>
        <select name="personaje1" id="personaje1" required>
            <option value="Doraemon">Doraemon</option>
            <option value="Nobita">Nobita</option>
        </select>
        <label for="objeto1">Objeto</label>
        <select name="objeto1" id="objeto1" required>
            <option value="sarten">Sartén 1d8</option>
            <option value="doroyaki">Doroyaki 2d4</option>
        </select>
        <br>
        <label for="personaje2">Personaje</label>
        <select name="personaje2" id="personaje2" required>
            <option value="Doraemon">Doraemon</option>
            <option value="Nobita">Nobita</option>
        </select>
        <label for="objeto2">Objeto</label>
        <select name="objeto2" id="objeto2" required>
            <option value="sarten">Sartén 1d8</option>
            <option value="doroyaki">Doroyaki 2d4</option>
        </select>
        <br>
        <label for="rondas">Rondas</label>
        <input type="number" name="rondas" id="rondas">
        <br>
        <input type="submit" value="Enfrentar" name="submit">
    </form>

    <?php
    if(isset($_POST["submit"])){
        $personaje1 = htmlspecialchars($_POST["personaje1"]);
        $objeto1 = htmlspecialchars($_POST["objeto1"]);
        $personaje2 = htmlspecialchars($_POST["personaje2"]);
        $objeto2 = htmlspecialchars($_POST["objeto2"]);
        $rondas = htmlspecialchars($_POST["rondas"]);
        $valor1 = 0;
        $valor2 = 0;
        $rondasGanadasP1 = 0;
        $rondasGanadasP2 = 0;
        $rondasEmpatadas = 0;
    for ($i=1; $i < $rondas+1 ; $i++) { 
        if($objeto1 == "sarten"){
            $valor1 = rand(1,8);
        }
        else{
            $valor1 = rand(1,4) + rand(1,4);
        }
        
        if($objeto2 == "sarten"){
            $valor2 = rand(1,8);
        }
        else{
            $valor2 = rand(1,4) + rand(1,4);
        }

        echo"<h4>Ronda {$i}<br></h4>";
        if($valor1>$valor2){
            echo "El valor de {$personaje1} es {$valor1}.<br>";
            echo "El valor de {$personaje2} es {$valor2}.<br>";
            echo "{$personaje1} ha ganado la ronda.<br>";
            $rondasGanadasP1++;
        }
        elseif ($valor1<$valor2) {
            echo "El valor de {$personaje1} es {$valor1}.<br>";
            echo "El valor de {$personaje2} es {$valor2}.<br>";
            echo "{$personaje2} ha ganado la ronda.<br>";
            $rondasGanadasP2++;
        }
        else {
            echo "El valor de {$personaje1} es {$valor1}.<br>";
            echo "El valor de {$personaje2} es {$valor2}.<br>";
            echo "Han empatado la ronda.<br>";
            $rondasEmpatadas++;
        }
    }

    echo "<h4>Resultado</h4>";

    if($rondasGanadasP1>$rondasGanadasP2){
        echo "<h2>{$personaje1} es el ganador!</h2>";
        echo "<img src='ej7/{$personaje1}.jpg' alt='{$personaje1}' width='300'><br> ";
    }
    elseif ($rondasGanadasP1<$rondasGanadasP2) {
        echo "<h2>{$personaje2} es el ganador!</h2>";
        echo "<img src='ej7/{$personaje2}.jpg' alt='{$personaje2}' width='300'><br>";
    }
    else {
        echo "<h2>Han empatado!</h2>";
    }
    echo "{$personaje1} ha ganado {$rondasGanadasP1} rondas.<br>";
    echo "{$personaje2} ha ganado {$rondasGanadasP2} rondas.<br>";
    echo "Han empatado {$rondasEmpatadas} rondas.<br>";
    }
    ?>

</body>
</html>