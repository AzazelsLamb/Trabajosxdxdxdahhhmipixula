<?php
$con = mysqli_connect("db.inf.uct.cl","vquiroz","vquiroz8656","vquiroz")

    
    or die	( "fallo de coneccion a mysql" . mysqli_connect_error());
    

$username = $_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];




$insertar=  "INSERT INTO users (username, email, password) VALUES('$username','$email','$password')";
mysqli_query($con,$insertar);
?>