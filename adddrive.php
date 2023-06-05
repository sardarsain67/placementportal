<html>

<head>
    <title>index page</title>
    <link rel="stylesheet" href="style.css">
    <script type=text/javascript>
    function EnableDisableTextBox() 
          {
            alert("hello");
           var x= document.myform.backlog.value;
           if(x==back){
         alert("test");
           }
        
     }	
       
     </script>  
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

        .mainsecond {
            background-color: #f8f8f8;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .first {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        table {
            height: 100%;
            width: 100%;
        }

        td {
            padding: 10px;
        }

        select {
            width: 20%;
        }

        .checkbox-group {
            display: flex;
            gap: 10px;
        }

        .checkbox-group label {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
        }

        input[type="date"] {
            position: relative;
            left: 20%;
        }

        .btn-create {
            background-color: #e29016;
            height: 30%;
            width: 10%;
            position: relative;
            left: 20%;
            cursor: pointer;
        }

        .btn-cancel {
            background-color: #3f3b3b;
            height: 30%;
            width: 10%;
            position: relative;
            left: 20%;
            cursor: pointer;
        }
        
    </style>  
    <style type="text/css">
        body {
            width: 100%;
            margin: auto;
        }
        
        .mainsecond {
            overflow-x: hidden;
        }
        
        table {
            width: 100%;
        }
        
        input[type="text"],
        input[type="date"],
        select {
            width: 70%;
        }
        
        textarea {
            width: 70%;
            resize: vertical;
        }
        
        .button-container {
            text-align: center;
        }
        
        .button-container input[type="button"],
        .button-container button {
            width: 30%;
        }
    </style>                   
</head>

<body>
    <form name=myform method=get>
        <?php
        include('myconnection.php');
        $sql="select* from company_master";
        $result=mysql_query($sql);
        ?>
        <div class="main">
            <div class="mainsecond">
                <div class="first">
                    <table style="height: 100%; width: 100%;;">
                        <tr>
                            <td>
                                <a>Name</a>
                            </td>
                            <td>
                                <select style="width: 20%;" name=cname>
                                    <?php
                                 while($row=mysql_fetch_array($result)){
                                    echo"<option>$row[1]</option>";
                                 }
                                ?>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                 Drive Number
                                </td>
                                <td>
                                <input type=text name=drivenum>
                                </td>
                                </tr>
                        <tr>
                            <td>
                                <a>Programs</a>
                            </td>
                            <td>
                            <input type="checkbox" id="c1" name="program1" value="Bachelor">Bachelor
                            <input type="checkbox" id="c1" name="program2" value="Master">Master
                            <input type="checkbox" id="c1" name="program3" value="Phd">Phd
                           
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a>Stream</a>
                            </td>
                            <td>
                                
                                    <input type="checkbox" id="c2" name="stream1" value="Computer Science and Engineering">Computer Science and Engineering
                                    <input type="checkbox" id="c2" name="stream2" value="Elecronic & Communication Engineering">Elecronic & Communication Engineering
                                    <input type="checkbox" id="c2" name="stream3" value="BME">BME


                               
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a>Batch</a>
                            </td>
                            <td>
                                <select style="width: 20%;" name=batch1>

                                    <option value=2019>2019</option>
                                    <option value=2020>2020</option>
                                    <option value=2021>2021</option>
                                    <option value=2022>2022</option>
                                    <option value=2023>2023</option>
                                </select>
                                -
                                <select style="width: 20%;" name=batch2>

                                <option value=2019>2019</option>
                                    <option value=2020>2020</option>
                                    <option value=2021>2021</option>
                                    <option value=2022>2022</option>
                                    <option value=2023>2023</option>
                             </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a>Criteria</a>
                            </td>
                            <td>
                                <input type="checkbox" id="vehicle1" name="pert" value="per" >Percentage
                                <input type=text name=currper placeholder="required current %"> &nbsp <input type=text
                                    name=courseper placeholder="required course %"><br><br>
                                    <label for="backl">
                               <input type="checkbox" id="backl" name="backlog" value="back" onclick="EnableDisableTextBox()">Backlogs
                               </label>
                                &nbsp<input type=text id=back name=back placeholder=backlogs disabled >
                               
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a>Package</a>
                            </td>
                            <td>
                                <a><input type="radio" name="sal" id="sal" value="lpa" onclick="EnableDisableTextBox3()"  checked > Fix <input type="radio" name="sal"
                                        value="lpas" onclick="EnableDisableTextBox2()" >Range</a>
                                  
                                
                                <select name=minlpa id=minlpa disabled>
                                    <option value=4>4 lacs</option>
                                    <option value=5>5 lacs</option>
                                    <option value=6>6 lacs</option>
                                    <option value=7>7 lacs</option>
                                </select>
                                -
                                <select name=maxlpa>

                                <option value=5>5 lacs</option>
                                    <option value=6>6 lacs</option>
                                    <option value=7>7 lacs</option>
                                    <option value=8>8 lacs</option>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a>Date of Drive</a>
                            </td>
                            <td>
                                <input style="position: relative;left: 20%;" type="date" name="date">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a>Last Date of Application</a>
                            </td>
                            <td>
                                <input style="position: relative;left: 20%;" type="date" name="datel">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a>Designations</a>
                            </td>
                            <td>
                                <select name=desg>
                                    <option value="Executive Engineering">Executive Engineering</option>
                                    <option value="Software Developer">Software Developer</option>
                                    <option value="salesforce developer">salesforce developer</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Posts
                                </td>
                                <td>
                                   <input type=text name=post placeholder=requied>
                                </td>
                                </tr>
                        <tr>
                            <td>
                
                                <a>Description</a>
                            </td>
                            <td>
                                <textarea style="position: relative;left: 20%;" cols="80" rows="5" name=cdesc></textarea><br>
                                </td>
                                </tr>
                                <tr>
                                 <td> Registration link &nbsp </td>
                                 <td><input type=text name=link></td>
                                </tr>
                                <tr>
                                    <td colspan=2>
                                <input type=button 
                                    style="background-color: rgb(226, 144, 22); height: 30%;width: 10%; position: relative;left: 20%;" value=CREATE onclick=adddrive2()>
                                &#160 &#160 <button
                                    style="background-color: rgb(63, 59, 59);  height: 30%;width: 10%; position: relative;left: 20%;">CANCEL</button>
                            </td>
                        </tr>




                </div>
            </div>
        </div>
    </form>
</body>

</html>