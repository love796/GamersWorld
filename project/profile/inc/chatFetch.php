<?php
include_once('../connect.php');
session_start();
$game=$_POST['game'];
$result= mysqli_query($conn , "SELECT * FROM $game");
while ($row = mysqli_fetch_assoc($result)){
	if($row['Sender']==$_SESSION['name']){
		echo "<div class='row'><div id='msgbox_u'>".$row['Message']."</div></div><br>";
	}
	else{
	echo "<div id='msgbox'><div style='color:cyan;'>".$row['Sender'].":</div>";
	echo $row['Message']."</div><br>";
	}
	}
?>