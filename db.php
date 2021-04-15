<?php
   
   $connection = mysqli_connect('localhost', 'root', '', 'test');  
    if(!$connection) {
        die("Database connection failed");
    }
    else {echo "hello dan your connected";}

    ?>