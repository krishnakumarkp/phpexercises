<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['city']) && trim($_POST['city']) != '') {
        echo 'Your fav city is ' ,$_POST['city'];
    }
    else {
        echo 'Please enter your fav city ';
    }

} 
else {
?>
<html>
    <head>
    </head>
    <body>
    <form method='post' action='forms2.php'>
    Your favorite city: <input type='text' name='city'>
    <input type='submit' value='Submit'>
    </form>

    </body>
</html>
<?php
}
?>