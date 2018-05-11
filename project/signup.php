<?php 
include('header.php');
include('scripts/signupprocess.php');
?>
    <style>
	body{
		background-image:url(images/signupbg.jpg);
		 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	opacity: 0.7;
	background-size: 100% 100%;
	}
	.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 2px solid black;
    border-radius: 4px;
	}
	</style>  

    <div class="container-fluid">
        <div class="row" style="min-height:547px; color:lightgray !important;">
            <div class="col-lg-8" >
                <p align="center" style="padding-top:20px;font-size:25px;"><b>Sign Up</b></p>
               
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="signup" style="padding-top:40px;">
                <p class="text-danger col-xs-offset-2"><?php echo $ec;?></p>
                    <div class="row control-group">
                        <div class="form-group col-sm-8 col-sm-offset-2">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" id="name" value="<?php echo $name;?>" required>
                            <p id="ename" class="text-danger"></p>
                        </div>
                    </div>
                    
                    
                    <div class="row control-group">
                        <div class="form-group col-sm-8 col-sm-offset-2">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email Address" id="email" value="<?php echo $email;?>" required>
                            <p id="eemail" class="text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-sm-8 col-sm-offset-2">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
                            <p id="epass" class="text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-sm-8 col-sm-offset-2">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" id="cpassword" required>
                            <p id="ecpass" class="text-danger"></p>
                        </div>
                    </div>
                    
                   <div class="row control-group">
                        <div class="form-group col-sm-8 col-sm-offset-2">
                            <input type="checkbox" name="agree" value="agree" id="agree" required> 
                            <label for="agree">I agree to the <a href="privacypolicy/">Privacy police</a> of GamersWorld</label>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="form-group col-sm-8 col-sm-offset-2">
                            <button type="submit" id="button" class="btn btn-primary button">Sign Up</button>
                        

                        </div>
                        
                    </div>
                    
                   
                    
                </form>     
            </div>
        </div>
    </div>
  

<script src="scripts/validate.js"></script>
<?php include('footer.php');?>