<?php
$arr1 = range(1,10);
$arr2 = range(1,10);
$arr3 = [];
shuffle($arr1);
shuffle($arr2);

for ($i = 0; $i < 10; $i++) {
    $arr3[$i] = $arr1[$i] * $arr2[$i];
}

print_r($arr3);
