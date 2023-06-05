<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registeration</title>
</head>
<body>
    <?php
     session_start();
    
   include('myconnection.php');
     $fname=$_POST['ftxt'];
     $mname=$_POST['mtxt'];
     $lname=$_POST['ltxt'];
     $name=$fname.' '.$mname.' '.$lname;
     echo"nameis :$fname<br>"; 
     echo"last nameis :$lname<br>";
     echo"nameis :$name"; 
     $gen=$_POST['g'];
     //$pass=$_POST['ptxt'];
     //$rpass=$_POST['rptxt'];
     $dob=$_POST['ddtxt'];
     $phn=$_POST['phone'];
     $eid=$_POST['etxt'];
     $enroll=$_POST['entxt'];
     $enrollyear=$_POST['enyear'];

     $passyear=$_POST['passtxt'];
     $degree=$_POST['dg'];
     $degreeper=$_POST['dgper'];
     $branch=$_POST['branch'];
     $teny=$_POST['ttxt'];
     $perten=$_POST['pert'];
     $boardt=$_POST['bt'];
     $tweny=$_POST['twtxt'];
     $pertwl=$_POST['pertw'];
     $boardtw=$_POST['btw'];
     $gaptw=$_POST['a5txt'];
     $gapg=$_POST['a6txt'];
     $gapt=$_POST['a7txt'];
     $perpg=$_POST['a8txt'];
     $degpg=$_POST['pgtxt'];
     $branchpg=$_POST['pgbranch'];
     $intern=$_POST['a9txt'];
     $project=$_POST['b1txt'];
     $interntime=$_POST['b2txt'];
     $internplace=$_POST['b3txt'];
     $pid=$_POST['b4txt'];
     $cid=$_POST['b5txt'];
     $padd=$_POST['potxt'];
     $cadd=$_POST['addtxt'];
     $swnum=$_POST['b6txt'];
     $pname=$_POST['b7txt'];
     $pnum=$_POST['b8txt'];
     $htown=$_POST['b9txt'];
     $hstate=$_POST['b10txt'];
     $schoice=$_POST['b0txt'];
     
    

    
		//check for the file uploadeding error
		if($_FILES['restxt']['error']>0)
			echo "<br>Error Uploading File.";
		else
		{
			//access the name of file
	
			$fname1=$_FILES['restxt']['name'];
            //temp location of file

			$ftemp=$_FILES['restxt']['tmp_name'];
            
            //temp location of file
           
			
			
			//upload the file
            if (!file_exists("docs/".$enroll)) {     
                mkdir('docs/'.$enroll, 0777, true); }
                   
         
			move_uploaded_file($ftemp,"docs/$enroll/$fname1");
           
			

			echo "<br><br>$fname1  uploaded successfully.";
            }
            if($_FILES['protxt']['error']>0)
			echo "<br>Error Uploading File.";
		else
		{
            $fname2=$_FILES['protxt']['name'];
            $ftemp2=$_FILES['protxt']['tmp_name'];
            move_uploaded_file($ftemp2,"docs/$enroll/$fname2");
            echo "<br><br>$fname2  uploaded successfully.";
        }
          
        /*  $docs="docs";
            if (!file_exists($docs)) {     
                mkdir($docs, 0777, true);}
            else{
                if (!file_exists($enroll)) {     
                    mkdir($enroll, 0777, true);
                    move_uploaded_file($ftemp,"$docs/$enroll/$fname1");
                    move_uploaded_file($ftemp2,"$docs/$enroll/$fname2");
                }
                move_uploaded_file($ftemp,"$docs/$enroll/$fname");
                move_uploaded_file($ftemp2,"$docs/$enroll/$fname2");
              echo "<br><br>$fname and $fname2 uploaded successfully.$docs/$enroll/$fname2";
            } 
            */    
              
			
			

			$resume="docs/$enroll/$fname1";
           $profile="docs/$enroll/$fname2";
            //echo"$resume <br>$profile";
            
            include('myconnection.php');
     //if($pass==$rpass){
     $sql="select* from student_registration where s_en='$enroll'";
     $result=mysql_query($sql);
     if($row=mysql_fetch_array($result)){
         echo"<br>member already exits";
         echo"<br>go home page <a href=index.php>go</a>";  
     }
     else{
        $sql="insert into student_registration values ('$name','$enroll','$enrollyear','$passyear','$gen','$degree','$branch','$degpg','$branchpg',
        '$dob','$teny','$perten','$boardt','$tweny','$pertwl','$boardtw','$gaptw','$gapg','$gapt'
        ,'$degreeper' ,'$perpg' ,'$intern' ,'$project' ,'$interntime' ,'$internplace' ,'$pid' ,'$cid' ,$phn ,'$padd','$cadd',$swnum ,'$pname' ,$pnum
        ,'$htown' ,'$hstate' ,'$schoice','$resume','$profile' )";
        mysql_query($sql); 
       //echo"$sql";
       echo"<br>registration successfully<br><br>";
       
       echo"<br>go home page <a href=index.php>go</a>";  
     
    } 
/*}
else{
    echo"please confirm password";
}*/
   
      
    ?>
    
</body>
</html>