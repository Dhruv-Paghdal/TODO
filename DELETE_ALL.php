<?php
     $CON=mysqli_connect("localhost","root","","database_name");
     $QUERY="delete from table_name";
     mysqli_query($CON,$QUERY);
     header("location: TODO.php");
?>
