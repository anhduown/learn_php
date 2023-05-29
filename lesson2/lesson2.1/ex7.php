<?php
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$num = 5;

$fact = factorial($num);

echo "Giai thừa của " . $num . " là: " . $fact;
?>