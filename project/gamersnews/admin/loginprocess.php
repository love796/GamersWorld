<?php

$conn=mysqli_connect("localhost","root","","gamernews") or die("Connection Failed");

$u=$_POST['email'];
$p=$_POST['password'];

if($u=='admin@gmail.com' && $p=='admin')
{
	header('location:data.php');
}


?>
