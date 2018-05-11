<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>GamersWorld</title>
<link rel="stylesheet" type="text/css" href="http://localhost/project/scripts/style.css" />
<link rel="stylesheet" href="http://localhost/project/scripts/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/project/scripts/bootstrap-3.3.6-dist/font-awesome/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<body>
<div class="container" style="padding:0px; margin-left:12px; width:98%">
     <div class="row">
        <div class="col-lg-12" style="padding:0px">
           <nav class="navbar navbar-inverse" style="margin-bottom:0px;">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
        
               </button>
         <a  class="navbar-brand" href="http://localhost/project/" style="padding-top:2px; padding-left:0px;"><img src="http://localhost/project/images/logo.png" style="height: 70px; width: 200px;" class="img-responsive"  ></a>
                 <div class="collapse navbar-collapse" id="mynavbar" style="padding:0px;">
         <ul class="nav navbar-nav">
          
         <li><a href="http://localhost/project/">Home</a></li>
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories&nbsp;<span class="caret"></span></a>
           <ul class="dropdown-menu">
           
                <?php
include_once('scripts/connect.php');
$result=mysqli_query($conn,"select * from categories where ID<6");
while($test=mysqli_fetch_array($result))
{
	$id=$test['ID'];
	echo "<li><a href='http://localhost/project/categories/categories.php?ID=$id'>".$test['Name']."</a></li>";
}
?>
             
                <li class="divider"></li> 
                <li><a href="http://localhost/project/categories/">More</a></li>
            </ul>
         </li>
         <?php /*?><li><a href="#">Blog</a></li><?php */?>
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">More&nbsp;<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="http://localhost/project/expert-panel/">Expert-Panel</a></li>
               <!-- <li><a href="#">Donate</a></li>-->
                <li><a href="http://localhost/project/about/">About us</a></li>
                <li><a href="http://localhost/project/feedback/">Contact us</a></li>
            </ul>
         </li>
         </ul>
                    
                    <div class="col-lg-3 pull-right" style="text-align:right; padding-right:0px; color:white; padding-top:12px">
                    <?php
					if(!@$_SESSION['email']): ?><span style="margin-right:20px;">
                    <a href="http://localhost/project/login.php" style="color:white !important; font-family:'Times New Roman', Times, serif"><span class="glyphicon glyphicon-user" ></span> Sign in</a></span>
                     
                    <?php else: ?>
                    <a href="http://localhost/project/profile/"><button class="btn btn-primary" name="logout" style="border-radius:20px; margin-right:10px;
                    padding-top:2px; padding-bottom:2px; margin-top:0px;!important">Profile</button></a>
                     <?php endif; ?>
                    
              <a href="https://www.facebook.com/Tech-News-1912323535464794/"class="fa fa-facebook" style="font-size:18px"></a>
             <a class="fa fa-twitter" style="font-size:18px"></a>
             <a class="fa fa-youtube" style="font-size:18px"></a>
             <a class="fa fa-instagram" style="font-size:18px"></a>
             </div>
             </div>
        </nav>  
        </div>
        
      </div>
   </div>   
 
</div>