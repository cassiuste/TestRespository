<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <?php
        // Para el primer ejercicio se tiene que crear un array asociativo con los datos indicados
        $clientes = array("nombre" => "Sara", "apellido"=>"Martinez", "edad" => 23, "ciudad" => "Barcelona");
        $indice = 1;
        // Despues se tiene que iterar sobre este array con un for each que solo imprime los valores, utilizando un indice para
        // poder indicar al usuario en que iteracion esta de la clave del array.
        foreach ($clientes as $cliente) {
            echo "Dato {$indice}º: {$cliente}<br>";
            $indice++;
        }
        ?>
        <hr>
        <h2>Ejercicio 2</h2>
        <?php
        // En este ejercicio se utiliza un foreach de clave valor para poder mostrar
        // la clave valor del array creado en el primer ejercicio.
        foreach ($clientes as $key => $value) {
            echo "{$key}: {$value}<br>";
        }
        ?>
        <hr>
        <h2>Ejercicio 3</h2>
        <?php
        // Para este ejercicio se modifica el valor de la clave "edad", del array clientes
        // cuyo nombre es "Sara" y el apellido "Martinez".
        
        if($clientes["nombre"] == "Sara" && $clientes["apellido"] == "Martinez"){
            $clientes["edad"] = 24;
        }

        $indice = 1;
        /*Despues de modificar la edad, se itera sobre el array de clientes utilizando un
        foreach que itera sobre los valores con un indice que sirve para 
        ver el indice del valor dentro del array como en el primer ejercicio.
        */
        foreach ($clientes as $cliente) {
            echo "Dato {$indice}º: {$cliente}<br>";
            $indice++;
        }
        ?>
        <hr>
        <h2>Ejercicio 4</h2>
        <?php
        // En este ejercicio se utiliza la funcion "unset", que es una funcion que se utiliza
        // para borrar la llave dentro del array clientes.
        unset($clientes["ciudad"]);
        // Despues de eliminar la llave, se imprime el array con la funcion var_dump.
        var_dump($clientes);
        ?>
        <hr>
        <h2>Ejercicio 5</h2>
        <?php
        /*Primero se crea un array de los elementos que estan separados por una ',' utilizando
        la funcion explode, que tiene como argumento la string a separar y un delimitador
        que será el elemento por el que se separán.
        */
        $letters = "a,b,c,d,e,f";
        $letras = explode(",", $letters);
        /*Despues de tener el array, utilizo un for tradicional para poder iterar sobre
        el array de forma descendente.
        */
        for ($i = count($letras) - 1; $i >= 0; $i--) { 
            /*En el ejericio utilizo un indice para poder mostrar el 
            indice de la letra que esta iterando en el array como en
            la demonstracion del documento.
            */
            $indice = $i + 1;  
            echo "letra {$indice}º: {$letras[$i]}<br>";
        }
        ?>
        <hr>
        <h2>Ejercicio 6</h2>
        <?php
        // En este ejericio se crea un array asociativo de estudiantes, que tiene como clave los nombres y de valor las notas.
        $estudiantes = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
        // Se utiliza la funcion arsort para poder ordenar el array asociativo de estudiantes, y este lo hace de mayour a menor.
        arsort($estudiantes);
        echo "Nota de los estudiantes: ";
        // Se itera sobre el array utilizando un foreach que imprima la clave del array, que es el nombre del estudiante, y el valor que son las notas.
        foreach($estudiantes as $alumno => $nota){
            echo"{$alumno}: {$nota} ";
        }
        ?>
        <hr>
        <h2>Ejercicio 7</h2>
        <?php
        $media = 0;
        // En el ejercicio se utiliza un foreach que itera sobre las claves del valor del array de estudiantes
        // que son las notas de cada alumno para primero poder calcular el valor de las notas totales.
        foreach($estudiantes as $nota){
            $media += $nota;
        }
        /*Una vez se tiene las notas totales de los estudiantes, esta se tiene que dividir
        por la cantidad de alumnos praa realizar la media, y se utiliza la funcion
        round, para que la media quede solo con 2 decimales.
        */
        $media = ($media/count($estudiantes));
        $media = round($media, 2);
        echo "Media de las notas: {$media}<br>";
        echo "Alumnos por encima de la media: <br>";
        // se itera sobre el array, con un foreach de clave, valor que imprime
        // a la clave del alumno si la nota de este el mayor a la media.
        foreach($estudiantes as $alumno => $nota){
            if($nota>$media){
                echo "{$alumno}<br>";
            }
        }
        ?>
        <hr>
        <h2>Ejercicio 8</h2>
        <?php
        // En este caso hice un array para que se guarde la informacion de mas de un alumno,
        // si estos comparten la nota mas alta.
        $mejorAlumno = array();
        // Se pone que la mejor nota es -1, para que hasta que le alumno que tenga un 0 se convierte en 
        // la mejor nota.
        $mejorNota = -1;
        // Se utilila un foreach de clave, valor para que cuando se vea que el alumno tiene la mejor nota
        // se almacene en el array.
        foreach($estudiantes as $alumno => $nota){
            // Si ve que la nota del alumno es mas alta que la almacenada actual
            // crea un nuevo array que almacena ese alumno, y cambia la nota mas alta a la actual. 
            if($nota>$mejorNota){
                $mejorNota = $nota;
                $mejorAlumno = array($alumno);
            }
            // Si comparten la nota mas alta, entonces que el alumno actual se almacene en el array de mejores alumnos.
            elseif($nota == $mejorNota){
                array_push($mejorAlumno, $alumno);
            }
        }
        echo "La nota mas alta es {$mejorNota} y ";
        // Cuando hay 1 elemento en el array, es que solo hay un alumno con la nota mas alta
        if(count($mejorAlumno) == 1){
            echo "el mejor alumno es {$mejorAlumno[0]}.";

        }
        else{
            // si hay mas de uno, que imprima a todos los alumnos con esa nota.
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