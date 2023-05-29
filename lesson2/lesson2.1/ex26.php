function findLargestPositiveNumber($array) {
  $largestNumber = 0;

  foreach ($array as $number) {
    if ($number > 0 && $number > $largestNumber) {
      $largestNumber = $number;
    }
  }

  return $largestNumber;
}
echo findLargestPositiveNumber([1, 3, 2, 6, 100])."\n";
