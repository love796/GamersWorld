<?php include('../header.php');
if(!isset($_SESSION['email']))
{	header('location:../login.php');}
include_once('connect.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
$opass=test_input($_POST["opass"]);
$npass=test_input($_POST["npass"]);
$cpass=test_input($_POST["cpass"]);
$result = mysqli_query ($conn , "SELECT * FROM signup WHERE Username = '".$SESSION['uname']."' and Password= '".$opass."'");
    $rows = mysqli_num_rows($result);
    if($rows > 0 ){
		if($npass>7 && $cpass > 7 && $npass==$cpass)
		{
            mysqli_query($conn,"update signup set Password = $npass where Username='".$SESSION['uname']."'");
		}
}
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
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
<div class="row">  

  <div class="col-sm-3" style="border-right:2px solid white; min-height:550px !important; padding-right:0px;">
  
    <div class="row" style="background:#EEEEEE; padding-top:10px; min-height:80px;">
       <div class="col-sm-12">
          <img src="../images/user.png" alt="img" style="float:left; height:50px;" class="img-rounded" />
          <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="input-group-addon" style="width:40px; float:right; border-radius:0px; margin-top:10px;">
               <i style="color:black;" class="glyphicon glyphicon-option-vertical"></i>
              <ul class="dropdown-menu pull-right" style="margin-top:50px;">
                 <li><a href="index.php">Profile</a></li>
                 <li class="active" href="#"><a href="settings.php">Settings</a></li>
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
          <li>Please read our <a href="#">Privacy Policy</a> once.</li>
          </ul>
       </div>
    </div>
    
  </div>

<div class="col-sm-8" id="settings">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="cp">
      <div class="container-fluid">
        <div class="row" style="margin-top:5%; color:lightgray !important;">
            <div class="col-sm-6 col-sm-offset-2" >
                <p align="center" style="padding-bottom:3%; font-size:25px;"><b>Change password</b></p>
				   <div class="row control-group">
                        <div class="form-group col-sm-10 col-xs-offset-2">
                            <label for="opass">Old Password:</label>
                            <input type="password" class="form-control home" placeholder="Old Password" name="opass" id="opass" required>
                        </div>
                    </div>
					 <div class="row control-group">
                        <div class="form-group col-sm-10 col-xs-offset-2">
                            <label for="npass">New Password:</label>
                            <input type="password" class="form-control home" placeholder="New Password" name="npass" id="npass" required>
                        </div>
                    </div>
					 <div class="row control-group">
                        <div class="form-group col-sm-10 col-xs-offset-2">
                            <label for="cpass">Confirm Password:</label>
                            <input type="password" class="form-control home" placeholder="Confirm Password" name="cpass" id="cpass" required>
                        </div>
                    </div>
			</div>
		</div>
	</div>
</form>
</div> 

</div>
</div>
<script>
  $(document).ready(function() {
	$("#post").niceScroll();
  });
</script>
<?php include('../footer.php')?>