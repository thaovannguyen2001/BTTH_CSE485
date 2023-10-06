<?php

$array = array(1, 2, 3, 4, 5);

// Xóa phần tử thứ 3
unset($array[2]);

// Đánh lại key của mảng
$array = array_values($array);

// Hiển thị mảng kết quả
print_r($array);