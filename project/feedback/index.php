<?php
include('../header.php')
?>
<style>
body{
background-color:white;	
}
.form-control{border: 2px solid black; border-radius: 4px;}
</style>
<div class="container">
          <div class="row">
               <div class="col-sm-8 col-sm-offset-2" style="margin-top:20px; text-align:left">
                      <h1>Contact us:</h1>
                </div>
           </div>
           <div class="row">
               <div class="col-sm-8 col-sm-offset-2" style=" text-align:center">
                     <img src="feedback.jpg" width="200px" height="200px"  class="img-responsive"/> 
               </div>
           </div>
  <div class="row">
            <div class="col-lg-8  col-lg-offset-2" style="color:black">
                 <form name="feedback" method="post" action="send.php" id="contactForm"  style="padding-top:40px;">
                            <label for="uname">User Name</label>
                            <input type="text" class="form-control" name="uname" placeholder="User Name" id="uname" required>    
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-lg-8 col-lg-offset-2">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email Address" id="email" required>    
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-lg-8 col-lg-offset-2">
                            <label for="query">Please select one</label>
                            <select name="query" class="form-control" id="query">
                            <option value="Suggestions">Suggestions</option>
                            <option value="Problem">Problem</option>
                            <?php /*?><option value="reportuser">Report a user</option><?php */?>
                            <option value="reportbug">Report a bug</option>
                            <option value="Other">Other</option>
                            </select>  <br>
                             <p class="text-info">Please specific your issue.<br>Incase your have some other issue specify it clearly</p>  
                        </div>
                    </div>
                    <div class="row ">
                        <div class="form-group col-lg-8 col-lg-offset-2">
                            <label for="description">Description</label><br>
                          <textarea row="10" cols="40" name="description" class="form-control" id="description" placeholder="Write here....."></textarea>

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-lg-8 col-xs-offset-2">
                            <input type="submit" id="button" name="submit" class="btn btn-primary button" value="Submit">  
  </form>

                        </div>
                    </div>
 </div>


 
 <br>

 
<?php
  include('../footer.php')
  ?> 