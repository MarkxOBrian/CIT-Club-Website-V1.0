<?php
include 'dbconnect.php';

$uname=$_POST['username'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['msg'];

$sql_insert=mysqli_query($db_connect,"INSERT INTO contact(user_name,email,subject,message) VALUES('$uname','$email','$subject','$message')");

if(!$sql_insert){
	echo "<script>alert('Message could not be sent. Please contact system admin!');</script>";
	header("Refresh:0;url=index.html");
}
else{
echo "<script>alert('Message sent sucessfully!');</script>";
header("Refresh:0;url=index.html");
}

?>