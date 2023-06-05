<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Index page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style type="text/css">
        body{
    padding: 0;
    margin: 0;
    overflow: hidden;
}
.main{
    height: 100vh;
    width: 100%;
    background-color: antiquewhite;
}
.topbar{
    height: 30vh;
    width: 100%;
    background-color: #47476b;
}
.curajlogo{
    height: 90%;
    width: 15%;
    position: relative;
    top: 5%;
    float: left;
    background-image: url(images/curaj\ logo.gif);
    background-size: 100% 100%;
}
.curajname1{
    height: 100%;
    width: 40%;
    float: left;
}
.curajname2{
    height: 100%;
    width: 45%;
    float: left;
}
.topinborder{
    height: 80%;
    width: 80%;
    position: relative;
    left: 10%;
    top: 10%;
    border-top: 2px solid white;
    border-bottom: 2px solid white;
}
.curajlogo img{
    position: relative;
    left: 10%;
    top: 10%;
}
.curajname1 h1{
    position: relative;
    top: 25%;
    color: white;
}
.curajname2 p{
    position: relative;
    left: 2%;
    top: 25%;
    color: white;
    font-size: xx-large;
    
}
.curajcampus{
    height: 8%;
    width: 100%;
    background-color: #29293d;
}
.curajcampus h1{
    text-align: center;
    position: relative;
    top: 15%;
    color: white;
    animation: rotate 25s linear infinite;
}
.no-space{
    clear: both;
    padding: 0;
    margin: 0;
}
.curajloginpart{
    height: 62vh;
    width: 100%;
    background-color: rgb(53, 71, 87);
}
.curajall{
    height: 100%;
    width: 100%;
    background-image: url(images/b4.jpg);
    background-size: 100% 100%;
    opacity: 1;
}
.loginpart{
    height: 80%;
    width: 80%;
    position: relative;
    left: 10%;
    top: 10%;
    background-color: white;
    opacity: .8;
}
.login-part1{
    height: 100%;
    width: 40%;
    float: left;
    background-image: url(images/curaj3.jpg);
    background-size: 100% 100%;
    animation: slider 20s linear infinite;
    box-shadow: 0 0 10px;
}
.login-part2{
    height: 100%;
    width: 60%;
    float: left;
    background-color: aquamarine;
}
.login-part21{
    height: 100%;
    width: 15%;
    float: left;
}
.login1{
    height: 33.33%;
    width: 100%;
    cursor: pointer;
}
.login2{
    height: 33.33%;
    width: 100%;
    cursor: pointer;
}
.login3{
    height: 33.33%;
    width: 100%;
    cursor: pointer;
}
.login1 img{
    height: 30%;
    position: relative;
    left: 38%;
    top: 20%;
}
.login2 img{
    height: 30%;
    position: relative;
    left: 38%;
    top: 20%;
}
.login3 img{
    height: 30%;
    position: relative;
    left: 38%;
    top: 20%;
}
.login1 label{
    text-align: center;
    position: relative;
    left: 38%;
    top: 30%;
}
.login2 label{
    text-align: center;
    position: relative;
    left: 32%;
    top: 30%;
}

.login3 label{
    text-align: center;
    position: relative;
    left: 20%;
    top: 30%;
}
.login1:hover{
    background-color:#00ad45;
}
.login2:hover{
    background-color:#00ad45;
}
.login3:hover{
    background-color:#00ad45;
}
.login-part3{
    height: 100%;
    width: 45%;
    float: left;
}
.login-part31{
    height: 80%;
    width: 80%;
    position: relative;
    top: 0%;
    left: 10%;
    text-align: center;
}
input{
    height: 30px;
    width: 300px;
    position: relative;
    top: 5%;
    text-align: center;
    font-size: 20px;
    border-radius: 20px;
    border: none;
    background-color:rgb(218, 214, 214);
}
.login-part31 button{
    height:30px;
    width: 300px;
    border-radius: 20px;
    border: none;
    background-color:rgb(218, 214, 214);
    font-size: 25px;
    cursor: pointer;
}
.login-part31 button:hover{
    background-color: #00ad45;
    border: none;
}
a{
    text-decoration: none;
    color: black;
    cursor: pointer;
}




