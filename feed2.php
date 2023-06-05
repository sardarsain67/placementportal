<?php
$feed=$_GET['feedback'];
include('myconnection.php');
session_start();
$usr=$_SESSION['usr'];

echo"<br><br><br><center><h1>Thank you $usr </h1> for you feedback</center>";
?>