<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/theme.min.css" rel="stylesheet">
<link rel="stylesheet" href="stylesheets/skywalk-docs.min.css">
<link rel="stylesheet" href="stylesheets/bootstrap-notifications.css">
<link rel="stylesheet" href="css/assets/css/plugins.css" />

<style>
* {
  box-sizing: border-box;
}

html, body {height: 100%; min-height: 100%;}    
.avatar{
    height: 40px;
    border-radius: 50%;
    float: left;
    margin-top: 4px;
    margin-right: 5px;
    
    }
.avatar2{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-left: 80px;
)
}
.menu {
  float: left;
  width: 15%;
}
.menuitem {
  padding: 8px;
  margin-top: 5px;
  border-bottom: 2px solid #f1f1f1;
}
.main2 {
  float: left;
  width: 60%;
  padding: 0 20px;
  overflow: hidden;
}
.vr {
  border: 1px solid #CECECE;
  float: left; 
  height: 800px;
  margin-top: 5px;
  margin-left: 4px; 
}

.vr2 {
  border: 1px solid #CECECE;
  float: left; 
  height: 800px;
  margin-top: 5px;

}
.right{
  float: left;
  width: 20%;
  padding: 10px 15px;
  margin-left: 10px;
    }    

.icon i{
	font-size: 20px;
    border: 2px solid;
	color: deepskyblue;
    border-radius: 100%;
    padding-top: 8px;
    height:38px;
    width: 38px;
}    
.carousel-inner > .item > img {
  width:100%;
  height:500px;
}
    
@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
</style>
</head>
<body style="font-family:Verdana; height: 100%; background-image: url()">
    
 <nav class="navbar navbar-default" style="background-color:#314151; ">
		    <div class="container">
		     <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#toggl">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                 <img  class="avatar" alt="avatar.png" src="logo.png">
				 <a href="#" class="navbar-brand" style="color: white; "> JKUAT ONLINE ASSIGNMENT PORTAL </a>  
			 </div>
                
                	 <ul class="nav navbar-nav navbar-right">
				     <li><a href="logout.php" style="color: white; "><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log Out </a></li>
				     </ul>
            
			</div>
		 </nav>

<div style="overflow:auto;"  data-color="purple" data-image="sidebar-5.jpg">
  <div class="menu">
  <div class="menuitem">&nbsp;<span class="glyphicon glyphicon-home" style="color:skyblue"></span>&nbsp;<a href="mainHome.php"> Home</a></div>
  <div class="menuitem">&nbsp;<span class="glyphicon glyphicon-list" style="color:skyblue"></span>&nbsp;<a href="vAss.php"> Assignments</a></div>
  <div class="menuitem">&nbsp;
      <span class="glyphicon glyphicon-cloud-upload" style="font-size:15px;color:skyblue"></span>&nbsp;<a href="sAss.php"> Submit</a></div>
  <div class="menuitem">&nbsp;<span class="glyphicon glyphicon-user" style="font-size:15px;color:skyblue"></span>&nbsp;<a href="lecs.php"> Lecturers</a></div>
  <div class="menuitem">&nbsp;<span class="glyphicon glyphicon-book" style="font-size:15px;color:skyblue"></span>&nbsp;<a href="notes.php"> Notes</a></div>
      
  </div>

    
  <div class="main">
      
  <div class="vr"></div>
      
      <div class="main2">
          
        
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="background/Submit.jpg"s alt="">
    </div>

    <div class="item">
      <img src="background/col.jpg" alt="">
    </div>

    <div class="item">
      <img src="background/s.jpg" alt="">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          
          
          
          <p style="margin-top: 10px;"><strong>Hello &nbsp;<span class="glyphicon glyphicon-education"></span> <?php echo $_SESSION['emal']; ?></strong></p>
          <p>Welcome to our Online assignment submission and feedback system (username).<br> 
             Our system as designed, will enable the interaction between a student and their respective Lecturers as confotable as possible.
             We've designed to make the submission and assigning process of any assignment easier and efficient.Thus, while interacting with our system the following user's are enabled to perfom the following task's:  
          </p>

          
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            Students
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
            <ul class="favth-list-circle">
                <li>Submit Assignments to respective lecturers.</li>
                <li>Download/ View the Assignments.</li>
                <li>Message their respective Lecturers directly.</li>
                <li>View results.</li>
            </ul>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
           Lecturer
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">
            <ul class="favth-list-circle">
                <li>Submit Assignments to respective students.</li>
                <li>Download/ View the Assignments.</li>
                <li>Message their respective students directly.</li>
                <li>Give back results.</li>
            </ul>
        </div>
      </div>
    </div>
    
  </div>          

          
      </div>
      
            <div class="vr2"></div>

 <div class="right">
     <p>Profile Pic</p>
                
  <form method="post" action="#" enctype="multipart/form-data">
      
      <img alt="ava.png" src="ava.png" class="avatar2">
        <label for="file-input">
          <img src="background/ball.ico" height="20px" width="20px" style="margin-bottom: 80px;">
          <img src="background/ball.ico" height="20px" width="20px" style="margin-bottom: 80px;">
      </label><br>
      <br>
      <input type="file" id="file-input" style="display: none;">
    </form> 
     
      <label for="inputName" class="control-label">Name:</label>
      <input type="text" class="form-control" id="inputName" value="<?php echo $_SESSION['emal']; ?>" readonly>
     
      <label for="inputName" class="control-label">Reg No:</label>
      <input type="text" class="form-control" id="inputName"  value="<?php echo $_SESSION['emal']; ?>" readonly>
     
      <label for="inputName" class="control-label">Course:</label>
      <input type="text" class="form-control" id="inputName"  value="<?php echo $_SESSION['emal']; ?>" readonly>

          <hr>    
     
     <label for="inputName" class="control-label">JKUAT Links:</label><br>
     <a href="http://www.jkuat.ac.ke/"><button type="button" class="btn btn-info">Main Website</button></a> <br><br>
     <a href="https://portal.jkuat.ac.ke/"><button type="button" class="btn btn-info">Student Portal</button></a>

     
  </div>
      
  </div>
 </div>
<!--#314151-->
<div style="background-color:#cccccc;text-align:center;padding:10px;margin-top:7px;font-size:12px;"> 
    <div class="icon">
                 <a href="#"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="#"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
				 <a href="#"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="#"><i class="fa fa-camera"></i></a>
    </div>

                 <p style="text-align: center;font-size: 17px;">
                     &copy; 2018 University, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    
    </div>

</body>
	   
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
</html>
