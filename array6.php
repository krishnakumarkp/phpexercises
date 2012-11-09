<?php
$temperatures  =  array(68,70,72,58,60,79,82,73,75,77,73,58,63,79,78,68,72,73,80,79,68,72,75,77,73,78,82,85,89,83);

$average_temperature = array_sum($temperatures) / sizeof($temperatures);

echo round($average_temperature,2);

$unique_temperature = array_keys(array_flip($temperatures));
sort($unique_temperature,SORT_NUMERIC);

foreach (array_slice($unique_temperature,0,5) as $temperature) {
    echo $temperature,'<br>';
}

echo "Highest temperature <br>";

foreach (array_slice($unique_temperature,-5) as $temperature) {
    echo $temperature,'<br>';
}

?>
