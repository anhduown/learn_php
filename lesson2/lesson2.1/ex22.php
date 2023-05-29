function gcd($a, $b) {
    $a = abs($a);
    $b = abs($b);
    if ($b == 0) {
      return $a;
    } else {
      return gcd($b, $a % $b);
    }
  }
  function lcm($a, $b){
    return ($a * $b)/gcd($a, $b);
  }

echo gcd(4, 8)."\n";
echo lcm(15, 40)."\n";