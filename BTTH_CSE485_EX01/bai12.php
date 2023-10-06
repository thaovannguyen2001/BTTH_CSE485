<?php

$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
  ];
  
  // Lấy phần tử đầu tiên
  $firstElement = reset($numbers);
  
  // Lấy phần tử cuối cùng
  $lastElement = end($numbers);
  
  // Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị
  $maxValue = max($numbers);
  $minValue = min($numbers);
  $sumValues = array_sum($numbers);
  
  // Sắp xếp mảng theo chiều tăng giá trị
  asort($numbers);
  
  // Sắp xếp mảng theo chiều giảm giá trị
  arsort($numbers);
  
  // Sắp xếp mảng theo chiều tăng key
  ksort($numbers);
  
  // Sắp xếp mảng theo chiều giảm key
  krsort($numbers);
  
  // Hiển thị kết quả
  echo "Phần tử đầu tiên: " . $firstElement . "\n";
  echo "Phần tử cuối cùng: " . $lastElement . "\n";
  echo "Số lớn nhất: " . $maxValue . "\n";
  echo "Số nhỏ nhất: " . $minValue . "\n";
  echo "Tổng các giá trị: " . $sumValues . "\n";
  echo "Sắp xếp mảng theo chiều tăng giá trị: \n";
  print_r($numbers);
  echo "Sắp xếp mảng theo chiều giảm giá trị: \n";
  print_r($numbers);
  echo "Sắp xếp mảng theo chiều tăng key: \n";
  print_r($numbers);
  echo "Sắp xếp mảng theo chiều giảm key: \n";
  print_r($numbers);