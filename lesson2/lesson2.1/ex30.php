function isSubstring($haystack, $needle) {
    $pos = strpos($haystack, $needle);
  
    return $pos !== false;
  }
  
  $haystack = "This is a string";
  $needle = "string";
  
  if (isSubstring($haystack, $needle)) {
    echo "The string $needle is a substring of $haystack";
  } else {
    echo "The string $needle is not a substring of $haystack";
  }
?>
 