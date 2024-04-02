<?php
$salario = floatval(readline());
if ($salario >= 0 && $salario <= 2000) {
    echo "Isento\n";
} elseif ($salario > 2000 && $salario <= 3000) {
    echo "R$ " . number_format((($salario - 2000) * 0.08), 2, ".", "") . "\n";
} elseif ($salario > 3000 && $salario <= 4500) {
    echo "R$ " . number_format((1000.00 * 0.08 + 0.18 * ($salario - 3000)), 2, ".", "") . "\n";
} elseif ($salario > 4500) {
    echo "R$ " . number_format((1000.00 * 0.08 + 0.18 * 1500 + 0.28 * ($salario - 4500)), 2, ".", "") . "\n";
}