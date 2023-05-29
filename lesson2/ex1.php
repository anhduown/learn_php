
<?php
/*1.Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
*/
    function countCharacters($string) {
        return strlen($string);
    }
    $string = "lananh, xinchao!";
    $characterCount = countCharacters($string);
    echo "Number of characters in the string: " . countCharacters($string);
    ?>
<?php
