<?php


$n = (int) readline();
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        echo "$i^2 = " . pow($i, 2) . "\n";
    }
}


?>