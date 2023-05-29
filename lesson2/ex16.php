<?php
/*
16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
*/
    function endsWith($string, $substring) {
        $endOfString = strrchr($string, $substring);
        return $endOfString !== false && $endOfString === $substring;
    }

    // Test the function
    $string = "xin chao, lan anh";
    $substring = "xin chao";

    if (endsWith($string, $substring)) {
        echo "The string ends with the substring.";
    } else {
        echo "The string does not end with the substring.";
    }
    ?>

