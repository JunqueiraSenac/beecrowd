<?php

$n = (int) readline();
$i = 0;
while ($i < 6) {
    if ($n % 2 != 0) {
        echo $n . "\n";
        $i++;
    }
    $n++;
}


?>