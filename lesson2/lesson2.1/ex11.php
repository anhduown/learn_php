function isArmstrongNumber($number) {
    $originalNumber = $number;
    $sum = 0;
    $digits = strlen($number);
    
    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $digits);
        $number = (int)($number / 10);
    }
    
    return $sum === $originalNumber;
}

$number = 153;

if (isArmstrongNumber($number)) {
    echo "$number là số Armstrong";
} else {
    echo "$number không phải là số Armstrong";
}
