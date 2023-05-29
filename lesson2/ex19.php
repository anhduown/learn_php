<?php
/*Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
*/
    function isInteger($string) {
        return filter_var($string, FILTER_VALIDATE_INT) !== false;
    }
    $string = "anhduong";

    if (isInteger($string)) {
        echo "The string is an integer.";
    } else {
        echo "The string is not an integer.";
    }
    ?>