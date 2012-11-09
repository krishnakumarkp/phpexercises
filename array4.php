<html>
    <head>
    </head>
    <body>
<?php
$modes = array(
    'Automobile', 
    'Jet', 
    'Ferry', 
    'Subway'
);

$new_modes = array();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $new_mod = $_POST['transportation'];
        if(isset($_POST['oldmodes'])) {
            $new_modes=($_POST['oldmodes']); 
        }
        if(isset($new_mod) && trim($new_mod) != '') {
            array_push($new_modes, $new_mod);
        }
}
$modes = array_merge($modes,$new_modes);
?>
<ul>
<?php
foreach($modes as $mod) {
    echo "<li> $mod </li>\n";
}
?>
</ul>
    <form method='post' action='array4.php'>
    Add more? <input type='text' name='transportation'>
<?php
foreach ($new_modes as $hidden_mode) {
    echo "<input type='hidden' name='oldmodes[]' value ='".$hidden_mode."'>\n";
}
?>
    <input type='submit' value='Submit'>
    </form>
    </body>
</html>