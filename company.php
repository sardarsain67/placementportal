<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of students</title>
    <style type=text/css> 
     .card {
    box-shadow: 0 4px 8px 0 rgb(0, 0, 0);
    
    max-width: 300px;
    
    margin: auto;
    text-align: center;
    float: left;
    margin-left: 5px;
    
  }
  button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: white;
    text-align: center;
    cursor: pointer;
  }
    </style>
</head>
<body>
    <center>
    <div class=main>
        <h2>All Drives</h2>
        <table border=2 rules =all>
        <tr>    
<?php
include('myconnection.php');
$sql= "select * from company_master ";
$result=mysql_query($sql);
$n=0;
while($row=mysql_fetch_array($result)){
    $n++;
    
    echo"<td><div class='card' >
    
    <h1>$row[1]</h1>
    <p class='title'>$row[1]</p>
    <p>$row[2]</p>
   
    <a href=#><i class=fa fa-facebook></i></a>
    <p><input type=button onclick=viewcompanydetails('$row[0]') value='view more' ></p>
    
    
  </div></td>";
  if($n==4){
    echo"</tr><br>";
    $n=0;
  }
} 
?>
</tr>
</table>
</div>
</center>
</body>
</html>