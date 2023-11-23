<?php

echo "<h1>Factorial de un número </h1> <br>";

function factorial($n)
{
    $resultado = 1;
    $contador = 1;

    while ($contador <= $n) {
        $resultado *= $contador;
        $contador++;
    }
    return $resultado;
}

for ($i = 0; $i <= 10; $i++) {
    echo "Factorial del " . $i . " es: " . factorial($i) . "<br>";
}
