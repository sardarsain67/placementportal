<?php
$cid=$_GET['id'];
$cname=$_GET['name'];
$cdes=$_GET['des'];
$cnum=$_GET['num'];
//$clogo=$_GET['logo'];
include('myconnection.php');
if(empty($cid)){
    echo"fill company id fields";
}
else{
    if(empty($cname)){
        echo"please enter company name";
    }
    else{
        if(empty($cdes)){
            echo"please enter company descrition";
        }
        else{ 
            if(empty($cnum)){
                echo"please enter company contact number";
            }
            else{
                if($_FILES['clogo']['error']>0)
			echo "Error Uploading File.";
		else
		{
			//access the name of file
	
			$fname=$_FILES['clogo']['name'];
            //temp location of file

			$ftemp=$_FILES['clogo']['tmp_name'];
           
            //temp location of file

			
			
			//upload the file
            if (!file_exists("logo/".$cname)) {     
                mkdir("logo/".$cname, 0777, true); }
                   
         
			move_uploaded_file($ftemp,"logo/$cname/$fname");
            
			

			echo "<br><br>$fname  uploaded successfully.";
            
           
            }
$sql="select* from company_master where serial_number='$cid' ";
$result=mysql_query($sql);
if($row=mysql_fetch_array($result)){
    echo"comapny already registered";
}
else{
    $sql="insert into company_master values ('$cid','$cname','$cdes','$cnum','logo/$cname/$fname')";
       mysql_query($sql);
      echo"insert successfully";
      
}
}
}
}
}
?>