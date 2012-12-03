<?php
function calculateArea($length, $width) {
    return $length * $width ;
}
if($_SERVER['REQUEST_METHOD']=='POST') {
    
    if(isset($_POST['length']) and isset($_POST['width'])) {
        $l = stripslashes($_POST['length']);
        $w = stripslashes($_POST['width']);
        echo "A rectangle of length $l and width $w has an area of ". calculateArea($l,$w) ;
    }
    else {
        echo "Please enter Length and Width.";
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
        <form method ="post" action ="function3.php">
            Length: <input type="text" name ="length"><br>
            Width: <input type="text" name ="width"><br>
            <input type ="submit">
        </form>
    </body>
</html>
