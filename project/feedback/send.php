<?php
$conn=mysqli_connect("localhost","root","","gamersworld") or die("connection failed");
$uname=$_POST['uname'];
$email=$_POST['email'];
$query=$_POST['query'];
$desc=$_POST['description'];
$query=("insert into feedback(Username,Email,Query,Description) values('$uname','email','$query','$desc')") or die(mysqli_error());
$result=mysqli_query($conn,$query);
header('location: index.php');
?>