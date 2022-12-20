<?php
do {
    $number = (int)readline("количество задач на день");
}while ($number <= 0);

$mission = "на сегодня у вас запланировано $number задач \n";
$summ = 0;

for ($i = 1; $i <= $number; $i++) {
    $task = readline("Какая задача стоит перед вами сегодня?");
    $time = readline("Сколько примерно времени эта задача займет? ");
    $mission .= "- $task({$time}ч) \n";
    $summ += $time;
}

echo $mission;
echo "Времени на задачи {$summ}ч";