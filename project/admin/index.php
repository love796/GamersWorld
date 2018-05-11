<?php include('../header.php');
if(!isset($_SESSION['admin'])){
	header('location: ../login.php');
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
<div class="row" style="width:100%">  

  <div class="col-sm-3" style="border-right:2px solid white; height:700px; ">
  
    <div class="row" style="background:#EEEEEE; padding-top:10px; min-height:77px; margin-bottom:6%;">
       <div class="col-sm-12">
          <img src="../images/user.png" alt="img" style="float:left; height:50px;" class="img-rounded" />
          <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="input-group-addon" style="width:40px; float:right; border-radius:0px; margin-top:10px;">
               <i style="color:black;" class="glyphicon glyphicon-option-vertical"></i>
              <ul class="dropdown-menu pull-right" style="margin-top:50px;">
                 <li><a href="../categories/">Add game</a></li>
                 <li><a href="#">Profile</a></li>
                 <li><a href="#">Settings</a></li>
                 <li><a href="../logout.php">Logout</a></li>
             </ul>
             
          </span></a>
          </div>
       </div>
    </div>
    
    <div class="row">
       <div class="col-sm-12" style="min-height:450px;">
          <ul class="nav nav-pills nav-stacked">
             <li class="active lst"><a data-toggle="pill" href="#profile">Profile</a></li>
             <li class="lst"><a data-toggle="pill" href="#addc">Add Category</a></li>
             <li class="lst"><a data-toggle="pill" href="#settings">Settings</a></li>
             <!--<li class="lst"><a  href="leave.php">Leave</a></li>-->
             
          </ul>
       </div>
    </div>
    
  </div>
 
  <div class="col-sm-9">
  
      <div class="tab-content">
         <div id="addc" class="tab-pane fade in">
             <?php include('addc.php');?>
         </div>
         
         <div id="profile" class="tab-pane fade in active">
            <?php include('profile.php');?>
        </div>
        
       <div id="settings" class="tab-pane fade in">
 
       </div>
       <div class="col-sm-10" style="font-size:16px; color:yellow;"><?php echo @$msg;?></div>
    </div>
    
  </div>
  
</div>
</div>

<?php include('../footer.php')?>