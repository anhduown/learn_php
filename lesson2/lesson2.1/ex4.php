<?php
function multiplicationTable(){
    for ($x=1; $x<=10; $x++){
        for ($y=1; $y <= 10; $y++){
            $total= $x * $y;
            echo "$x*$y= $total <br>";
        }
        echo "<br>";
    }
echo "bai 4:";
    echo findWord("Hello World", "World");
    echo "<br>";
?>