<?php
$arr = [3, 45, 32, 23, 51, 35, 54];

$task2Function = function (array $array) {
    return [
        'max' => max($array),
        'min' => min($array),
        'avg' => array_sum($array) / count($array)
    ];
};

print_r($task2Function($arr));