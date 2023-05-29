<?php
/*Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
*/
    function containsSubstring($string, $substring) {
        $result = strstr($string, $substring);
        return $result !== false;
    }
    $string = "xinchao,anhduong";
    $substring = "hien";
    if (containsSubstring($string, $substring)) {
        echo "The string contains the substring.";
    } else {
        echo "The string does not contain the substring.";
    }
    ?>