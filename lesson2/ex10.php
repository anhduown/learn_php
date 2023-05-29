<?php
/*10.Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
*/
    function removeWhitespace($string) {
        return trim($string);
    }
    $string = " anhduong, xinchao!"; 
    $trimmedString = removeWhitespace($string);
    echo "Original string: '" . $string . "'";
    echo "<br>";
    echo "Trimmed string: '" . $trimmedString . "'";
    ?>