function printFibonacci($n) {
    $a = 0;
    $b = 1;

    while ($a <= $n) {
        echo $a . " ";
        $nextFibonacci = $a + $b;
        $a = $b;
        $b = $nextFibonacci;
    }
}
printFibonacci(50);