function isPerfectNumber($number){
    $sum = 0;
    for($i = 1; $i < $number; $i++){
        if($number % $i == 0){
            $sum += $i;
        }
    }
    return $sum == $number;
}
$number = 3;
if(isPerfectNumber($number)){
    echo "yes"."\n";
}
else{
    echo "no"."\n";
}