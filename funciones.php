<?php
function pedirNumeros($cantidad) {
    $numeros = [];
    for ($i = 0; $i < $cantidad; $i++) {
        echo "Número " . ($i+1) . ": ";
        $numeros[] = floatval(trim(fgets(STDIN)));
    }
    return $numeros;
}
?>
