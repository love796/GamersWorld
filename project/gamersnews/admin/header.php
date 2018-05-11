<?php 

$conn=mysqli_connect("localhost","root","","gamernews");
?>
<!DOCTYPE HTML>


<head>
<link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap-3.3.6-dist/font-awesome/css/font-awesome.css">
    <script src="../bootstrap-3.3.6-dist/js/jquery-1.12.4.min.js"></script>
    <script src="../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../style.css" >
<style>
	body{
		color:white !important;
		background-image:url(../uploads/top15.jpg) !important;
		background-size: cover;
	}
	</style>
</head>

<body>
<div class="container">
  
   <div class="row">
          
             <div class="col-lg-2" style="text-align:left; padding-top:10px">
              <a href="https://www.facebook.com/Tech-News-1912323535464794/"class="fa fa-facebook" style="font-size:22px"></a>
             <a class="fa fa-twitter" style="font-size:22px"></a>
             <a class="fa fa-youtube" style="font-size:22px"></a>
             <a class="fa fa-instagram" style="font-size:22px"></a>
	         </div>
             <div class="col-lg-4 pull-right" style="font-size:54px; font-family:'MS Serif', 'New York', serif; paddinjg-top:30px;">
               Gamers News
             </div>
             
             <div class="col-lg-6" style="margin-top:60px; text-align:right">
   

<div id="txt"></div>
             
        </div>

        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-inverse  navbar-fixed-bottom">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       
        </button>
         <a  class="navbar-brand" href="#">Gamers World  | </a>
                 <div class="collapse navbar-collapse" id="mynavbar">
         <ul class="nav navbar-nav">
         
         <li><a href="../index.php">Home</a></li>
         <li><a href="#">Gameplays</a></li>
         <li><a href="#">Upcoming games</a></li>
         
        
         <li><a href="#">Contact Us</a></li>
         <li><a href="#">About</a></li>
         <?php if(!@$_SESSION['user']): ?>
                     <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
                     Login</a></li>
                     <?php else: ?>
                     <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>
                     Logout</a></li>
                     <?php endif; ?>
         
         
         
         </ul>
                   </div>
             </nav>
             </div>
        </div> 
	   </body>