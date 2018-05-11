<?php
$email = $_REQUEST['email'];
include_once('../profile/connect.php');
$result = mysqli_query ($conn , "SELECT * FROM signup WHERE Email = '".$email."'");
$rows = mysqli_num_rows($result);
if($rows > 0 )
{
	echo "Email already in use";
}
else{
echo "";
}
?>	