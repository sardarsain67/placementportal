<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of students</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <center>

        <h2>All requested students</h2>
        <table border=2 rules =all>
            <tr>
               <th>Student Name</th><th>Student enrollment</th><th>Entering year</th><th>passing year</th><th>Gender</th><th>graduation degree</th><th>Branch</th><th>pg program</th><th>pg Branch</th><th>Date of birth</th><th>10th passing year</th><th>10 %</th><th>10th board</th><th>10th passing year</th><th>10 %</th><th>10th board</th>
               <th>School Gap</th>
               <th>Collage gap</th><th>Total Gap</th><th>graduation %</th><th>PG %</th><th>intern company number</th><th>project name</th><th>intern period</th><th>duration date</th><th>intern place</th><th>personal mail</th><th>collage mail</th><th>Student number</th><th>permanent Address</th><th>Student Whatsapp number</th><th>parent name</th>
               <th>parent number</th><th>student hometown</th><th>student homestate</th><th>student residency</th><th>student opinion</th><th>student resume</th><th>Add</th><th >Delete</th>
            </tr>
<?php
include('myconnection.php');
$sql= "select * from student_registration ";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
    echo"<tr>";
    for($i=0;$i<38;$i++){
        echo"<td>$row[$i]</td>";
     }
     echo"<td><a href=# onclick=adds('".$row[1]."')>Add</a></td>";
    // echo"<td><img src=images/cross.png height=40 width=40 onclick=dels('".$row[1]."')></td>";
     echo"<td><a href=# onclick=dels('".$row[1]."')> delete</a></td>";
      
     echo"</tr>";
} 
?>
</center>
</body>
</html>