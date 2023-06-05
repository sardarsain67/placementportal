<!DOCTYPE html>
<html>
<head>
    <title>Logo Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style type="text/css">
        .main {
            background-color: green;
            width: 100%;
            height: 100vh;
        }
        
        .c2 {
            background-color: grey;
            height: 30%;
        }
        
        .new {
            background-color: white;
            height: 70%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .new b {
            text-align: center;
        }
    </style>
    <script type="text/javascript">
        function createobject() {
            var ob;
            try {
                // Create the object
                ob = new XMLHttpRequest();
            } catch (e) {
                try {
                    ob = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                    try {
                        ob = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (e) {
                        alert("Your browser does not support JavaScript");
                    }
                }
            }
            return ob;
        }

        function newuser() {
            var ob = createobject();
            
            ob.onreadystatechange = function () {
                if (ob.readyState == 4) {
                    document.getElementById("new").innerHTML = ob.responseText;
                }
            };
            
            ob.open("GET", "studentragister.html", true);
            ob.send();
        }
    </script>
</head>
<body>
    <form name="myform">
        <div class="main">
            <div class="c2">
                <h1 class="text-center text-white">CURAJ CAMPUS PLACEMENT PORTAL</h1>
                <h2 class="text-center text-white">&lt;&lt;&lt; REGISTRATION PAGE &gt;&gt;&gt;</h2>
                <p class="text-center">
                    Register as
                    <a href="studentragister.html" onclick="newuser()" class="text-white">Student</a>
                    <span class="mx-1 text-white">|</span>
                    <a href="facultyregister.html" class="text-white">Faculty</a>
                </p>
            </div>
            <div class="new">
                <span id="new">
                    <b>Select your role</b>
                    <br>
                    Please enter all your details
                </span>
            </div>
        </div>
    </form>
</body>
</html>
