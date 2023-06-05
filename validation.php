
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Captcha Generation</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>
<body style="margin-top: 100px;">
<?php 
    $number1=$_POST['number1'];
    $number2=$_POST['ctxt'];
    $usr=$_POST['usr'];
    $pass=$_POST['pass'];
    session_start();
    $captcha = $_POST['ctxt'];
    $check = false;
    $_SESSION['usr']=$usr;
    if (isset($_SESSION['captcha'])) {
        // Case sensitive Matching
        if ($captcha == $_SESSION['captcha']) {
            $check = true;
        }
        unset($_SESSION['captcha']);
    }

 ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="panel">
                    <hr>
                    <div style="text-align: center;">
                        <?php if ($check):{
                            if(!empty($_SESSION['usr'])){
                            include('myconnection.php');
                            $sql="select * from faculty where f_uname='$usr' and f_pass='$pass'";
                            $result=mysql_query($sql);
                            if($row=mysql_fetch_array($result)){
                               echo"welcome";
                            header('location: fhome.php');
                            }
                            else {
                             $sql="select * from student where s_uname='$usr' and s_pass='$pass'";
                            $result=mysql_query($sql);
                            if($row=mysql_fetch_array($result)){
                             header('location: shome.php');
                            }
                            else
                             echo"user not found";
                            }
                        }
                        else{
                            echo"user not found";
                        }
                    }
                    
                          
                             
                            ?>
                         
                            
                        <?php else:
                            {
                                echo '<script>alert("enter same capctha code")</script>';
                                 header('location: index.php');
                            }
                            ?>
                           
                        <?php endif ?>
                        <br><br>
                        <h4><a href="index.php">try Again</a></h4>
                        <hr><br>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>