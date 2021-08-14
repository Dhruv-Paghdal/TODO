<?php
     $ITEM=$_GET["item"];
     $CON=mysqli_connect("localhost","root","","todo");
     $QUERY='delete from todo where ITEM="'.$ITEM.'"';
     mysqli_query($CON,$QUERY);
     header("location: TODO.php");
?>