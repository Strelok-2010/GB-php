<?php
$array = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$evenFunction = function (int $element) {
    if ($element & 1){
        return "$element не чётное \n";
    } else {
        return "$element чётное \n";
    }
};
$result = array_map($evenFunction, $array);

print_r($result);
