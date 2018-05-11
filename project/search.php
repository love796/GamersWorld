<?php include('header.php');?>
<style>
body{
   background: black; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  opacity: 0.7;}
.img-responsive{ max-width:none;}
h2{ margin-top:0px;}
</style>

<div class="container" style="min-height:547px; padding-bottom:10px;">
<?php
$conn=mysqli_connect("localhost","root","","gamersworld");
$s=$_GET['search'];
$result=mysqli_query($conn,"select * from categories where Name like '%$s%'");
while($test=mysqli_fetch_array($result))
{
	$id=$test['ID'];
?>
    <div class="row" style="margin-top:3%; background:#323439; margin-left:15%; margin-right:15%;">
        <div class="col-sm-12" style="color:white; padding-left:0px;">
            <div class="media">
                <div class="media-left">
<?php
	echo "<a href='http://localhost/project/categories/categories.php?ID=$id'><img src='admin/".$test['Cover']."' class='img-responsive' style='height:150px;' /></a>";
	
?>
                </div>
                <div class="media-body">
                    <h2><?php echo $test['Name'];?></h2>
                    <p style="width:550px;"><?php echo substr($test['Description'],0,400).'....';?></p>
                </div>
            </div>
        </div>
    </div>
<?php }?>
</div>


<?php include('footer.php');?>