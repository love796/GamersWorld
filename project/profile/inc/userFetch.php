<?php
include_once('../connect.php');
session_start();
$game=$_POST['game'];
$result= mysqli_query($conn , "SELECT * FROM signup where Game='$game'");
while ($row = mysqli_fetch_assoc($result)){
	echo "<div class='user-list'>".$row['Name']." (Online)"."</div>";
	}

?>