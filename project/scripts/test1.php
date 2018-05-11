<?php
$email = $_REQUEST['uname'];
include_once('../profile/connect.php');
$result = mysqli_query ($conn , "SELECT * FROM signup WHERE Username = '".$email."'");
$rows = mysqli_num_rows($result);
if($rows > 0 )
{
	echo "Username already taken";
}
else{
echo "";
}
?>	