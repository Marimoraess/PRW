<?php

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    $cod = trim(fgets(STDIN));
    $v = intval(trim(fgets(STDIN)));
    $length = strlen($cod);
    
    for ($j = 0; $j < $length; $j++) {
        if ($cod[$j] == '\0') break;
        if ((ord($cod[$j]) - $v) < 65) {
            echo chr((ord($cod[$j]) - $v) + 26);
        } else {
            echo chr((ord($cod[$j]) - $v));
        }
    }
    echo "\n";
}

?>