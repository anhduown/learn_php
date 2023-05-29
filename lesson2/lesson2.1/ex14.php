function findElementPosition($array, $element) {
    $position = array_search($element, $array);
    return $position !== false ? $position : "Element not found";
}

echo findElementPosition([1, 2, 3, 4, 5], 3)."\n";