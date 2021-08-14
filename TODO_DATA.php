<?php

    $ITEM=$_POST["item"];
            
    $CON=mysqli_connect("localhost","root","","database_name");
    $QUERY="insert into table_name (ITEM) values ('".$ITEM."')";
    mysqli_query($CON,$QUERY);

    header("location: TODO.php");
?>
