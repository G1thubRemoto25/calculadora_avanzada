<?php
function mostrarMenuRaices() {
    do {
        echo "\n-- Operaciones de Raíz --\n";
        echo "1. Raíz Cuadrada\n";
        echo "2. Raíz Cúbica\n";
        echo "Seleccione una opción: ";
        $op = trim(fgets(STDIN));

        if ($op == "1") {
            raizCuadrada();
        } elseif ($op == "2") {
            raizCubica();
        } else {
            echo "Opción inválida\n";
        }

        echo "¿Desea hacer otra operación de raíz? (s/n): ";
        $respuesta = strtolower(trim(fgets(STDIN)));
    } while ($respuesta == "s");
}

function raizCuadrada() {
    echo "Ingrese un número: ";
    $num = floatval(trim(fgets(STDIN)));
    if ($num < 0) {
        echo "No se puede calcular raíz cuadrada de número negativo\n";
    } else {
        echo "Resultado: " . sqrt($num) . "\n";
    }
}

function raizCubica() {
    echo "Ingrese un número: ";
    $num = floatval(trim(fgets(STDIN)));
    $resultado = $num < 0 ? -pow(abs($num), 1/3) : pow($num, 1/3);
    echo "Resultado: $resultado\n";
}
?>
