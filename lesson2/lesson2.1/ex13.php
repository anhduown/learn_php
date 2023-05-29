function removeDuplicates($array) {
    return array_unique($array);
}

echo implode(' ', removeDuplicates([1, 2, 3, 2, 4, 1, 5, 3]))."\n";