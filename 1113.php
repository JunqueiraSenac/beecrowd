<?php

while (true) {
    $input = fscanf(STDIN, "%d %d", $x, $y);
    if ($x == $y) {
        break;
    } else {
        if ($x < $y) {
            echo "Crescente\n";
        } else {
            echo "Decrescente\n";
        }
    }
}


?>
