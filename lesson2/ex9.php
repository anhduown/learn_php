<?php
/*9.Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
*/
function convertToTitleCase($string) {
    return ucwords($string);
}
    $string = "anhduong, xinchao!";
    $titleCaseString = convertToTitleCase($string);
    echo "original string    : " . $string . "\n";
    echo"<br>";
    echo "String converted to uppercase: ". $titleCaseString;
    ?>
<?php
 