
<div class="container-fluid" >
<div class="col-sm-offset-3"><span style="color:slategray; font-size:44px; text-align:center;">Welcome Admin</span></div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3" style="padding-top:30px;">
           <div class="col-sm-8 pro"><span style="margin-right:20px;">Total members: </span><span class="badge">
           <?php
               $conn=mysqli_connect("localhost","root","","gamersworld");
               $result=mysqli_query($conn,"select * from stats where ID='1'");
			   $test=mysqli_fetch_array($result);
			   echo $test['Users'];
			   ?>
           </span></div>
           <div class="col-sm-8 pro"><span style="margin-right:20px;">Total Games categories: </span><span class="badge">
           <?php
			   
			   echo $test['Categories'];
			   ?>
           </span></div>
           <div class="col-sm-8 pro"><span style="margin-right:20px;">Questions asked: </span><span class="badge">
           <?php
			  
			   echo 0 //$test['Query'];
			   ?>
           </span></div>
        </div>
    </div>
    
    <br /><br />
   <div class="row">
      <div class="col-sm-6 col-sm-offset-2">
        <div class="table-responsive">
        <table class="table table-bordered">
         <tr class="success pro" style="color:black !important">
            <th>ID</th>
            <th>GameID</th>
            <th>Name</th>
         </tr>
         <?php 
		 $result=mysqli_query($conn,"select * from categories");
while($test=mysqli_fetch_array($result))
{
	$id=$test['ID'];
	echo "<tr class='pro'>";
	echo "<td>".$test['ID']."</td>";
	echo "<td>".$test['GameID']."</td>";
	echo "<td>".$test['Name']."</td>";
	echo "</tr>";
}
		 ?>
        </table>
       </div>
      </div>
  </div>


</div>