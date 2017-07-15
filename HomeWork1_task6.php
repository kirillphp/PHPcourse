<?php

// домашнее задание №1 - задание №6

// Объявляем переменные
$bmw = ["name" => "BMW", "model" => "X5", "speed" => 120, "doors" => 5, "year" => "2015"];
$toyota = ["name" => "Toyota", "model" => "vectra", "speed" => 87, "doors" => 2, "year" => "2000"];
$opel = ["name" => "Opel", "model" => "vectra", "speed" => 90, "doors" => 4, "year" => "1998"];
$Arr = [];
$Arr = [$bmw, $toyota, $opel];

// Выводим сообщения по моделям авто
for ($tmp = 0; $tmp < count($Arr); $tmp++) {
    echo "<p> CAR {$Arr[$tmp]["name"]}<p/>";
    foreach ($Arr[$tmp] as $v) {
        echo "$v ";
    }
    echo "<p/>";
}