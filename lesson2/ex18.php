<?php
/*Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
*/
    function replaceNonAlphanumeric($string, $replacement) {
        $pattern = '/[^a-zA-Z0-9]+/';
        return preg_replace($pattern, $replacement, $string);
    }

    // Test the function
    $string = "anhduong,xinchao";
    $replacement = "_";
    $modifiedString = replaceNonAlphanumeric($string, $replacement);
    echo $modifiedString;
    ?>