?php

$n1 = readline();
$n2 = readline();
$n3 = 0;
$calcula = ($n1+$n2)%2;

if($calcula % 2 == 0){
$n3++;
 echo "1\n";
}
else{
    echo "0\n";
}

?>