<?php
$en=$_GET['enroll'];

include('myconnection.php');
$sql="SELECT * FROM student_master where s_en='$en'";
$result=mysql_query($sql);

if($row=mysql_fetch_array($result)){
    echo"user already exit";
}
 else{
    $sql= "insert into student_master (SELECT * FROM student_registration where s_en='$en')";
    $result=mysql_query($sql);
    echo"student details added ";
    $sql="delete from student_registration where s_en='$en'";

       $result=mysql_query($sql);

 }      
    
      
?>