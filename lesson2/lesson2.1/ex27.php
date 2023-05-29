function findLargestNegativeNumber($array) {
    $largestNegativeNumber = null;
    
    foreach ($array as $number) {
        if ($number < 0 && $number > $largestNegativeNumber) {
            $largestNegativeNumber = $number;
        }
    }
    
    return $largestNegativeNumber;
}
echo findLargestNegativeNumber([-3, 5, -10, 7, -8, 0, -12])."\n";
