<?php

$cities = array(
            'Tokyo', 
            'Mexico City', 
            'New York City', 
            'Mumbai', 
            'Seoul', 
            'Shanghai', 
            'Lagos', 
            'Buenos Aires', 
            'Cairo', 
            'London'
        );

foreach ($cities as $city) {
    echo $city,',';
}

sort($cities);

?>
<ul>
<?php
foreach ($cities as $city) {
    echo '<li>',$city,'</li>';
}


?>
</ul>

<ol>
<?php
array_push($cities,'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');
sort($cities);
foreach ($cities as $city) {
    echo '<li>',$city,'</li>';
}
?>
</ol>

