<?php
include('../header.php');
?>
<style>
.bordered{ border-left:2px solid white;}
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
h4{
	letter-spacing:2px;
	text-align:justify;
	
	
	
}
</style>
<div class="conatiner-fluid">
<div class="col-sm-2">
   <p style="margin-left:10px; margin-top:20px; font-family:'MS Serif', 'New York', serif; font-size:20px; ; color:white; "> Union Of Gamers</p>
<hr>

<img src="union.jpg" width="200px" height="200px"  class="img-responsive">
   <br><br>
<br>

&nbsp;&nbsp;<a href="../signup.php"><button class="btn btn-primary" name="signup">Join Community</button><br></a>
<br>
<br>
<br>

   <p style="margin-left:10px; font-family:'MS Serif', 'New York', serif; font-size:18px; ; color:white; "> Join now and easily access your favorites here.</p>
<br>
<br>
<br>
<br>


</div>

<div class="col-sm-10 bordered" style="background-color:black; padding-top:150px; min-height:560px; color:white; font-family:'MS Serif', 'New York', serif">
      <div class="col-sm-2">
      <?php
include_once("../scripts/connect.php");
$id=$_REQUEST['ID'];
$result=mysqli_query($conn,"select * from categories where ID=$id");
$test=mysqli_fetch_array($result);
      echo "<img src='../admin/".$test['Cover']."'   class='img-thumbnail'>";
	  ?>
      </div>
      <div class="col-sm-8">
      <h4><?php echo $test['Description']?></h4>
      <br>
      <br>
<form method="post" action="../profile/chatroom.php?game=<?php echo $test['GameID'];?>">
<button type="submit" class="btn btn-primary" name="submit">Join Room</button>

      </div>
</div>    
<br>
<br>
  
<?php
include('../footer.php')

?>