<?php
/*4.Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
*/
function searchSubstring($string, $substring) {
    return strpos($string, $substring);
}
    $string = "anhduong, xinchao";
    $substring = "xinchao";
    $result = searchSubstring($string, $substring);
    echo"<br>";
    echo "the first position of the substring is: ".$result;
?>