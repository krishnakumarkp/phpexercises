<?php
$cities = array(
    'Tokyo' => 'Japan',
    'Mexico City' => 'Mexico',
    'New York City' => 'USA',
    'Mumbai' => 'India',
    'Seoul' => 'Korea',
    'Shanghai' => 'China',
    'Lagos' => 'Nigeria',
    'Buenos Aires' => 'Argentina',
    'Cairo' =>  'Egypt',
    'London' => 'England'
            
);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['city'])) {
        echo "The city " . $_POST['city'] . " is in the country " . $cities[$_POST['city']] . "<br";
    }
}

?>
<html>
    <head>
        <title>This is a test</title>
    </head>
    <body>
        <form method="post" action="array5.php">
            Select City:

            <select name="city">
<?php
foreach(array_keys($cities) as $city) {
    echo '<option value="',$city,'">',$city,'</option>';
}
?>
            </select>
            <input type ="submit">
        </fom>
    </body>
    
</html>


