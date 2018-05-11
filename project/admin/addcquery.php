<?php
include('../../scripts/connect.php');
$name=$_POST['name'];
$desc=$_POST['desc'];
$id=$_POST['gameid'];
$file=$_FILES['path']['name'];
$path='images/'.$file;
move_uploaded_file($_FILES['path']['tmp_name'],$path);
$query=("insert into categories(GameID,Name,Description,Cover) values('$id','$name','$desc','$path')") or die(mysqli_error());
$result=mysqli_query($conn,$query);
mysqli_query($conn,"update stats set Categories = Categories + 1 where ID='1'");
mysqli_query($conn,"CREATE TABLE $id (
ID INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Sender VARCHAR(100) NOT NULL,
Message VARCHAR(1000) NOT NULL,
Time TIME )");
header('loaction:index.php');
?>