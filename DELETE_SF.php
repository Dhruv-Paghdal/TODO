<?php
     $ITEM=$_GET["item"];
     $CON=mysqli_connect("localhost","root","","database_name");
     $QUERY='delete from table_name where ITEM="'.$ITEM.'"';
     mysqli_query($CON,$QUERY);
     header("location: TODO.php");
?>
