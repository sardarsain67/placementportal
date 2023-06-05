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

      <?php
    session_start();
    $usr=$_SESSION['usr'];
    $npass=$_GET['usrpass'];
     include('myconnection.php');
     if(!empty($usr)){
        if(!empty($npass)){
           $sql="select* from student where s_uname='$usr'";
            $result=mysql_query($sql);
     
           if($row=mysql_fetch_array($result)){
       
        
           $sql="update student set s_pass='$npass' where s_uname='$usr' ";
            mysql_query($sql);
            echo"password changed successfully";
        
           }
          else{
              $sql="select* from faculty where f_uname='$usr'";
             $result=mysql_query($sql);
        
              if($row=mysql_fetch_array($result)){
            
           
              $sql="update faculty set f_pass='$npass' where f_uname='$usr' ";
              mysql_query($sql);
              echo"password changed successfully";
            
              }
             else{
             echo"user not found";
             }
            }
        }
        else{
         echo"please enter password";
         }
         
      }
      else{
         echo"user not found";
      }
  

   

     ?>

      <br><br><br><br>

   </center>
</body>

</html>