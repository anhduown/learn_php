function isPalindrome($str) {
    $rev = strrev($str);
    return $str == $rev;
  }
  
  $str = "madam";
  
  if (isPalindrome($str)) {
    echo "The string $str is a palindrome."."\n";
  } else {
    echo "The string $str is not a palindrome."."\n";
  }