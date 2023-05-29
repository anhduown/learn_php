
<?php
/* 7.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
*/
    function convertToUpperCase($string) {
    return strtoupper($string);
}
    $string = "anhduong, xinchao!";
    $upperCaseString = convertToUpperCase($string);
    echo "original string    : " . $string . "\n";
    echo"<br>";
    echo "String converted to uppercase: " . $upperCaseString;
    ?>
