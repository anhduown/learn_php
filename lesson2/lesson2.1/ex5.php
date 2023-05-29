<?php
$arr = array(10, 5, 8, 20, 3, 9);
$max = $arr[0];
foreach ($arr as $num) {
    if ($num > $max) {
        $max = $num;
    }
}
echo "Giá trị lớn nhất trong mảng là: " . $max . "<br>";
$min = $arr[0];
foreach ($arr as $num) {
    if ($num < $min) {
        $min = $num;
    }
}
echo "Giá trị nhỏ nhất trong mảng là: " . $min;
?>
