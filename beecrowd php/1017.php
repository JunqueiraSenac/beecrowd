<?php

$tempoHora = (int) fgets(STDIN);
$kmH = (int) fgets(STDIN);

$kmL = $kmH * $tempoHora; 
$litros = ($kmL / 12);

echo number_format(($litros), 3, '.', '') . "\n";


?>