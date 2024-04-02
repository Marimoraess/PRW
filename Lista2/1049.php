<?php
$vertebrado = readline();
$animal = readline();
$alimentacao = readline();
switch ($vertebrado) {
    case "vertebrado":
        switch ($animal) {
            case 'ave':
                switch ($alimentacao) {
                    case 'carnivoro':
                        echo "aguia\n";
                        break;
                    case 'onivoro':
                        echo "pomba\n";
                        break;
                }
                break;
            case 'mamifero':
                switch ($alimentacao) {
                    case 'onivoro':
                        echo "homem\n";
                        break;
                    case 'herbivoro':
                        echo "vaca\n";
                        break;
                }
                break;
        }
        break;
    case "invertebrado":
        switch ($animal) {
            case 'inseto':
                switch ($alimentacao) {
                    case 'hematofago':
                        echo "pulga\n";
                        break;
                    case 'herbivoro':
                        echo "lagarta\n";
                        break;
                }
                break;
            case 'anelideo':
                switch ($alimentacao) {
                    case 'hematofago':
                        echo "sanguessuga\n";
                        break;
                    case 'onivoro':
                        echo "minhoca\n";
                        break;
                }
                break;
        }
        break;
        break;
}