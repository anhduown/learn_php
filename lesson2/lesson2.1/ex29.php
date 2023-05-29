function findSquareNumber($array){
    $squareNumber = [];
    for($i = 0; $i < count($array); $i++){
        if (sqrt($array[$i]) * sqrt($array[$i]) == $array[$i]){
            $squareNumber[] = $array[$i]; 
        }
    }
    return $squareNumber;
}
echo implode(' ', findSquareNumber([2, 4, 5, 64]))."\n";
