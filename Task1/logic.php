<?php
$data = [
    ['Иванов', 'Математика', 5],
    ['Иванов', 'Математика', 4],
    ['Иванов', 'Математика', 5],
    ['Петров', 'Математика', 5],
    ['Сидоров', 'Физика', 4],
    ['Иванов', 'Физика', 4],
    ['Петров', 'ОБЖ', 4],
];

foreach ($data as $item){
    $keyName = $item[0];
    $keySubject = $item[1];
    $points[$keyName][$keySubject] = isset($points[$keyName][$keySubject]) ? $points[$keyName][$keySubject] + $item[2] : $item[2];
}
ksort($points);

foreach ($data as $item){
    $subject[] = $item[1];
}
$uniqueSubject = array_unique($subject);
asort($uniqueSubject);
