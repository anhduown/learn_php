function sumArray($arr){
    $s = 0;
    for ($i = 0; $i < count($arr); $i++){
        $s += $arr[$i];
    }
    return $s;
}
echo sumArray([1, 2, 3])."\n";