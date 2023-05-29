<?php
/* 16.Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().*/
    function addStringToBeginning($string, $prefix) {
        return $prefix . $string;
    }

    function addStringToEnd($string, $suffix) {
        return $string . $suffix;
    }

    // Test the functions
    $string = "xin";
    $prefix = "chao ";
    $suffix = " chuc ban may nam!";
    $modifiedString = addStringToBeginning($string, $prefix);
    echo $modifiedString;
    echo "<br>";
    $modifiedString = addStringToEnd($string, $suffix);
    echo $modifiedString;
    ?>