<?php
do {
    $number = (int)readline("Номер пальца");
} while ($number <= 0);

echo "счёт остановлен на пальце ";

$number = $number % 8;

switch (true) {
    case $number == 1:
        echo 1;
        break;
    case $number == 2 || $number == 0:
        echo 2;
        break;
    case $number == 3 || $number == 7:
        echo 3;
        break;
    case $number == 4 || $number == 6:
        echo 4;
        break;
    default:
        echo 5;
}