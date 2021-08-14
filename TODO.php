<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized TODO</title>
    <link rel="stylesheet" href="TODO.css" type="text/css">
    <script src="https://kit.fontawesome.com/a9a20b01b1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div>To Do List</div>
    <form action="TODO_DATA.php" method="POST">
        <input type="text" name="item" placeholder="Enter Task......">
        <input type="submit" value="Add Item">
    </form>
    <table>
        <?php
            $CON=mysqli_connect("localhost","root","","database_name");
            $QUERY="select * from table_name";
            $RESULT=mysqli_query($CON,$QUERY);
            if(mysqli_num_rows($RESULT)>0){
                while($DATA=mysqli_fetch_assoc($RESULT)){
        ?>
                <tr>
                    <td id="data"><?php echo $DATA['ITEM'] ?></td>
                    <td id="icons"><a href="DELETE_SF.php?item=<?php echo $DATA['ITEM']?>" title="Mark As Done"><i class='far fa-check-circle'></i></a></td>
                    <td id="icons">
                        <a href="EDIT.php?item=<?php echo $DATA['ITEM']?>" title="Edit Task">
                            <i class='fas fa-edit'></i>
                        </a>
                    </td>
                    <td id="icons"><a href="DELETE_SF.php?item=<?php echo $DATA['ITEM']?>" title="Remove Task"><i class='far fa-times-circle'></i></a></td>
                </tr>
                <tr>
                    <td id="date"><?php echo $DATA['DATE'] ?></td>
                </tr>
        <?php        }
            }
            else{
                echo "<div style='padding:50px;'></div>";
                echo "<font style='font-size:30px; text-align:center;'>No Pending Task</font>";
            }
        ?>
    </table>
    <div style="padding: 15px;"></div>
    <a href="DELETE_ALL.php" id="butn">Clear Items</a>
</body>
</html>

