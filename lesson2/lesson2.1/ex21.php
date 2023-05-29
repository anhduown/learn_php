function arrayPush($arr){
    array_push($arr, 5);
    return $arr;
}
echo implode(' ', arrayPush([1, 2, 3, 4]))."\n";