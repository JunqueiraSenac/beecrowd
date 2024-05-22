<?php


$n = (int) readline();
for ($i = 0; $i < $n; $i++) {
    $input = explode(" ", readline());
    $a = (float) $input[0];
    $b = (float) $input[1];
    $c = (float) $input[2];
    $total = ($a * 2 + $b * 3 + $c * 5) / 10;
    echo number_format($total, 1) . "\n";
}


?>