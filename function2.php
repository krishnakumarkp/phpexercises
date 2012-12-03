<?php
function calculateArea($length, $width) {
    return $length * $width ;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $length = 6;
        $width  = 6;
        echo "A rectangle of length $length and width $width has an area of ". calculateArea($length,$width) ;
        ?>
    </body>
</html>
