function arrayUnshift($arr){
    array_unshift($arr, 0);
    return $arr;
}
echo implode(' ', arrayUnshift([1, 2, 3, 4]))."\n";
