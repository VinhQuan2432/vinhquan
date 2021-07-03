<?php
$conn_string = "host = ec2-52-86-25-51.compute-1.amazonaws.com"
        . " port = 5432"
        . " dbname = d2vjh5dkkg2ho4"
        . " user = rokroxwldxzfaq"
        . " password = 1bf3535343aec4ecd4972a67c492fcc1bcd8c8bc81805436fa5b827ffd2086b1";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } 
?>
