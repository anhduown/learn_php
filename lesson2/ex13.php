<?php
/*13.Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
*/
function splitString($string, $delimiter) {
    return explode($delimiter, $string);
}
    $string = "k56sd1,k56sd2,k56sd3";
    $delimiter = ",";
    $splitArray = splitString($string, $delimiter);
    print_r($splitArray);
    ?>
 <?php 
