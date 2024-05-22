<?php


for ($I = 1; $I <= 9; $I += 2) {
    for ($J = 6 + $I; $J > 3 + $I; $J--) {
        echo "I=$I J=$J\n";
    }
}

?>