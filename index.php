<?php
require_once 'operaciones.php';
require_once 'raices.php';
require_once 'seno.php';

while (true) {
    echo "\n=== CALCULADORA AVANZADA ===\n";
    echo "1. Operaciones básicas\n";
    echo "2. Raíces\n";
    echo "3. Seno\n";
    echo "4. Salir\n";
    echo "Seleccione una opción: ";
    $opcion = trim(fgets(STDIN));

    if ($opcion == "1") {
        mostrarMenuOperaciones();
    } elseif ($opcion == "2") {
        mostrarMenuRaices();
    } elseif ($opcion == "3") {
        calcularSeno();
    } elseif ($opcion == "4") {
        echo "¡Hasta luego!\n";
        break;
    } else {
        echo "Opción inválida\n";
    }
}
?>
