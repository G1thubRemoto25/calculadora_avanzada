<?php
function calcularSeno() {
    do {
        echo "Ingrese el ángulo en grados: ";
        $grados = floatval(trim(fgets(STDIN)));
        $radianes = deg2rad($grados);
        $resultado = sin($radianes);
        echo "Seno de $grados°: $resultado\n";

        echo "¿Desea calcular otro seno? (s/n): ";
        $respuesta = strtolower(trim(fgets(STDIN)));
    } while ($respuesta == "s");
}
?>
