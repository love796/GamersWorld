<?php
include('header.php')
?>
<style>
body{
	background: url(images/body.jpg) no-repeat center center fixed; 
	-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	opacity: 0.7;
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10" style="margin-left:10%;">  
           <form class="form-horizontal" action="search.php">
            <div class="col-sm-8">
              <label for="search"> <p style="margin-top:32%; font-family:'MS Serif', 'New York', serif; text-align:center; font-size:60px; margin-bottom:32px; color:lightgray; "> World Of Gamers</p></label></div>
  
              <div class="row">
                  <div class="col-sm-6">
                     <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                           <input type="search" class="home form-control" name="search" id="search" placeholder="Search your favourite game..." autofocus required />
                            <span class="input-group-btn"><button type="submit" style="height:40px;"><span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span></button></span>
                       </div>
                   </div>
                </div>
                 <div class="row">
                     <div class="col-sm-5" style="margin-left:40px; margin-bottom:7.89%">
                     <p style="margin-top:10%; font-family:'MS Serif', 'New York', serif; text-align:center; font-size:35px; color:lightgray;">ARE YOU A &nbsp;<img src="images/bracket-open.png" style="display:inline; height:40px;" class="img-responsive"/><span style="color:#CC201F; display:inline">&nbsp;GAMER&nbsp;</span><img src="images/bracket-close.png" style="display:inline; height:40px;" class="img-responsive" /></p>
                     <p style="text-align:center; font-size:20px; color:lightgray;">ITS YOUR TURN NOW...</p>
                     </div>
                     </div>
            </form> 
        </div>
   </div> 
   
   
      
 </div>

 <?php include('footer.php');?>