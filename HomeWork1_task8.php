<?php

// домашнее задание №1 - задание №7

//Объявляем переменные
$str = "Ура последнее задание";


//Балуемся со строкой
echo "<p> $str <p/>";
$arr_explode = explode(" ", $str);
foreach ($arr_explode as $tmp) {
    echo "$tmp ";
}
$result = [];
foreach ($arr_explode as &$tmp) 
{
    $res_str = "";
    $a = 0;
    $b = strlen($tmp)-1;
    do {
        $scrum = $tmp[$a];
        $tmp[$a] = $tmp[$b];
        $tmp[$b] = $scrum;
        $b--;
        $a++;
    } while ($a <= $b);
    $result[] = $tmp;
}

$arr_explode = implode("*", $result);
echo "<p>" .$arr_explode. "<p/>";