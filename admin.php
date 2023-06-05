<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact amin</title>
</head>
<body>
    <center>
    <?php
    include('myconnection.php');
       session_start();
       $usr=$_SESSION['usr'];
      
       echo"<br><br><br><center><h1>Welcome $usr </h1></center>";
       echo"<br><center>Thank you for visit admin page</center><hr>";
       echo"<br><br><br><center>please mail your query:&nbsp<b>xyzadmin@curaj.ac.in</b></center>";
       echo"<br>or";
       echo"<br><a href=# onclick=adminmsg()>send your message to admin</a>";
    ?>
</center>
</body>
</html>