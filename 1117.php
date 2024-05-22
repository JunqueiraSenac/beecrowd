<?php


$a = $b = $c = 0.0;
$d = 0;

while ($d < 2) {
    $a = (float) readline();
    if ($a >= 0 && $a <= 10) {
        $d++;
        $c += $a;
    } else {
        echo "nota invalida\n";
    }
}

$b = $c / 2.0;
printf("media = %.2f\n", $b);

?>