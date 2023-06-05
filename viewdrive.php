<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of students</title>
    <style type="text/css">
    body {
        background-color: #f1f1f1;
    }

    .main {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card {
        background-color: #fff;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        float: left;
        margin-left: 5px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
        padding: 8px;
        border-radius: 10px;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
    }

    .card img {
        height: 50px;
        width: 100px;
    }

    .card h1 {
        font-size: 20px;
    }

    .card p {
        font-size: 14px;
    }

    .card button {
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
include('myconnection.php');
$sql= "select * from adddrive ";
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