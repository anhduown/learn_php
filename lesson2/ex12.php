<?php
/*12.Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().*/
function removeLastCharacter($string) {
    return rtrim($string, $string[strlen($string)-1]);
}

    $string = "anhduong, xinchao!";
    $trimmedString = removeLastCharacter($string);

    echo "Original String: " . $string ;
    echo"<br>";
    echo "String with the last character removed" . $trimmedString;
    ?>
<?php
