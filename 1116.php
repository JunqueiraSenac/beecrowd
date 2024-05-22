<?php

$n = (int) readline();

for ($i = 0; $i < $n; $i++) {
    $input = fscanf(STDIN, "%f %f", $x, $y);
    if ($y == 0) {
        echo "divisao impossivel\n";
    } else {
        echo number_format($x / $y, 1) . "\n";
    }
}


?>