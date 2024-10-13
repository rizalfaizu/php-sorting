<?php

$arr = [];
for ($i = 0; $i < 15; $i++) {
    $arr[] = rand(0, 100);
}

echo "Unordered = " . json_encode($arr);

$n = count($arr);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - 1 - $i; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            [$arr[$j], $arr[$j + 1]] = [$arr[$j + 1], $arr[$j]];
        }
    }
}

echo "\nOrdered = " . json_encode($arr);
