<?php 
$conn=mysqli_connect("localhost","root","","gamernews");
$id=$_REQUEST["id"];
$desc=$_POST["desc"];
$link=$_POST["link"];
$file=$_FILES["path"]["name"];
$path="uploads/".$file;
move_uploaded_file($_FILES["path"]["tmp_name"],$path);
mysqli_query($conn,"insert into data values('$id','$link','$desc','$path')");
header("location:data.php");
?>
