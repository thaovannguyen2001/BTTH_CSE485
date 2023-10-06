<?php

function convertToLowercase($array) {
    foreach ($array as &$element) {
        if (is_string($element)) {
            $element = strtolower($element);
        }
    }
    unset($element);

    return $array;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

$result1 = convertToLowercase($arr1);
$result2 = convertToLowercase($arr2);
$result3 = convertToLowercase($arr3);

echo "Kết quả mảng 1: ";
print_r($result1);

echo "Kết quả mảng 2: ";
print_r($result2);

echo "Kết quả mảng 3: ";
print_r($result3);