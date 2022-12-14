<?php
do {
    $question = readline("В каком году произошло крещение Руси? Варианты: 810, 990 или 740 год.");
    if($question == "988") {
        echo "поздравляю, правильный ответ";
        break;
    } elseif ($question == "810" || $question == "740"){
        echo "не верно";
        break;
    }
} while (true);