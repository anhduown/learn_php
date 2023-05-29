function findLargestOddNumber($array) {
    $largestOddNumber = -1;
    foreach ($array as $number) {
      if ($number % 2 != 0 && $number > $largestOddNumber) {
        $largestOddNumber = $number;
      }
    }
  
    return $largestOddNumber;
  }
  
echo findLargestOddNumber([1, 2, 6, 9, 10 ,99])."\n";
