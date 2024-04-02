<?php
list($hInicio, $mInicio, $hTermino, $mTermino) = explode(' ', readline());
$horaDuracao = 0;
$minutosDuracao = 0;
if ($hInicio == $hTermino) {
    if ($mInicio > $mTermino) {
        $horaDuracao = 23;
        $minutosDuracao = 60 - $mInicio + $mTermino;
    } elseif ($mInicio < $mTermino) {
        $horaDuracao = 0;
        $minutosDuracao = $mTermino - $mInicio;
    } else {
        $horaDuracao = 24;
    }
} elseif ($hInicio > $hTermino) {
    $horaDuracao = 24 - $hInicio + $hTermino;
    if ($mInicio < $mTermino) {
        $minutosDuracao = $mTermino - $mInicio;
    } elseif ($mInicio > $mTermino) {
        $horaDuracao--;
        $minutosDuracao = 60 - $mInicio + $mTermino;
    }
} else {
    $horaDuracao = $hTermino - $hInicio;
    if ($mInicio < $mTermino) {
        $minutosDuracao = $mTermino - $mInicio;
    } elseif ($mInicio > $mTermino) {
        $horaDuracao--;
        $minutosDuracao = 60 - $mInicio + $mTermino;
    }
}
echo "O JOGO DUROU $horaDuracao HORA(S) E $minutosDuracao MINUTO(S)\n";