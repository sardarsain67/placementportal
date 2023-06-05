<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of drives</title>
    <style type=text/css> 
     .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0);
    
    width: 250px;
    
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
    background-color: #000;
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
$todaysDate = date("Y-m-d");
include('myconnection.php');
$sql= "select * from adddrive where lastdate<'$todaysDate' ";
$result=mysql_query($sql);
$n=0;
while($row=mysql_fetch_array($result)){
    $n++;
    
    echo"<td><div class='card' >
    
    <h2>Drive no.: $row[1]</h2>
    <h1><p class='title'>$row[0]</p></h1>
    <p>Designation : $row[17]</p>
   
    <a href=#><i class=fa fa-facebook></i></a>
    <p><input type=button onclick=viewdrive('$row[1]') value='view more' ></p>
    
    
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