<?php

$a = fgets(STDIN)*2;
$b = fgets(STDIN)*3;
$c = fgets(STDIN)*5;

$med = number_format(($a + $b + $c) / 10, 1, '.', '');

echo "MEDIA = $med\n";

?>
