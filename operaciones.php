<?php
require_once 'funciones.php';

function mostrarMenuOperaciones() {
    echo "\n-- Operaciones Básicas --\n";
    echo "1. Suma\n";
    echo "2. Resta\n";
    echo "3. Multiplicación\n";
    echo "4. División\n";
    echo "Seleccione una opción: ";
    $op = trim(fgets(STDIN));

    if ($op == "1") {
        suma();
    } elseif ($op == "2") {
        resta();
    } elseif ($op == "3") {
        multiplicacion();
    } elseif ($op == "4") {
        division();
    } else {
        echo "Opción inválida\n";
    }
}

function suma() {
    do {
        echo "¿Cuántos números desea sumar? ";
        $cant = intval(trim(fgets(STDIN)));
        $nums = pedirNumeros($cant);
        $resultado = array_sum($nums);
        echo "Resultado: $resultado\n";

        echo "¿Desea hacer otra suma? (s/n): ";
        $respuesta = strtolower(trim(fgets(STDIN)));
    } while ($respuesta == "s");
}

function resta() {
    do {
        echo "¿Cuántos números desea restar? ";
        $cant = intval(trim(fgets(STDIN)));
        $nums = pedirNumeros($cant);
        $resultado = $nums[0];
        for ($i = 1; $i < $cant; $i++) {
            $resultado -= $nums[$i];
        }
        echo "Resultado: $resultado\n";

        echo "¿Desea hacer otra resta? (s/n): ";
        $respuesta = strtolower(trim(fgets(STDIN)));
    } while ($respuesta == "s");
}

function multiplicacion() {
    do {
        echo "¿Cuántos números desea multiplicar? ";
        $cant = intval(trim(fgets(STDIN)));
        $nums = pedirNumeros($cant);
        $resultado = 1;
        foreach ($nums as $n) {
            $resultado *= $n;
        }
        echo "Resultado: $resultado\n";

        echo "¿Desea hacer otra multiplicación? (s/n): ";
        $respuesta = strtolower(trim(fgets(STDIN)));
    } while ($respuesta == "s");
}

function division() {
    do {
        echo "¿Cuántos números desea dividir? ";
        $cant = intval(trim(fgets(STDIN)));
        $nums = pedirNumeros($cant);
        $resultado = $nums[0];
        for ($i = 1; $i < $cant; $i++) {
            if ($nums[$i] == 0) {
                echo "Error: no se puede dividir por cero.\n";
                return;
            }
            $resultado /= $nums[$i];
        }
        echo "Resultado: $resultado\n";

        echo "¿Desea hacer otra división? (s/n): ";
        $respuesta = strtolower(trim(fgets(STDIN)));
    } while ($respuesta == "s");
}
?>
