<?php
include('header.php')
?>  <?php
session_start();
if(!isset($_SESSION['user']) && empty($_SESSION['user']))
{
	header('location:login.php');
	
}
 ?>
  <form  method="post" action="process.php" enctype="multipart/form-data" >
                        <div class="row control-group">
                        <div class="form-group col-lg-8 col-xs-offset-2" >
                            <label>desc</label>
                            <input type="text" class="form-control" placeholder="Enter Product Name" name="desc" id="fname">
                            
                        </div>
                    </div>
                    
                    
                    <div class="row control-group">
                        <div class="form-group col-lg-8 col-xs-offset-2">
                            <label>Attach Image</label>
                            <input type="file" class="form-control" name="path">
                            
                        </div>
                    </div>
                     <div class="row control-group">
                        <div class="form-group col-lg-8 col-xs-offset-2">
                            <label>link</label>
                            <input type="text" class="form-control" name="link">
                            
                        </div>
                    </div>
                    
                    
                   
                    <br>
                    
                    <div class="row">
                        <div class="form-group col-lg-8 col-xs-offset-2">
                            <button type="submit" id="button" class="btn btn-default button">Submit</button>
                        </div>
                    </div>
                    
                   
                    
                </form>