<?php
function sumCol($arr, $y)
{
    $sum = null;
    if ($y < count($arr)) {
        for ($i = 0; $i < count($arr); $i++) {
            $sum += $arr[$i][$y];
        }
    } else {
        echo 'vượt quá số cột mảng đang có';
    }
    return $sum;
}

$arr = [[1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]];
echo sumCol($arr, 1);