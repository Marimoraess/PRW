<?php
$string = explode(" ", fgets(STDIN));
$a = $string[0];
$b = $string[1];
$c = $string[2];

sort($string);
if($string[0] + $string[1] > $string[2]){
    echo "Perimetro = ".$perimetro = number_format($a + $b + $c, 1,'.', ' ').PHP_EOL;
    return;
}
echo "Area = ".$areaTrap = number_format(((($a + $b) * $c) / 2) ,1,'.',' ').PHP_EOL;