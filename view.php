<?php
$enroll=$_GET['roll'];
include('myconnection.php');
$sql= "select * from student_master where s_en =$enroll";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
    echo"$row[0]";
}

?>