<?php
/*2.Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
*/
function countWords($string) {
    $wordCount = str_word_count($string);
    return $wordCount;
}
$input = "pham thi anh";
$wordCount = countWords($input);
echo "bài 2: " . $wordCount;
?>
