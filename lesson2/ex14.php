<?php
/*14.Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
 */
// Nối các phần tử của mảng thành chuỗi
    function joinArrayToString($array, $separator) {
        return implode($separator, $array);
    }

    // Test the function
    $array = array("anhduong", "xinchao", "!");
    $separator = " ";
    $result = joinArrayToString($array, $separator);
    echo $result;
    ?>