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
       echo"<br><center>Thank you for feedback</center><hr>";
       echo"<br><br><br><center>please give  your feedback for improvement</b></center><br>";
      
      
    ?>
 <textarea  name= "feedback" id= "feedback" cols=30 rows=10 placeholder="please give your feedback here .."></textarea><br>
    <input type=button value=send onclick=feed2()>
</center>
</body>
</html>