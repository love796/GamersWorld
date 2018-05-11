<?php include('../header.php');
if(!isset($_SESSION['email']))
{	header('location:../login.php');}
?>
<style>
body{
	background: #37393C; 
	-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	opacity: 0.7;
}
</style>
<div class="container-fluid" style="padding-right:0px;">
<div class="row" style="width:100%;">  

  <div class="col-sm-3" style="border-right:2px solid white; min-height:550px !important; padding-right:0px;">
  
    <div class="row" style="background:#EEEEEE; padding-top:10px; min-height:80px; width:105%">
       <div class="col-sm-12">
          <img src="../images/user.png" alt="img" style="float:left; height:50px;" class="img-rounded" />
          <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="input-group-addon" style="width:40px; float:right; border-radius:0px; margin-top:10px;">
               <i style="color:black;" class="glyphicon glyphicon-option-vertical"></i>
              <ul class="dropdown-menu pull-right" style="margin-top:50px;">
                 <li class="active"><a href="#">Profile</a></li>
                <?php //<li><a href="settings.php">Settings</a></li>; ?>
                 <li><a href="http://localhost/project/logout.php">Logout</a></li>
             </ul>
             
          </span></a>
          </div>
       </div>
    </div>
    
    <div class="row">
       <div class="col-sm-12" id="list" style="overflow-y:auto;">
          <h1 style="color:black; text-align:center">#Tips</h1>
          <br />
          <ul style="color:black;">
          <li>Click on the dropdown icon in top of this pane to logout.</li>
          <li>Click on zoomico icon in top left corner to enlarge the chat area.</li>
          <li>Chat about a specific game in its dedicated chatroom.</li>
          <li>Donot share any personal information in chatroom.</li>
		  <li>You can contact us in feedback section. Feel free to ask your queries.</li>
          <li>Please read our <a href="#">Privacy Policy</a> once. <?php echo $_SESSION['name'];?></li>
          </ul>
       </div>
    </div>
    
  </div>

<div class="col-sm-8" id="post" style="overflow-y:auto;">
    <?php
include_once("../scripts/connect.php");
$result=mysqli_query($conn,"select * from changes");
while($test=mysqli_fetch_array($result))
{
	$id=$test['ID'];
	$date=new DateTime($test['Date']);
	echo "<div class='col-sm-8 col-sm-offset-2' style='background:black; margin-top:5%; border-radius:5px'>";
	echo "<p style='font-size:25px; color:white'>".$test['Heading']."</p><hr>";
	echo "<p style='font-size:26px; color:lightgray; word-wrap: break-word;'>".$test['Description']."</p>";
	echo "<p style='float:right'>".$date->format('d:m:Y')."</p>";
	echo "</div>";
}
?>

</div> 

</div>
</div>
<script>
  $(document).ready(function() {
	$("#post").niceScroll();
  });
</script>
<?php include('../footer.php')?>