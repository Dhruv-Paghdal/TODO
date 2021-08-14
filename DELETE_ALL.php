<?php
     $CON=mysqli_connect("localhost","root","","todo");
     $QUERY="delete from todo";
     mysqli_query($CON,$QUERY);
     header("location: TODO.php");
?>