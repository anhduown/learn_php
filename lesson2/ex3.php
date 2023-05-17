<?php
/*3.Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
*/
    function reverseString($str) {
        return strrev($str);
    }
    $input = "ANH DUONG, HELLO!";
    $reversedString = reverseString($input);
    echo"<br>";
    echo $reversedString;
?>