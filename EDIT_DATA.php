<?php
     $NEWDATA=$_POST["newdata"];
     $OLDDATA=$_POST["olddata"];
     $CON=mysqli_connect("localhost","root","","todo");
     $sql = "UPDATE todo SET ITEM='".$NEWDATA."' WHERE ITEM='".$OLDDATA."'";
     mysqli_query($CON,$sql);
     header("location: TODO.php");
?>
