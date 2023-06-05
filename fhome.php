<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome in portal</title>
    <link rel="stylesheet" href="fhome.css">
    <style>
    .head ul li a {
        transition: all 0.3s ease;
        box-shadow: 0 0 0 rgba(0, 0, 0, 0.2);
        padding: 4px;
    }
    
    .head ul li a:hover {
        background-color: #f8f8f8;
        color: #333;
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>
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

            ob.open("GET","adds.php?",true);

            ob.send();
           
        }
        function views(enr)
        {
            var ob=createobject();

           

            ob.onreadystatechange=function()
            {
                if(ob.readyState==4)
                    document.getElementById("slist").innerHTML=ob.responseText;	
    
            }
            //receive the value of text box
            
           
            var roll =enr;
            
            //send the request the server

            ob.open("GET","views.php?enroll="+roll,true);

            ob.send();
           
        }
       	
        function viewprofile(enr)
        {
            var ob=createobject();

           

            ob.onreadystatechange=function()
            {
                if(ob.readyState==4)
                    document.getElementById("slist").innerHTML=ob.responseText;	
    
            }
            //receive the value of text box
            
           
            var roll =enr;
            
            //send the request the server

            ob.open("GET","viewprofile.php?enroll="+roll,true);

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
          

           confirm('you want to add this ?');

//send the request the server


       ob.open("GET","add.php?enroll="+roll,true);

       ob.send();
       

       }

       /*/function  function dels1(enr){
           
        confirm("Press a button!");
           var roll =enr;
          

           if (confirm("Press a button!") == true) {
            dels(roll);
         } else {
           
        }

       }
       */

        function dels(enr,resume,profile){
           
            var ob=createobject();

           

            ob.onreadystatechange=function()
           {
          if(ob.readyState==4)
           document.getElementById("slist").innerHTML=ob.responseText;	

        }
        //receive the value of text box
            var roll =enr;
           var res=resume;
           var pro= profile;

            confirm('you want to delete this ?');

//send the request the server


        ob.open("GET","del.php?enroll="+roll+"&resume="+res+"&profile="+pro,true);

        ob.send();
        

        }
        function delst(enr){
           
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


       ob.open("GET","delst.php?enroll="+roll,true);

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

            ob.open("GET","company.php?",true);

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

ob.open("GET","addcompany2.html?",true);

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
            clogo= document.myform.clogo.value;

            //send the request the server

            ob.open("GET","addc.php?id="+cid+"&name="+cname+"&des="+cdes+"&num="+cnum+"&logo="+clogo,true);

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

            ob.open("GET","viewcompanydetails.php?id="+roll,true);

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

            ob.open("GET","viewdrive.php?",true);

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

            ob.open("GET","viewdrivedetail.php?drivenum="+num,true);

            ob.send();
           
        }
        function adddrive(){
        var ob=createobject();

           

ob.onreadystatechange=function()
{
    if(ob.readyState==4)
        document.getElementById("slist").innerHTML=ob.responseText;	

}
//receive the value of text box




//send the request the server

ob.open("GET","adddrive.php?",true);

ob.send();

}
	
