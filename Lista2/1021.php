<?php
$N = floatval(readline()) * 100;
$arrayNomeCedulasNotas = [10000, 5000, 2000, 1000, 500, 200];
$arrayNomeCedulasMoedas = [100, 50, 25, 10, 5, 1];
function MostrarQuantidadeEValorCedula($N, $numCedula)
{
    if ($N >= $numCedula) {
        echo intval($N / $numCedula) . " nota(s) de R$ " . number_format($numCedula / 100, 2, ".", "") . "\n";
        return $N % $numCedula;
    } else {
        echo 0 . " nota(s) de R$ " . number_format($numCedula / 100, 2, ".", "") . "\n";
        return $N;
    }
}
function MostrarQuantidadeEValorMoeda($N, $numCedula)
{
    if ($N >= $numCedula) {
        echo intval($N / $numCedula) . " moeda(s) de R$ " . number_format($numCedula / 100, 2, ".", "") . "\n";
        return $N % $numCedula;
    } else {
        echo 0 . " moeda(s) de R$ " . number_format($numCedula / 100, 2, ".", "") . "\n";
        return $N;
    }
}
echo "NOTAS:\n";
foreach ($arrayNomeCedulasNotas as $cedula) {
    $N = MostrarQuantidadeEValorCedula($N, $cedula);
}
echo "MOEDAS:\n";
foreach ($arrayNomeCedulasMoedas as $moeda) {
    $N = MostrarQuantidadeEValorMoeda($N, $moeda);
}