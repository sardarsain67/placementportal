<?php
$en=$_GET['enroll'];

include('myconnection.php');
$sql="delete from student_master where s_en='$en'";

       $result=mysql_query($sql);
    
      echo"student details deleted ";

?>