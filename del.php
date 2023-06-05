<?php
$en=$_GET['enroll'];
$res=$_GET['resume'];
$pro=$_GET['profile'];
include('myconnection.php');
$sql="delete from student_registration where s_en='$en'";

       $result=mysql_query($sql);
    
      echo"student details deleted ";
      unlink("docs/$en/$res");
      unlink("docs/$en/$pro");
?>