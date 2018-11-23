<?php
$username = "";
$email_1    = "";
$password_1    = "";
$db = mysqli_connect("db.inf.uct.cl","vquiroz","vquiroz8656","vquiroz")
    
    or die	( "fallo de coneccion a mysql" . mysqli_connect_error());
    
$username = $_POST["username"];
$email_1=$_POST["email_1"];
$password_1=$_POST["password_1"];

$password = md5($password_1);//encrypt the password before saving in the database
  	$query = "INSERT INTO users (username, email, password)
     VALUES('$username','$email_1', '$password')";
     mysqli_query($db, $query);
?>