<?php

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));
$d = trim(fgets(STDIN));
$e = trim(fgets(STDIN));
$f = trim(fgets(STDIN));

$numbers = [$a,$b,$c,$d,$e,$f];

$count = 0;

foreach($numbers as $number){
    if($number > 0){
        $count++;
    }
}

echo "$count valores positivos\n";


?>