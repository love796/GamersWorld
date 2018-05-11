<?php
session_start();
$conn=mysqli_connect("localhost","root","","gamernews") or die("Connection Failed");
if(@$_POST['login'])
{
$u=$_POST['email'];
$p=$_POST['password'];

if($u=='gamers@admin.com' && $p=='admin')
{
	$_SESSION['user']=$u;
	header('Location:data.php');
}


else{
@$err="Invalid user login";	
	header('location:login.php?err='.$err);
}
}
?>

<?php
	include('header.php');
	
	?>
<style>
body{
    background-image:url(b2.jpg);
     background-size:cover;
     background-repeat:no-repeat;
    width:100%;
    height:auto;
	color:white !important;
}
 
</style>



    <div class="container-fluid">
        <div class="row" style="min-height:547px;">
        <div class="col-sm-5"></div>
            <div class="col-sm-7 pull-right" style="color:white">
                
                <form   method="post"  id="login"  style="padding-top:40px;">
                    <div class="row control-group ">
                        <div class="form-group col-sm-8 pull-right">
                            <?php echo @$err;?><br>
                            <label for="email">Email Address</label>
                            <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input type="email" class="form-control home" name="email" placeholder="Email Address" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-sm-8 pull-right">
                            <label for="password">Password</label>
                            <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                               <input type="password" class="form-control home" name="password" placeholder="Password" id="password" required>
                            </div>
 
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-sm-8 pull-right">
                            <input type="submit" name="login" class="btn btn-primary button" value="Login" style="margin-right:50px;">
                            
   
 
                        </div>
                    </div>
                </form>
               
                   
 
            </div>
        </div>
    </div>
 