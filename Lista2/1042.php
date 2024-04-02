<?php
$string=explode(" ", readline());
$x=$string[0];
$y=$string[1];
$z=$string[2];

sort($string);
foreach($string as $chave=>$valor){
    echo "$valor\n";
}
echo "\n";
echo "$x\n";
echo "$y\n";
echo "$z\n";
?>