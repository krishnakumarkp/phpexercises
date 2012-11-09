<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['city']) && trim($_POST['city']) != '') {
        echo 'Your fav city is ' ,$_POST['city'];
    }
    else {
        echo 'Please enter your fav city ';
    }

}

?>