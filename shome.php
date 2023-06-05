<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome in portal</title>
    <link rel="stylesheet" href="shome.css">
    <script language="JavaScript">
        function createobject()
	{
	var ob;
		try
		{
			//create the object

			ob=new XMLHttpRequest();
		}
		catch(e)
		{
			try
			{
				ob=new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch(e)
			{

				try
				{
					ob=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch(e)
				{
					alert("Your broswer doesnot support javascript");
				}
			}
		}
		return ob;
    }
    function slist()
        {
            var ob=createobject();

           

            ob.onreadystatechange=function()
            {
                if(ob.readyState==4)
                    document.getElementById("slist").innerHTML=ob.responseText;	
    
            }
            //receive the value of text box
            
           
           
            
            //send the request the server

            ob.open("GET","students.php?",true);

            ob.send();
           
        }	
        function sadd()
        {
            var ob=createobject();

           

            ob.onreadystatechange=function()
            {
                if(ob.readyState==4)
                    document.getElementById("slist").innerHTML=ob.responseText;	
    
            }
            //receive the value of text box
            
           
           
            
            //send the request the server

            ob.open("GET","addstudent.php?",true);

            ob.send();
           
        }
       	
        function adds(enr){
           
           var ob=createobject();

          

           ob.onreadystatechange=function()
          {
         if(ob.readyState==4)
          document.getElementById("slist").innerHTML=ob.responseText;	

       }
       //receive the value of text box
           var roll =enr;
          

           confirm('you want to delete this ?');

//send the request the server


       ob.open("GET","add.php?enroll="+roll,true);

       ob.send();
       

       }
        function dels(enr){
           
            var ob=createobject();

           

            ob.onreadystatechange=function()
           {
          if(ob.readyState==4)
           document.getElementById("slist").innerHTML=ob.responseText;	

        }
        //receive the value of text box
            var roll =enr;
           

            confirm('you want to delete this ?');

//send the request the server


        ob.open("GET","del.php?enroll="+roll,true);

        ob.send();
        

        }
    
        function listc()
        {
            var ob=createobject();

           

            ob.onreadystatechange=function()
            {
                if(ob.readyState==4)
                    document.getElementById("slist").innerHTML=ob.responseText;	
    
            }
            //receive the value of text box
            
           
           
            
            //send the request the server

            ob.open("GET","companys.php?",true);

            ob.send();
           
        }	
       function addc(){
        var ob=createobject();

           

ob.onreadystatechange=function()
{
    if(ob.readyState==4)
        document.getElementById("slist").innerHTML=ob.responseText;	

}
//receive the value of text box




//send the request the server

ob.open("GET","addcompany.html?",true);

ob.send();

}
function addcom()
        {
            var ob=createobject();

           

            ob.onreadystatechange=function()
            {
                if(ob.readyState==4)
                    document.getElementById("slist").innerHTML=ob.responseText;	
    
            }
            //receive the value of text box
            
           var cid, cname , cdes ,cnum;
           
            cid= document.myform.cid.value;
             cname= document.myform.cname.value;
            cdes= document.myform.cdes.value;
            cnum= document.myform.cnum.value;
            //send the request the server

            ob.open("GET","addc.php?id="+cid+"&name="+cname+"&des="+cdes+"&num="+cnum,true);

            ob.send();
           
        }		
        function viewdrives()
        {
            var ob=createobject();

           

            ob.onreadystatechange=function()
            {
                if(ob.readyState==4)
                    document.getElementById("slist").innerHTML=ob.responseText;	
    
            }
            //receive the value of text box
            
           
           
            
            //send the request the server

            ob.open("GET","viewdrives.php?",true);

            ob.send();
           
        }	
      function viewdrive(dno)
        {
            var ob=createobject();

           var num = dno;

            ob.onreadystatechange=function()
            {
                if(ob.readyState==4)
                    document.getElementById("slist").innerHTML=ob.responseText;	
    
            }
            //receive the value of text box
            
           
           
            
            //send the request the server

            ob.open("GET","viewdrivedetails.php?drivenum="+num,true);

            ob.send();
           
        }
        function ongoingdrive(){
    var ob=createobject();

           

ob.onreadystatechange=function()
{
    if(ob.readyState==4)
        document.getElementById("slist").innerHTML=ob.responseText;	

}
//receive the value of text box




//send the request the server

ob.open("GET","ongoingdrives.php?",true);

ob.send();

}
function completeddrive(){
    var ob=createobject();

           

ob.onreadystatechange=function()
{
    if(ob.readyState==4)
        document.getElementById("slist").innerHTML=ob.responseText;	

}
//receive the value of text box




//send the request the server

ob.open("GET","completeddrives.php?",true);

ob.send();
}
        function viewprofile(usr){
            var ob=createobject();

var num = usr;

 ob.onreadystatechange=function()
 {
     if(ob.readyState==4)
         document.getElementById("slist").innerHTML=ob.responseText;	

 }
 //receive the value of text box
 


 
 //send the request the server

 ob.open("GET","studentprofile.php?drivenum="+num,true);

 ob.send();

}

function changepass(usr){
            var ob=createobject();

var num = usr;

 ob.onreadystatechange=function()
 {
     if(ob.readyState==4)
         document.getElementById("slist").innerHTML=ob.responseText;	

 }
 //receive the value of text box
 


 
 //send the request the server

 ob.open("GET","changepass.php?usrnum="+num,true);

 ob.send();

}       
   function changepass2(){
    var ob=createobject();


 ob.onreadystatechange=function()
 {
     if(ob.readyState==4)
         document.getElementById("slist").innerHTML=ob.responseText;	

 }
 //receive the value of text box
 
 var  pass;
 pass=document.myform.passtxt.value;

 
 //send the request the server

 ob.open("GET","changepass2.php?usrpass="+pass,true);

 ob.send();
   } 
   function viewcompanydetails(id){
            var ob=createobject();

           

            ob.onreadystatechange=function()
            {
                if(ob.readyState==4)
                    document.getElementById("slist").innerHTML=ob.responseText;	
    
            }
            //receive the value of text box
            
           
            var roll =id;
            
            //send the request the server

            ob.open("GET","viewcompanydetailss.php?id="+roll,true);

            ob.send();  
        } 
        function admin(){
    var ob=createobject();


ob.onreadystatechange=function()
{
    if(ob.readyState==4)
        document.getElementById("slist").innerHTML=ob.responseText;	

}
//receive the value of text box




//send the request the server

ob.open("GET","admin.php?",true);

ob.send();
  } 
function adminmsg(){
    var ob=createobject();


ob.onreadystatechange=function()
{
    if(ob.readyState==4)
        document.getElementById("slist").innerHTML=ob.responseText;	

}
//receive the value of text box




//send the request the server

ob.open("GET","adminmsg.php?",true);

ob.send();
} 
function feed(){
    var ob=createobject();


ob.onreadystatechange=function()
{
    if(ob.readyState==4)
        document.getElementById("slist").innerHTML=ob.responseText;	

}
//receive the value of text box




//send the request the server

ob.open("GET","feed.php?",true);

ob.send();
}  
function feed2(){
    var ob=createobject();


ob.onreadystatechange=function()
{
    if(ob.readyState==4)
        document.getElementById("slist").innerHTML=ob.responseText;	

}
//receive the value of text box

var feed = document.getElementById("feedback");


//send the request the server

ob.open("GET","feed2.php?feedback"+feed,true);

ob.send();
}
function uploadresume(){
    var ob=createobject();


ob.onreadystatechange=function()
{
    if(ob.readyState==4)
        document.getElementById("slist").innerHTML=ob.responseText;	

}
//receive the value of text box




//send the request the server

ob.open("GET","uploadresume.php?feedback"+feed,true);

ob.send();
}  
function uploadFile(){
    var ob=createobject();


ob.onreadystatechange=function()
{
    if(ob.readyState==4)
        document.getElementById("slist").innerHTML=ob.responseText;	

}
//receive the value of text box

var fileName = document.getElementById('fileupload').files[0].name;
$(document).ready(function() {
            $('input[type="file"]').change(function(e) {
                var geekss = e.target.files[0].name;
                $("h4").text(geekss + ' is the selected file.');
 
            });
        });

//send the request the server

ob.open("GET","upload.php?file"+filename,true);

ob.send();
}
function news(){
    var ob=createobject();


ob.onreadystatechange=function()
{
    if(ob.readyState==4)
        document.getElementById("slist").innerHTML=ob.responseText;	

}
//receive the value of text box

var feed = document.getElementById("feedback");


//send the request the server

ob.open("GET","news.php?feedback"+feed,true);

ob.send();
} 
    </script>
</head>
<body>
    <?php
    session_start();
    $usr=$_SESSION['usr']; 
    ?>
    <div class="main">
        <div class="contant">
            <div class="logo">
                <img  style="position: relative; left: 20%;" src="images/logorm.png" height="100%">
                
            </div>
            <div class="action">
          <ul style="list-style-type:none;">
           
            <li><a href="#">Company </a>
            <div class="sub-action-com">
                <ul style="list-style-type:none;">
                 <li><a href="#" onclick=listc()>View Company</a></li>
                 
                </ul>
            </div>
            </li>
            <li><a href="#">Placement Drive</a>
                <div class="sub-action-com">
                    <ul style="list-style-type:none;">
                     <li><a href="#" onclick=viewdrives()>View All Drive</a></li>
                     <li><a href="#" onclick=ongoingdrive()>ongoing Drive</a></li>
                     <li><a href="#" onclick=completeddrive()>Completed</a></li>
                     
                    </ul>
                </div>
            </li>
            <li><a href="#">Placement news</a>
                <div class="sub-action-com">
                    <ul style="list-style-type:none;">
                     <li><a onclick=news()>View news</a></li>
                      
                    </ul>
                </div>
            </li>
            <li><a href="#">Request for update</a>
                <div class="sub-action-com">
                    <ul style="list-style-type:none;">
                     <li><a href="#" onclick="changepass('$usr')">change Password</a></li>
                     <li><a href="#">change informations</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Build Resume</a>
                <div class="sub-action-com">
                    <ul style="list-style-type:none;">
                     <li><a href="https://www.livecareer.co.uk/build-cv/section/cntc" target=slist>create</a></li>
                     <li><a href="#" onclick=uploadresume()>upload</a></li>
                    </ul>
                </div>
            </li>
          </ul>
            </div>
        </div>
        <div class="head">
            
            <ul style="list-style-type:none;">
                <li><a href="shome.php">HOME</a></li>
                <li><a href="#" onclick=admin()>CONTACT FACULTY</a></li>
                <li><a href="#" onclick=feed()>FEEDBACK</a></li>
                <li><a href="#" onclick="viewprofile('$usr')">YOU</a></li> 
                <li><a href="index.php">LogOut</a></li>
            </ul>
            
        </div>
         
         <div class="body">
         
           <span id=slist>
            
             <img src=images/welcome.jpg  width=100% height=100%></div> 
             
           </span>
          
         
    </div>
</body>
</html>