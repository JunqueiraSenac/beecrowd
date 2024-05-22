<?php

$count = 0;
for ($i = 0; $i < 5; $i++) {
    $n = floatval(readline());
    if ($n % 2 == 0) {
        $count++;
    }
}
echo "$count valores pares\n";


?>
