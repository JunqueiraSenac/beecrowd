<?php

$X = (int) readline();
$inn = 0;
$out = 0;
for ($i = 0; $i < $X; $i++) {
    $N = (int) readline();
    if (10 <= $N && $N <= 20) {
        $inn++;
    } else {
        $out++;
    }
}
echo "$inn in\n";
echo "$out out\n";


?>