function adddrive2(){
        var ob=createobject();

           

ob.onreadystatechange=function()
{
    if(ob.readyState==4)
        document.getElementById("slist").innerHTML=ob.responseText;	

}
//receive the value of text box
var cname,drivenum,program1,program2,program3,stream1,stream2,stream3,batch1,batch2,currper,courseper,back,minlpa,maxlpa,date,date1,desg,post,cdesc,link;
//cname=document.myform.cname.value;
cname=document.myform.cname.value;

drivenum=document.myform.drivenum.value;
program1=document.myform.program1.value;
program2=document.myform.program2.value;
program3=document.myform.program3.value;
stream1=document.myform.stream1.value;
stream2=document.myform.stream2.value;
stream3=document.myform.stream3.value;
batch1=document.myform.batch1.value;
batch2=document.myform.batch2.value;
currper=document.myform.currper.value;
courseper=document.myform.courseper.value;
back=document.myform.back.value;
minlpa=document.myform.minlpa.value;
maxlpa=document.myform.maxlpa.value;
date=document.myform.date.value;
datel=document.myform.datel.value;
desg=document.myform.desg.value;
post=document.myform.post.value;
cdesc=document.myform.cdesc.value;
link=document.myform.link.value;

//program1=document.getElementById("c1").value;

//send the request the server

ob.open("GET","adddrive2.php?cname="+cname+"&drivenum="+drivenum+"&program1="+program1+"&program2="+program2+"&program3="+program3+"&stream1="+stream1+"&stream2="+stream2+"&stream3="+stream3+"&batch1="+batch1+"&batch2="+batch2+"&currper="+currper+"&courseper="+courseper+"&back="+back+"&minlpa="+minlpa+"&maxlpa="+maxlpa+"&date="+date+"&datel="+datel+"&desg="+desg+"&post="+post+"&cdesc="+cdesc+"&rlink="+link,true);

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

ob.open("GET","ongoingdrive.php?",true);

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

ob.open("GET","completeddrive.php?",true);

ob.send();
}
function EnableDisableTextBox3() 
          {
           
            document.getElementById("minlpa").disabled = true;
     }	
function EnableDisableTextBox2() 
          {
           
            document.getElementById("minlpa").disabled = false;
     }
    
function EnableDisableTextBox() 
          {
            var x=document.myform.backlog.value;
            if(x=="back"){
            document.getElementById("back").disabled = false;
            }
            else{
            document.getElementById("back").disabled = true;
            }
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
   function viewprofile2(usr){
            var ob=createobject();

var num = usr;

 ob.onreadystatechange=function()
 {
     if(ob.readyState==4)
         document.getElementById("slist").innerHTML=ob.responseText;	

 }
 //receive the value of text box
 


 
 //send the request the server

 ob.open("GET","facultyprofile.php?drivenum="+num,true);

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
function addnews(){
    var ob=createobject();


ob.onreadystatechange=function()
{
    if(ob.readyState==4)
        document.getElementById("slist").innerHTML=ob.responseText;	

}
//receive the value of text box

var feed = document.getElementById("feedback");


//send the request the server

ob.open("GET","addnews.html?feedback"+feed,true);

ob.send();
} 

    </script>
    <style>
        
        </style>
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
            <li class="active"><a href="#">Student</a>
                <div class="sub-action-com">
                    <ul style="list-style-type:none;">
                     <li><a href="#" onclick=slist() >View Students</a></li>
                     <li><a href="#" onclick=sadd() >Add new</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Company </a>
            <div class="sub-action-com">
                <ul style="list-style-type:none;">
                 <li><a href="#" onclick=listc()>View Company</a></li>
                 <li><a href="#" onclick=addc() >Add new</a></li>
                </ul>
            </div>
            </li>
            <li><a href="#">Placement Drive</a>
                <div class="sub-action-com">
                    <ul style="list-style-type:none;">
                     <li><a href="#" onclick=viewdrives()>View All Drive</a></li>
                     <li><a href="#" onclick=ongoingdrive()>ongoing Drive</a></li>
                     <li><a href="#" onclick=completeddrive()>Completed</a></li>
                     <li><a href="#" onclick=adddrive()>Add new</a></li>
                    </ul>
                </div>
            </li>
            <li ><a href="#">Placement news</a>
                <div class="sub-action-com">
                    <ul style="list-style-type:none;">
                     <li><a  onclick=news()>View news</a></li>
                     <li><a  onclick=addnews()>Add new</a></li>
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
          </ul>
            </div>
        </div>
        <div class="head">
            
            <ul style="list-style-type:none;">
                <li><a href="fhome.php">HOME</a></li>
                <li><a href="#"  onclick=admin()>CONTACT ADMIN</a></li>
                <li><a href="#" onclick=feed()>FEEDBACK</a></li>
                <li><a href="#" onclick=viewprofile2()>YOU</a></li>
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