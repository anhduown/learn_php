function sumOdd($n){
    $sum = 0;
    for($i = 1; $i <= $n; $i++){
        if($i % 2 != 0){
            $sum += $i;
        }
    }
    return $sum;
}
echo sumOdd(3)."\n";