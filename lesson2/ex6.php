<?php
/*6.Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
*/
function startsWith($string, $substring) {
    return strpos($string, $substring)===0;
}

    $string = "anhduong, xinchao!";
    $substring = "lananh";
    $result = startsWith($string, $substring);
    if ($result) {
        echo"<br>";
        echo "Chuỗi bắt đầu bằng chuỗi con.";
    } else {
        echo "Chuỗi không bắt đầu bằng chuỗi con.";
    }
?>
