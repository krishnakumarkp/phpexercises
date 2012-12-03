<?php

$months = array(
    'January' => 31,
    'February' => 28,
    'March' => 31,
    'April' => 30,
    'May' => 31,
    'June' =>  30,
    'July' => 31,
    'August' => 31,
    'September' => 30,
    'October' => 31,
    'November' => 30,
    'December' => 31
);

function createMonthOption() {
    global $months;
    echo '<select name="slected_month">'."\n";
    foreach(array_keys($months) as $month) {
        echo '<option value="'.$month.'">'.strtoupper ($month).'</option>' ;        
    }
    echo '</select>'."\n";
}
if($_SERVER['REQUEST_METHOD']=='POST') {
    
    if(isset($_POST['slected_month']) and isset($_POST['slected_month'])) {
        $m = stripslashes($_POST['slected_month']);
        
        $number_of_days= $months[$m];

        echo "The month of ". $m." has ".$number_of_days." days.";
    }
    else {
        echo "Please choose a month.";
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method ="post" action ="function4.php">
           Month: <?php createMonthOption(); ?><br>
            <input type ="submit">
        </form>
    </body>
</html>