@keyframes slider{
    0%{
        background-image: url(images/curaj1.jpg);
    }
    25%{
        background-image: url(images/curaj2.jpg);
    }
    50%{
        background-image: url(images/curaj3.jpg);
    }
    75%{
        background-image: url(images/curaj4.jpeg);
    }
    100%{
        background-image: url(images/curaj5.jpg);
    }

}
@keyframes rotate {
    from{
        transform: translateX(-1000px);
    }
    to{
        transform: translateX(2000px);
    }
}
@media (max-width:480px) {
    .main{
        height: auto;
        width: 100%;
    }
    .topbar{
        width: auto;
        height: 10vh;
    }
    .curajlogo{
        height: 80%;
        width: 15%;
        position: relative;
        top: 10%;
        float: left;
        background-image: url(images/curaj\ logo.gif);
        background-size: 100% 100%;
    }
    .curajname1 h1{
        position: relative;
        top: 20%;
        font-size: 12px;
    }
    .curajname2 h1{
        position: relative;
        left: 7%;
        top: 22%;
        font-size: 12px;
    }
    .curajcampus{
        height: 5%;
        width: 100%;
    }
    .curajcampus h1{
        text-align: center;
        position: relative;
        top: 20%;
        animation: rotate 15s linear infinite;
    }
    .curajloginpart{
        height: 100vh;
        width: 100%;
        background-color: rgb(53, 71, 87);
    }
    .curajall{
        height: 100%;
        width: 100%;
        background-image: url(images/b4.jpg);
        background-size: 100% 100%;
        opacity: 1;
    }
    .loginpart{
        height: 80%;
        width: 80%;
        position: relative;
        left: 10%;
        top: 02%;
        background-color: white;
        opacity: .8;
    }
    .login-part1{
        height: 50%;
        width: 100%;
        background-image: url(images/curaj3.jpg);
        background-size: 100% 100%;
        animation: slider 10s linear infinite;
        box-shadow: 0 0 10px;
    }
    .login-part2{
        height: 50%;
        width: 60%;
        background-color: aquamarine;
    }
    .login-part21{
        height: 50%;
        width: 15%;
    }
    .login1{
        height: 33.33%;
        width: 100%;
        cursor: pointer;
    }
    .login2{
        height: 33.33%;
        width: 100%;
        cursor: pointer;
    }
    .login3{
        height: 33.33%;
        width: 100%;
        cursor: pointer;
    }
    .login1 img{
        height: 30%;
        position: relative;
        left: 38%;
        top: 20%;
    }
    .login2 img{
        height: 30%;
        position: relative;
        left: 38%;
        top: 20%;
    }
    .login3 img{
        height: 30%;
        position: relative;
        left: 38%;
        top: 20%;
    }
    .login1 label{
        text-align: center;
        position: relative;
        left: 32%;
        top: 25%;
        font-size: 15px;
    }
    .login2 label{
        text-align: center;
        position: relative;
        left: 22%;
        top: 25%;
        font-size: 15px;
    }
    
    .login3 label{
        text-align: center;
        position: relative;
        left: 20%;
        top: 22%;
        font-size: 15px;
    }
    .login1:hover{
        background-color:#00ad45;
    }
    .login2:hover{
        background-color:#00ad45;
    }
    .login3:hover{
        background-color:#00ad45;
    }
    .login-part3{
        height: 0;
        width: 45%;
        float: left;
    }
    input{
        height: 20px;
        width: 250px;
        position: relative;
        top: 1%;
        left: 20px;
        text-align: center;
        font-size: 20px;
        border-radius: 20px;
        border: none;
        background-color:rgb(218, 214, 214);
    }
    .login-part31 button{
        height:30px;
        width: 250px;
        position: relative;
        left: 20px;
        border-radius: 20px;
        border: none;
        background-color:rgb(218, 214, 214);
        font-size: 25px;
        cursor: pointer;
    }
    .login-part31 h1{
        font-size: 20px;
        position: relative;
        left: 70px;
    }
}
    </style>
    
</head>
<body>
    <form name="myform" action="validation.php" method="post" >
    <div class="main">
        <div class="topbar">
            <div class="topinborder">
            <div class="curajname1">
                <h1>
                    राजस्थान केंद्रीय विश्वविद्यालय
                </h1>
            </div>
            <div class="curajlogo">
                
            </div>
            <div class="curajname2">
                <p>
                    Central University Of Rajasthan
                 </p>
            </div>
            </div>
        </div>
        <div class="curajcampus">
            <h1 class="no-space">Curaj Campus Placement Portal</h1>
        </div>
        <div class="curajloginpart">
            <div class="curajall">
                <div class="loginpart">
                    <div class="login-part1"></div>
                    <div class="login-part21">
                        
                        <div class="login1">
                            <img src="images/pngwing.com.png" ><br>
                            <label>Login</label>
                        </div>
                        <div class="login2">
                            <a href="newuser.php"><img src="images/pngwing.com (1).png"><br>
                            <label>Register</label></a>
                        </div>
                        <div class="login3">
                        <a href="forget.html">    <img src="images/icons8-forgot-password-50.png"><br>
                            
                            <label>Forgot Password?</label></a>
                        </div>
                    </div>
                    <div class="login-part3">
                        <div class="login-part31">
                            <h1>Login Here</h1>
                            <input type="text" name="usr" placeholder="Username"><br><br>
                            <input type="password" name="pass" placeholder="Password"><br><br>
                            *Captha : &nbsp;<span id="cp"> <img src="captcha.php" alt="Captcha Image"></span><input   type="text" placeholder="Xy@5" name="ctxt"><span id="vd"></span><br><br>
                            <button>Submit</button>
                            <input type="text" value="num1" name="number1" hidden>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="index.js"></script>
    </form>
</body>
</html>