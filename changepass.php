<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change password</title>
</head>
<body>
    <center>
        <form name=myform>
    <?php
    session_start();
    $usr=$_SESSION['usr'];
    
     include('myconnection.php');

     $sql="select* from student where s_uname='$usr'";
     $result=mysql_query($sql);
     
     $row=mysql_fetch_array($result);
        echo"<h2>update your password";
     
     ?>
    
    <br><br><br><br>
    <b>UserName</b> &nbsp &nbsp &nbsp<input type=text name=usrtxt value='<?php echo "$usr"; ?>' readonly>
    <br><br>
    <b>Password</b>&nbsp &nbsp &nbsp &nbsp<input type=text name=passtxt value='<?php echo "$row[2]"; ?>'>
     <br>
    <input type=button value=Update onclick=changepass2()>&nbsp &nbsp &nbsp<input type=reset value="Clear All">
</form>
    </center>
</body>
</html>