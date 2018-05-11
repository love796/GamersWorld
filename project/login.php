<?php
include('header.php');
include_once('scripts/connect.php');
if(@$_POST['login'])
{
$u=$_POST['email'];
$p=$_POST['password'];
if($u=='gamers@admin.com' && $p=='admin')
{
	$_SESSION['email']=$u;
	$_SESSION['admin']='yes';
	$_SESSION['name']='Admin';
	header('location: admin/');
}
else{
$query="select Name from signup WHERE Email='".$u."' AND Password='".$p."'";
$result=mysqli_query($conn,$query);
$test=mysqli_fetch_array($result);
$rows=mysqli_num_rows($result);
if($rows>0)
{
	$_SESSION['email']=$u;
	$_SESSION['name']=$test['Name'];
	$_SESSION['pass']=$p;
	mysqli_query($conn,"UPDATE signup SET Status = '1' WHERE Email = '$u';");
	header('location: profile/');	
}
else{
@$err="<font color='red'>Invalid user login</font>";
}
}
}
 ?>
<style>
body{
    background-image:url(images/loginbg.jpg);
     -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	opacity: 0.7;
 
</style>

    <div class="container-fluid">
        <div class="row" style="min-height:547px;">
        <div class="col-sm-5"></div>
            <div class="col-sm-7" style="color:white">
                <p align="center" style="padding-top:4%; color:blue; font-size:25px;"><b>Login</b></p>
                
                <form name="Login" method="post" id="login"  style="padding-top:3%;">
                    <div class="row control-group">
                        <div class="form-group col-sm-8 col-sm-offset-2">
                            <?php echo @$err;?><br>
                            <label for="email">Email Address</label>
                            <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input type="email" class="form-control home" name="email" placeholder="Email Address" id="email" required >
                            </div>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-sm-8 col-sm-offset-2">
                            <label for="password">Password</label>
                            <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                               <input type="password" class="form-control home" name="password" placeholder="Password" id="password" required>
                            </div>
 
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-sm-8 col-sm-offset-4">
                            <input type="submit" name="login" class="btn btn-primary button" value="Login" style="margin-right:50px;">
							</form>
                            <a href="signup.php"><button class="btn btn-primary button">Register</button> </a>
   
 
                        </div>
                    </div>
                
               
                   
 
            </div>
        </div>
    </div>
 
<?php include('footer.php'); ?>