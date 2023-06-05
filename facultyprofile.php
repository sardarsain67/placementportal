<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of students</title>
   
   <style type=text/css> 
   
     .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    width: 60%;
    height: auto;
    background-color: white;
    margin: auto;
    text-align: center;
    float: left;
    margin-left: 5px;
    display: inline;
    position: absolute;
  top: 20%;
  left: 25%;
  }
  
  button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    
    
  }
    </style>
      
       
</head>
<body>
    <center>
<div class=main>
       <!-- <h2>All requested students</h2>
        <table border=2 rules =all>
            <tr>
               <th>Student Name</th><th>Student enrollment</th><th>Entering year</th><th>passing year</th><th>Gender</th><th>graduation degree</th><th>Branch</th><th>pg program</th><th>pg Branch</th><th>Date of birth</th><th>10th passing year</th><th>10 %</th><th>10th board</th><th>10th passing year</th><th>10 %</th><th>10th board</th>
               <th>School Gap</th>
               <th>Collage gap</th><th>Total Gap</th><th>graduation %</th><th>PG %</th><th>intern company number</th><th>project name</th><th>intern period</th><th>duration date</th><th>intern place</th><th>personal mail</th><th>collage mail</th><th>Student number</th><th>permanent Address</th><th>Student Whatsapp number</th><th>parent name</th>
               <th>parent number</th><th>student hometown</th><th>student homestate</th><th>student residency</th><th>student opinion</th><th>student resume</th><th>Add</th><th >Delete</th>
            </tr>
            //-->
      
<?php
session_start();
$en=$_SESSION['usr'];

include('myconnection.php');
$sql= "select * from faculty where f_uname='$en' ";
$result=mysql_query($sql);
if($row=mysql_fetch_array($result)){
    $id=$row[2];
    
    $sql= "select * from faculty_master where f_id='$id'";
    $result=mysql_query($sql); 
   if($row=mysql_fetch_array($result)){
    echo"<div class='card' >
     Faculty id : $row[0]<br>
     Name : $row[1]<br>
     phone : $row[3]<br>
     Main : $row[4]<br>
     Qualification : $row[5]<br>
     Research : $row[6]<br>
     Address : $row[2]
     
     ";
   
     echo"<p><button onclick=update('$row[1]')>Update </button></p>";
  echo"</div>";
}
else{
    echo"user data not found";
} 
}
else{
    echo"user not found";
}
?>


</div>

</center>
</body>
</html>