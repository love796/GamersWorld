<?php include('../header.php');
if(!isset($_SESSION['email'])){
		header('location: ../login.php');
		}
?>


<style>
body{
	background: url(bg.jpg) no-repeat center center fixed; 
	-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	opacity: 0.7;
}
</style>

<div class="container-fluid" style="min-height: 547px">

   <div class="row">
   
     <div class="col-sm-2" style="margin-top:30px;">
     <?php
	 $id=$_REQUEST['game'];
     include_once('connect.php');
     mysqli_query($conn,"UPDATE signup SET Game = '$id' WHERE Email = '$_SESSION[email]';");
	 $result=mysqli_query($conn,"select * from categories where GameID='$id'");
     $test=mysqli_fetch_array($result);
     echo "<img src='../admin/".$test['Cover']."' alt='img' class='img-responsive' style='margin-bottom:20px; height:200px;' />";
	 ?>
      <ul class="nav nav-pills nav-stacked">
         <li class="active lst"><a data-toggle="pill" href="#chat">Chat</a></li>
         <li class="lst"><a data-toggle="pill" href="#list">Members</a></li>
		 <li class="lst"><a href="../logout.php">Logout</a></li>
      </ul>
      </div>
      <div class="col-sm-10 bordered">
      <div class="tab-content">
         <div id="chat" class="tab-pane fade in active">
             

       <div class="chat">
       
         <div id="chatzone" class="col-sm-10" name='chatzone'>
            
         
    </div>
      <form class="form-horizontal" method="post">
                <div class="row" >
                    
                    <div class="col-sm-10 form-group" style="margin-left:10%; margin-bottom:63px;">
                       
                          <?php echo "<input type='hidden' name='game' id='game' value='".$id."'/>"?>
                          <div class="input-group">
                          <input type="text" class="form-control home" id="text" name="message" placeholder="Message..." required="required">
                          <span class="input-group-btn">
                         <input type="submit" class="btn btn-primary form-control" value="send"  onclick="getText()" style="height:40px; border-color:black !important;" />
                          </span>
                        </div>
                    </div>
            </div>    
     </form>

  </div>



</div>
         
         <div id="list" class="tab-pane fade in">
            <div id="loginperson">
            </div>
        </div>
</div>
             
         
    </div>
    </div>
   </div>   
  </div>

</div>

<script>
  $(document).ready(function() {
    $("#chatzone").niceScroll({autohidemode:false});
	$(".chat").niceScroll({boxzoom:true});
	
  });
</script>
<script src="inc/chat.js"></script>
<?php include('../footer.php')?>