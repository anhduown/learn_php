function sortDescending($array) {
    rsort($array);
    return $array;
}

echo implode(' ',sortDescending([5, 2, 9, 1, 7]))."\n";