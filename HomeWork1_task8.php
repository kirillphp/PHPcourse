<?php
    #Задание 1 пункт 8
    $Data = "Ура последнее задание";
    echo $Data;
    $DataExplode = explode(' ', $Data);
    $i = 0;
    while ($i < count($DataExplode)/ 2) {
   $tmp = $DataExplode[$i];
   $DataExplode[$i] = $DataExplode[count($DataExplode) - $i - 1];
   $DataExplode[count($DataExplode) - $i - 1] = $tmp;
   $i++;
}    
    $Datareverse = implode('$nbsp', $DataExplode);
    echo '<hr>';
    echo $Datareverse;