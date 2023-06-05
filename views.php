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
    width: 55%;
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
       
<?php
$en=$_GET['enroll'];
include('myconnection.php');
$sql= "select * from student_registration where s_en='$en' ";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
    echo"<div class='card' >
    <img src='$row[37]' alt='$row[0]'  height=200px width=200px><br>";
    for($i=0;$i<36;$i++){
        
        echo"$row[$i]<br>";
        
     }
    echo"<p><button onclick=adds('$row[1]')>Add Student </button></p>";
    echo"<p><button onclick=dels('$row[1]','$row[36]','$row[37]')>Delete </button></p>";
  echo"</div>";

/*<?php 

 //echo"<embed src='$row[36]'  width='70%' height='600px'/><br>";
 <iframe src="<?php echo $path.$pdf; ?>" width="90%" height="500px">
</iframe>
 ?>*/ 
?>
<div class='card2'>
 

<?php 

 echo"<embed src='$row[36]'  width='70%' height='600px'/><br>";
    }
 ?>

</div>
</div>

</center>
</body>
</html>