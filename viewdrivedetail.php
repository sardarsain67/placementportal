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
    width: 40%;
    height: auto;
    background-color: white;
    margin: auto;
    text-align: center;
    float: left;
    margin-left: 5px;
    display: inline;
    position
  }
  .card2 {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    width: 50%;
    height: auto;
    background-color: white;
    margin: auto;
    text-align: center;
    float: left;
    margin-left: 5px;
    display: inline;
    
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
 <div class=card2>      
<?php
$num=$_GET['drivenum'];
include('myconnection.php');
$sql= "select * from adddrive where drive_num='$num' ";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
      echo"comapny name: $row[0]<br><br>";
      echo"programs : $row[2],$row[3],$row[4]<br><br>";
      echo"Streams: $row[5],$row[6],$row[7]<br><br>";
      echo"Batch : $row[8]-$row[9]<br>";
      echo"Criteria : <br> Current % :$row[10] &nbsp Course %: $row[11]<br>";
      echo"<br>backlogs : $row[12]<br>";
      echo"<br>package: $row[13] &nbsp $row[14]<br>";
      echo"<br> date of drive : $row[15]<br>";
      echo"<br> last date of application : $row[16]<br>";
      echo"<br>Designation : $row[17]<br>";
      //if(!empty($row[18])){
      echo"<br> posts: $row[18]<br>";
      //}


   
    echo"<p><button onclick=delst('$row[1]')>Delete </button></p>";
  echo"</div>";

?>
<div class=card>
  <?php echo"<pre> $row[19]</pre>";
}
  ?>
</div>
</div>

</center>
</body>
</html>