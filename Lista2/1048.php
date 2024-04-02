<?php
$salario = floatval(readline());
$novoSalrio = 0;
$reajuste = 0;
$percentual = 0;
if ($salario > 0 && $salario <= 400.0) {
    $novoSalrio = $salario + ($salario * 0.15);
    $reajuste = $salario * 0.15;
    $percentual = 15;
} else if ($salario <= 800.0) {
    $novoSalrio = $salario + ($salario * 0.12);
    $reajuste = $salario * 0.12;
    $percentual = 12;
} else if ($salario <= 1200.0) {
    $novoSalrio = $salario + ($salario * 0.10);
    $reajuste = $salario * 0.10;
    $percentual = 10;
} else if ($salario <= 2000.0) {
    $novoSalrio = $salario + ($salario * 0.07);
    $reajuste = $salario * 0.07;
    $percentual = 7;
} else {
    $novoSalrio = $salario + ($salario * 0.04);
    $reajuste = $salario * 0.04;
    $percentual = 4;
}
echo "Novo salario: " . number_format($novoSalrio, 2, ".", "") . "\nReajuste ganho: " . number_format($reajuste, 2, ".", "") . "\nEm percentual: $percentual %\n";