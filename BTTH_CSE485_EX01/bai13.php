<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

// Tính tổng các phần tử trong mảng
$total = array_sum($numbers);

// Tính số lượng phần tử trong mảng
$count = count($numbers);

// Tính giá trị trung bình
$average = $total / $count;

echo "Giá trị trung bình của mảng là: " . $average . "\n";

// Liệt kê các số lớn hơn giá trị trung bình
$greater_than_average = [];
foreach ($numbers as $number) {
    if ($number > $average) {
        $greater_than_average[] = $number;
    }
}
echo "Các số lớn hơn giá trị trung bình: " . implode(", ", $greater_than_average) . "\n";

// Liệt kê các số nhỏ hơn hoặc bằng giá trị trung bình
$less_than_or_equal_to_average = [];
foreach ($numbers as $number) {
    if ($number <= $average) {
        $less_than_or_equal_to_average[] = $number;
    }
}
echo "Các số nhỏ hơn hoặc bằng giá trị trung bình: " . implode(", ", $less_than_or_equal_to_average) . "\n";
?>