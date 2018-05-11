<?php
include("../header.php");
?>
<style>
.bordered{ border-left:2px solid white; padding-left:10px;}
.col-sm-3{
padding-left:0px;
padding-right:0px;  
}
.col-sm-10{
padding-left:0px;
padding-right:0px;  
}
body{
background-color:black;
}
</style>
<div class="conatiner-fluid">
<div class="col-sm-2">
   <p style="margin-left:10px; margin-top:20px; font-family:'MS Serif', 'New York', serif; font-size:20px; ; color:white; "> Union Of Gamers</p>
<hr>
<img src="union.jpg" width="200px" height="200px"  class="img-responsive">
   <br><br>
<br>
 <form action="../signup.php" method="delete">
<button class="btn btn-primary" type="submit" style="margin:20px;" name="signup">Join Community</button><br>
 </form>
   <p style="margin-left:10px; font-family:'MS Serif', 'New York', serif; font-size:18px; ; color:white; "> Join now and easily access your favorites here.</p>

 
 
</div>

<div class="col-sm-10 bordered" style="padding-bottom:1px;">
     <?php
include_once("../scripts/connect.php");
$result=mysqli_query($conn,"select * from categories");
while($test=mysqli_fetch_array($result))
{
	$id=$test['ID'];
	echo "<div class='col-sm-3'>";
	echo "<a href='categories.php?ID=$id'><img src='../admin/".$test['Cover']."' class='img-responsive' /></a>";
	echo "</div>";
}
?>
   
</div>
 
</div>

<?php
include('../footer.php');
?>