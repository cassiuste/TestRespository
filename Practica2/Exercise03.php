<?php
    if(isset($_GET["numero1"]) && isset($_GET["numero2"])) {
        $numero1 = htmlspecialchars($_GET["numero1"]);
        $numero2 = htmlspecialchars($_GET["numero2"]);

        echo("<br>");

        if($numero1>=0 && $numero1<=20 && $numero2>= 0 && $numero2<=20) {
            if ($numero1<$numero2) {
                ?>
                <h4 style="color:blue;">Lista de menor a mayor. </h4>
                <ul style="color:blue;">
                <?php
                for ($i=$numero1; $i <= $numero2 ; $i++){
                    ?> <li> <?php echo("{$i}<br>"); ?> </li> <?php
                }
                ?>
                </ul>
                <h4 style="color:red;">Lista de mayor a menor. </h4>
                <ul style="color:red;">
                <?php
                for ($i=$numero2; $i >= $numero1 ; $i--){
                    ?> <li> <?php echo("{$i}<br>"); ?> </li> <?php
                }
                ?>
                </ul>
                <?php
            }
            elseif ($numero1>$numero2) {
            ?>
                <h4 style="color:blue;">Lista de mayor a menor. </h4>
                <ul style="color:blue;">
            <?php
                for ($i=$numero1; $i >= $numero2 ; $i--){
                    ?> <li> <?php echo("{$i}<br>"); ?> </li> <?php
                }?>
                </ul>
                <h4 style="color:red;">Lista de menor a mayor. </h4>
                <ul style="color:red;">
                <?php
                for ($i=$numero2; $i <= $numero1 ; $i++){
                    ?> <li> <?php echo("{$i}<br>"); ?> </li> <?php
                }
                ?>
                </ul>
                <?php
            }
            else{
                echo("Los numeros son iguales. ");
            }
        }
        else {
            echo "Los numeros tiene que ser entre 0 y 20";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Formularios</title>
</head>
<body>
    <h1>Ejercicio 3 - Formularios</h1>
    <h4>Introduce numeros entre 0 y 20</h4>
    <form action="Exercise03.php" method="GET">
        <label for="primero">Numero 1: </label>
        <input type="number" name="numero1" id="primero" min="0" max="20" required>
        <br>
        <label for="segundo">Numero 2: </label>
        <input type="number" name="numero2" id="segundo" min="0" max="20" required>
        <br>
        <input type="submit">
    </form>
</body>
</html>