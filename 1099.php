<?php

$n = (int) readline();
for ($i = 0; $i < $n; $i++) {
    $input = explode(" ", readline());
    $a = (int) $input[0];
    $b = (int) $input[1];
    $d = 0;
    if ($a == $b) {
        echo "0\n";
    } else {
        $c = 0;
        if ($a > $b) {
            $c = $a;
            $a = $b;
            $b = $c;
        }
        while ($a < ($b - 1)) {
            $a++;
            if ($a % 2 != 0) {
                $d += $a;
            }
        }
        echo "$d\n";
    }
}


?>