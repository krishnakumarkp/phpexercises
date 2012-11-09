<?php
if( $_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['day']) && trim($_POST['day']) != '') {
        switch (strtolower($_POST['day'])) {
            case 'monday':
                echo "Laugh on Monday, laugh for danger";
                break;
            case 'tuesday':
                echo 'Laugh on Tuesday, kiss a stranger';
                break;
            case 'wednesday':
                echo 'Laugh on Wednesday, laugh for a letter.';
                break;
            case 'thursday':
                echo 'Laugh on Thursday, something better.';
                break;
            case 'friday':
                echo 'Laugh on Friday, laugh for sorrow.';
                break;
            case 'saturday':
                echo 'Laugh on Saturday, joy tomorrow.';
                break;
        }
    }
    else {
            echo 'Please enter a day';
    }
}

?>
<html>
    <head>
    </head>
    <body>
    <form method='post' action='forms4.php'>
    Your favorite Day: <input type='text' name='day'>
    <input type='submit' value='Submit'>
    </form>

    </body>
</html>