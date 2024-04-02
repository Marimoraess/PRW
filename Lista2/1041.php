<?php
$string = explode(" ",fgets(STDIN));
$x = $string[0];
$y = $string[1];

if($x == 0 && $y == 0 ){
    echo "Origem".PHP_EOL;
} elseif($x == 0){
    echo "Eixo Y".PHP_EOL;
} elseif($y == 0){
    echo "Eixo X".PHP_EOL;
} elseif($x > 0 && $y > 0){
    echo "Q1".PHP_EOL;
} elseif($x > 0 && $y < 0){
    echo "Q4".PHP_EOL;
} elseif($x < 0 && $y > 0){
    echo "Q2".PHP_EOL;
} elseif($x < 0 && $y < 0){
    echo "Q3".PHP_EOL;
} 
?>