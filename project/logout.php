 <?php 
include_once('profile/connect.php');
session_start();
mysqli_query($conn, "UPDATE signup SET Status = '0' WHERE Email = '$_SESSION[email]';");
mysqli_query($conn,"UPDATE signup SET Game = '' WHERE Email = '$_SESSION[email]';");
session_destroy();
header('location: http://localhost/project');

?>