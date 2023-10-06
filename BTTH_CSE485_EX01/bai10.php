<?php

function convertToUppercase($array) {
    foreach ($array as &$element) {
        if (is_string($element)) {
            $element = strtoupper($element);
        }
    }
    unset($element);

    return $array;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'b', 'c', 'd'];
$arr3 = ['a', 0, null, false];

$result1 = convertToUppercase($arr1);
$result2 = convertToUppercase($arr2);
$result3 = convertToUppercase($arr3);

echo "Kết quả mảng 1: ";
print_r($result1);

echo "Kết quả mảng 2: ";
print_r($result2);

echo "Kết quả mảng 3: ";
print_r($result3);