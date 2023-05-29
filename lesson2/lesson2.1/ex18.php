function countOccurrences($array, $element) {
    $counts = array_count_values($array);
    return isset($counts[$element]) ? $counts[$element] : 0;
}
echo countOccurrences([1, 2, 3, 2, 4, 1, 5, 3], 2)."\n";