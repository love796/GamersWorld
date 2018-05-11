<?php 
$name = $email = $password = $cpassword = "";
$ename = $eemail = $epass = $ecpass =0;
$ec="";
$mname = $memail = $mpass = $mcpass ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name=test_input($_POST["name"]);
	$email=test_input($_POST["email"]);
	$password=test_input($_POST["password"]);
	$cpassword=test_input($_POST["cpassword"]);
	
if(!preg_match("/^[a-zA-Z ]*$/",$name)){
	$ename=1;
}
else{$ename=0;}


if(filter_var($email, FILTER_VALIDATE_EMAIL)){
	include_once('profile/connect.php');
    $result = mysqli_query ($conn , "SELECT * FROM signup WHERE Email = '".$email."'");
    $rows = mysqli_num_rows($result);
    if($rows > 0 ){
	    $eemail=1;	
    }
}
else{$eemail=0;}

if(strlen($password)<8){
	$epass=1;
}
else{$epass=0;}

if($password!=$cpassword){
	$ecpass=1;
}
else{$ecpass=0;}
if($ename || $eemail || $epass || $ecpass){
	$ec="Please fill out the information correctly";
	}
	else{
include_once('connect.php');
mysqli_query($conn,"insert into signup(Name,Email,Password) values('$name','$email','$password')");
mysqli_query($conn,"update stats set Users = Users + 1 where ID='1'");
header("location:login.php");
	}
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>
