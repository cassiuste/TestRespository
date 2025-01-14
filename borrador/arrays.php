<?php

$cars = array("Elemento 1", "2", 3);

foreach($cars as $car){
    echo "{$car}<br>";
}

foreach ($cars as $key => $value) {
    echo "Key = {$key} y Value: {$value}<br>";
}

echo var_dump($cars);

echo "<br>";

// Associative Array

$car = array("brand" => "Ford", "model" => "Mustang", "year" => "2023");

foreach($car as $key => $value){
    if ($car['model'] == "Mustang") {
        $car['year'] = 2024;
    }
}
foreach($car as $key => $value){
    echo"Key = {$key} y Value: {$value}<br>";
}

// 2D Arrays

$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13, "Diesel"),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15),
);

echo "{$cars[3][2]}";

// Para ver los arrays
echo "<pre>"; 
var_dump($cars); 
echo"</pre>";


for ($i=0; $i < count($cars); $i++) { 
    echo "<br>Fila Numero {$i}<br>";
    for ($j=0; $j < count($cars[$i]); $j++) { 
        echo "{$cars[$i][$j]}<br>";
    }
}

// Funciones

$cars = array("Volvo");
sort($cars);
