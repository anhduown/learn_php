function isPrimeNumber($number) {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; 
        }
    }
    
    return true; 
}
if (isPrimeNumber(17)) {
    echo "yes"."\n";
} else {
    echo "no"."\n";
}