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
$en=$_GET['id'];
include('myconnection.php');
$sql= "select * from company_master where serial_number='$en' ";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
    echo"<div class='card' >
    <img src='$row[4]' alt='$row[1]'  height=200px width=200px><br><br>";
   echo" Name: $row[1]<br><br>
    Serial number: $row[0] <br><br>
    Contact number : $row[3]<br><br>
   Company Description : $row[2]<br><br>";
 

    
    //echo"<p><button onclick=delst('$row[0]')>Delete </button></p>";
  echo"</div>";
} 
?>
<div class='card2'>

</div>
</div>

</center>
</body>
</html>