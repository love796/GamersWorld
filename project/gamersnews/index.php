<?php 
include('header.php');
?>

<div class="container">
  
    
         

   
        <div class="row">
         
            <div class="col-lg-12">
              <img src="images/bat.jpg" width="100%" class="img-responsive" >
             </div>
         </div>
<div class="row">
            <div class="col-lg-12" style="margin-top:171px; margin-bottom:100px; text-align: center; color:black">
             <hr>
             <h1>LATEST STORIES</h1>
             <hr>
             

             </div>
         </div> 
          
         <div class="row">
     
		  <?php
       include_once('../scripts/connect.php');
		 $str=mysqli_query($conn,"select * from gamersnews");
		 while($val=mysqli_fetch_array($str))
		 {
			 $id=$val['ID'];
		 
   	  ?>
                     <div class="col-lg-12" style="margin-top:71px; background-color: black; color:white;" >
              

          <a href="<?php echo $val["Link"];?>"> <img src="<?php echo $val["Path"];?>" class="img-responsive" /> </a>
            <h3><?php echo $val["Description"];?></h3>
          </div>
        <?php } ?>
         </div>               
      

 
</div>

       
       
      
   
   

    <?php include('footer.php');
	
	?>

	
	
	
	
	
	