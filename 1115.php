<?php

while (true) {
    $input = fscanf(STDIN, "%d %d", $a, $b);
    if ($a == 0 || $b == 0) {
        break;
    } elseif ($a > 0 && $b > 0) {
        echo "primeiro\n";
    } elseif ($a > 0 && $b < 0) {
        echo "quarto\n";
    } elseif ($a < 0 && $b < 0) {
        echo "terceiro\n";
    } elseif ($a < 0 && $b > 0) {
        echo "segundo\n";
    }
}


?>