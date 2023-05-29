function insertElement($array, $element, $position) {
    array_splice($array, $position, 0, $element);
    return $array;
}
echo implode(' ',insertElement([1, 2, 3, 4, 5], 10, 2))."\n";

