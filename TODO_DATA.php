<?php

    $ITEM=$_POST["item"];
            
    $CON=mysqli_connect("localhost","root","","todo");
    $QUERY="insert into todo (ITEM) values ('".$ITEM."')";
    mysqli_query($CON,$QUERY);

    header("location: TODO.php");
?>
