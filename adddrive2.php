<?php
include('myconnection.php');
$cname=$_GET['cname'];
$drivenum=$_GET['drivenum'];
$program1=$_GET['program1'];
$program2=$_GET['program2'];
$program3=$_GET['program3'];
$stream1=$_GET['stream1'];
$stream2=$_GET['stream2'];
$stream3=$_GET['stream3'];
$batch1=$_GET['batch1'];
$batch2=$_GET['batch2'];
$currper=$_GET['currper'];
$courseper=$_GET['courseper'];
$back=$_GET['back'];
$minlpa=$_GET['minlpa'];
$maxlpa=$_GET['maxlpa'];
$date=$_GET['date'];
$datel=$_GET['datel'];
$desg=$_GET['desg'];
$post=$_GET['post'];
$cdesc=$_GET['cdesc'];
$link=$_GET['rlink'];
if(empty($drivenum )) {
    echo "company name and drive number are empty please fill this first.<br>";
  }
  else{
$sql="select* from adddrive where drive_num='$drivenum'";
$result=mysql_query($sql);
if($row=mysql_fetch_array($result)){
    echo"drive alredy exit";
}
else{
    $sql="insert into adddrive values  ('$cname','$drivenum','$program1','$program2','$program3','$stream1','$stream2','$stream3','$batch1','$batch2'
    ,'$currper','$courseper','$back','$minlpa','$maxlpa','$date','$datel','$desg','$post','$cdesc','$link')";
   
    mysql_query($sql);
     echo"drive added";
}
  }
?>