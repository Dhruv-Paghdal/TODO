<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TODO.css" type="text/css">
    <title>Edit Task</title>
</head>
<body>
    <div>Edit Task</div>
    <table cellspacing="40" style="border: solid rgb(21, 161, 21) 2px; border-radius: 25px; background-color: white;">
        <form action="EDIT_DATA.php" method="POST">
            <tr>
                <td style="text-align: center; font-size:25px">
                    Previous Task :-
                </td>
                <td align="left">
                    <input type="text" value=<?php echo $_GET['item'];?> name="olddata" style="width:200px;font-size:15px;" readonly >
                </td>       
            </tr>
            <tr>
                <td colspan="2">
                    <input type="text" placeholder="Enter New Task.........." name="newdata">
                </td>
            </tr>
            <tr>
                <td style="width:50%; text-align: center;">
                    <input type="submit" value="Go Ahead">
                </td>
        </form>
                <td style="text-align: center;">
                    <a href="TODO.php" ><button id="butn">Go Back</button></a>  
                </td>
            </tr>
    </table>
</body>
</html>