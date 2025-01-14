<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border: 1px solid; /* Definir borde */
            display: inline-block; /* Ajustar tamaño al contenido */
            padding: 10px;
        }
    </style>
</head>
<body>
<h2>Ejercicio 1</h2>
    <?php
    
        $clientes = array("nombre" => "Sara", "apellido"=>"Martinez", "edad" => 23, "ciudad" => "Barcelona");
        $indice = 1;
        foreach ($clientes as $cliente) {
            echo "Dato {$indice}º: {$cliente}<br>";
            $indice++;
        }
        ?>
        <h2>Ejercicio 2</h2>
        <?php
        foreach ($clientes as $key => $value) {
            echo "{$key}: {$value}<br>";
        }
        ?>
        <h2>Ejercicio 3</h2>
        <?php
        if($clientes["nombre"] == "Sara" && $clientes["apellido"] == "Martinez"){
            $clientes["edad"] = 24;
        }

        $indice = 1;
        foreach ($clientes as $cliente) {
            echo "Dato {$indice}º: {$cliente}<br>";
            $indice++;
        }
        ?>
        <h2>Ejercicio 4</h2>
        <?php
        unset($clientes["ciudad"]);
        var_dump($clientes);
        ?>
        <br>
        <div>
        <h2>Ejercicio 5</h2>
        <?php
        $letters = "a,b,c,d,e,f";
        $letras = explode(",", $letters);
        for ($i = count($letras) - 1; $i >= 0; $i--) {
            $indice = $i + 1;  
            echo "letra {$indice}º: {$letras[$i]}<br>";
        }
        ?>
        </div>
        <br>
        <h2>Ejercicio 6</h2>
        <?php
        $estudiantes = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 5, "Pepe" => 8);
        arsort($estudiantes);
        echo "Nota de los estudiantes: ";
        foreach($estudiantes as $alumno => $nota){
            echo"{$alumno}: {$nota} ";
        }
        ?>
        <br>
        <h2>Ejercicio 7</h2>
        <?php
        $media = 0;
        // Este for each itera sobre las claves del valor del array de estudiantes
        // que son las notas de cada alumno
        foreach($estudiantes as $nota){
            $media += $nota;
        }
        $media = ($media/count($estudiantes));
        $media = round($media, 2);
        echo "Media de las notas: {$media}<br>";
        echo "Alumnos por encima de la media: <br>";
        foreach($estudiantes as $alumno => $nota){
            if($nota>$media){
                echo "{$alumno}<br>";
            }
        }
        ?>
        <br>
        <div>
        <h2>Ejercicio 8</h2>
        <?php
        // En este caso lo hice un array para que se guarde la informacion de mas de un alumno
        // en el caso de que haya una nota igual.
        $mejorAlumno = array();
        $mejorNota = -1;
        foreach($estudiantes as $alumno => $nota){
            if($nota>$mejorNota){
                $mejorNota = $nota;
                $mejorAlumno = array($alumno);
            }
            elseif($nota == $mejorNota){
                array_push($mejorAlumno, $alumno);
            }
        }
        echo "La nota mas alta es {$mejorNota} y ";
        if(count($mejorAlumno) == 1){
            echo "el mejor alumno es {$mejorAlumno[0]}.";

        }
        else{
            echo "los mejores alumnos son ";
            foreach($estudiantes as $alumno => $nota){
                if($nota == $mejorNota){
                    echo "{$alumno}, ";
                }
            }
        }
    ?>
</body>
</html>