<?php
// Definición del inventario de cómics
$inventario = [
    'suspense_terror' => [
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
    ],
    'accion' => [
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
    ],
    // Puedes agregar más categorías y cómics según sea necesario
];

// main
// antes descuento
mostrarComicsEnTabla();
mostrarValorAlmacen();
aplicarDescuentoManga();
// mostramos el inventario actualizado
mostrarComicsEnTabla();
mostrarValorAlmacen();

function mostrarComicsEnTabla()
{
    global $inventario;
    echo '<br>';
    echo '<table border="1">';
    echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>';

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            echo '<tr>';
            echo "<td>$categoria</td>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo '</tr>';
        }
    }

    echo '</table>';
}

function mostrarValorAlmacen()
{
    // Se utiliza la variable global de inventario para poder acceder a ella.
    global $inventario;
    // Esta es la variable donde se guardaran todo los valores del almacen.
    $valorAlmacen = 0;

    // Se itera sobre el inventario
    foreach($inventario as $categoria => $comics){
        // En la segunda iteracion se itera sobre todos los comics
        foreach($comics as $comic){
            // y se almacena la multiplicacion del precio y la cantidad del stock, en
            // la variable del valor del almacen.
            $valorAlmacen += $comic['precio'] * $comic['stock'];
        }
    }
    echo "El valor total del almacen es {$valorAlmacen}.<br>";
}

function aplicarDescuentoManga()
{
    global $inventario;
    /*se itera sobre el inventario utilizando el & para que se haga referencia a la 
    variable global del inventario y poder modificar su valor. Si no se realizaría
    de esta manera, unicamente se realizaria una copia de esa variable dentro de
    la funcion.
    */
    foreach ($inventario as $categoria => &$comics) {
        // Se iteran sobre las 2 categorias.
        // Despues se iteran sobre el valor
        foreach($comics as &$comic){
            // cuando se iteran sobre los comics, una vez se detectan que el valor de la clave
            // del 'idioma' es 'japones', entonces se modifica el precio.
            if ($comic['idioma'] == 'Japonés') {
                $comic['precio'] = $comic['precio'] * 0.7; // Aplicar descuento del 30%
            }
        }
    }
}
?>


