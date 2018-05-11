<?php
session_start();
include_once('../connect.php');
$game=$_POST['game'];
$chat=htmlspecialchars($_POST['chat']);
$chat=trim($chat);
if($chat!=""){
mysqli_query($conn,"UPDATE signup SET Game = '$game' WHERE Email = '$_SESSION[email]';");
if(isset($_POST['chat']))
{
	$result = mysqli_query($conn , "INSERT INTO $game
            (`Sender`,
             `Message`,
			 `Time`
			 )
VALUES ('$_SESSION[name]',
		'$chat',
		NOW()
		);");
	
	}
}
?>