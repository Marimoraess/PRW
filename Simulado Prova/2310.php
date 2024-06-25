<?php

function calculaPerc($erro, $acerto) {
    if ($erro == 0) {
        return 0;
    } 
    else {
        return ($acerto / $erro) * 100;
    }
}


$n = intval(fgets(STDIN));


$nomes = [];
$erro = ['saque' => 0, 'bloqueio' => 0, 'ataque' => 0];
$acerto = ['saque' => 0, 'bloqueio' => 0, 'ataque' => 0];

for ($i = 0; $i < $n; $i++) {
    $nome = trim(fgets(STDIN));
    $nomes[] = $nome;

    $estatistica = explode(' ', trim(fgets(STDIN)));
    $acerto_jogador = explode(' ', trim(fgets(STDIN)));

  
    $erro['saque'] += $estatistica[0];
    $erro['bloqueio'] += $estatistica[1];
    $erro['ataque'] += $estatistica[2];

    $acerto['saque'] += $acerto_jogador[0];
    $acerto['bloqueio'] += $acerto_jogador[1];
    $acerto['ataque'] += $acerto_jogador[2];
}


$perc_s = calculaPerc($erro['saque'], $acerto['saque']);
$perc_b = calculaPerc($erro['bloqueio'], $acerto['bloqueio']);
$perc_a = calculaPerc($erro['ataque'], $acerto['ataque']);


echo "Pontos de Saque: " . number_format($perc_s, 2) . " %.\n";
echo "Pontos de Bloqueio: " . number_format($perc_b, 2) . " %.\n";
echo "Pontos de Ataque: " . number_format($perc_a, 2) . " %.\n";