<html>
    <head>
    </head>
    <body>
    <?php
       $count= 10;
       while($count > 1) {
        echo 'ABC ';
        $count = $count -1;
       }
      echo '<br>'; 
      $count= 1;
      do {
        echo 'xyz ';
        $count = $count+1;
       } while ($count <10);
       
       echo '<br>'; 
       
       for ($i=1; $i< 11; $i++) {
        echo $i;
       }
       echo '<br>'; 
       
       echo '<ol>';
       for ($j='A'; $j< 'G'; $j++) {
        echo "<li>Item $j </li>";
       }
       echo '</ol>';
        
    ?>

    </body>
</html>