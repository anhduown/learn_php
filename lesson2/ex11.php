<?php
/* 11.Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
*/
function removeFirstCharacter($string) {
    $result = substr($string, 1);
    return $result;
}

    $input = "anhduong, xinchao!";
    $removedCharacter = removeFirstCharacter($input);
    echo "Modified string: " . $removedCharacter;
?>