<?php
/*5.Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
*/
function replaceSubstring($string, $oldSubstring, $newSubstring) {
    return str_replace($oldSubstring, $newSubstring, $string);
}
    $string = "anhduong, xinchao!";
    $oldSubstring = "xinchao";
    $newSubstring = "K56SD1";
    $result = replaceSubstring($string, $oldSubstring, $newSubstring);
    echo"<br>";
    echo $result;
?>