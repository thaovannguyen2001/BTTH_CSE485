<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

// Tính tổng các phần tử
$sum = array_sum($arrs);

// Tính tích các phần tử
$product = array_product($arrs);

// Tính hiệu các phần tử
$diff = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    $diff -= $arrs[$i];
}

// Tính thương các phần tử
$quotient = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    $quotient /= $arrs[$i];
}

echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $sum . "\n";
echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $product . "\n";
echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $diff . "\n";
echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $quotient . "\n";
?>