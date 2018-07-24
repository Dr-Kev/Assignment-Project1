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
<link rel="stylesheet" href="css/assets/css/plugins.css"/>
    
    
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<style>
* {
  box-sizing: border-box;
}
.avatar{
    height: 40px;
    border-radius: 50%;
    float: left;
    margin-top: 4px;
    margin-right: 5px;
    
    }
    .nav{
        
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
  height: 525px;
  margin-top: 5px;
  margin-left: 4px; 
}
.vr2 {
  border: 1px solid #CECECE;
  float: left; 
  height: 525px;
  margin-top: 5px;

}
.right{
  float: left;
  width: 20%;
  padding: 10px 15px;
  margin-left: 10px;
    }
.output {
    background-color: aliceblue;
    box-shadow: 0px 1px 1px #000 ;
    height: 250px;
    margin-bottom: 10px;
    overflow: scroll;
    }

input[type=submit]{
    width: 100px;
    box-sizing: border-box;
    border: 4px solid #6495ed;
    border-radius: 4px;
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
<body style="font-family:Verdana;">
<nav class="navbar navbar-default" style="background-color:#314151; ">
		    <div class="container">
		     <div class="navbar-header">
                 <img  class="avatar" alt="avatar.png" src="logo.png">
				 <a href="#" class="navbar-brand" style="color: white; "> JKUAT ONLINE ASSIGNMENT PORTAL </a>
				  
			 </div>
                
                
                        
<div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          
          <li class="dropdown dropdown-notifications ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i data-count="2" style="color: white; " class="glyphicon glyphicon-bell notification-icon"></i>
            </a>

            <div class="dropdown-container dropdown-position-bottomright">

              <div class="dropdown-toolbar">
                <div class="dropdown-toolbar-actions">
                  <a href="#">Mark all as read</a>
                </div>
                <h3 class="dropdown-toolbar-title">Notifications (2)</h3>
              </div><!-- /dropdown-toolbar -->

              <ul class="dropdown-menu">
                    <li class="notification">
                      <div class="media">
                        <div class="media-left">
                          <div class="media-object">
                            <img data-src="holder.js/50x50?bg=cccccc" class="img-circle" alt="Name" />
                          </div>
                        </div>
                        <div class="media-body">
                          <strong class="notification-title"><a href="#">Dave Lister</a> commented on <a href="#">DWARF-13 - Maintenance</a></strong>
                          <p class="notification-desc">I totally don't wanna do it. Rimmer can do it.</p>

                          <div class="notification-meta">
                            <small class="timestamp">27. 11. 2015, 15:00</small>
                          </div>
                        </div>
                      </div>
                  </li>

                  <li class="notification active">
                      <div class="media">
                        <div class="media-left">
                          <div class="media-object">
                            <img data-src="holder.js/50x50?bg=cccccc" class="img-circle" alt="Name" />
                          </div>
                        </div>
                        <div class="media-body">
                          <strong class="notification-title"><a href="#">Nikola Tesla</a> resolved <a href="#">T-14 - Awesome stuff</a></strong>

                          <p class="notification-desc">Resolution: Fixed, Work log: 4h</p>

                          <div class="notification-meta">
                            <small class="timestamp">27. 10. 2015, 08:00</small>
                          </div>

                        </div>
                      </div>
                  </li>

                  <li class="notification">
                      <div class="media">
                        <div class="media-left">
                          <div class="media-object">
                            <img data-src="holder.js/50x50?bg=cccccc" class="img-circle" alt="Name" />
                          </div>
                        </div>
                        <div class="media-body">
                          <strong class="notification-title"><a href="#">James Bond</a> resolved <a href="#">B-007 - Desolve Spectre organization</a></strong>

                          <div class="notification-meta">
                            <small class="timestamp">1. 9. 2015, 08:00</small>
                          </div>

                        </div>
                      </div>
                  </li>

              </ul>

              <div class="dropdown-footer text-center">
                <a href="#">View All</a>
              </div><!-- /dropdown-footer -->

            </div><!-- /dropdown-container -->
          </li><!-- /dropdown -->
            
         <li><a href="logout.php" style="color: white; "><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log Out</a></li>
        </ul>
      </div>       
			</div>
		 </nav>

<div style="overflow:auto">
  <div class="menu">
  <div class="menuitem">&nbsp;<span class="glyphicon glyphicon-home" style="color:skyblue"></span>&nbsp;<a href="mainHome.php"> Home</a></div>
  <div class="menuitem">&nbsp;<span class="glyphicon glyphicon-list" style="color:skyblue"></span>&nbsp;<a href="vAss.php"> Assignments</a></div>
  <div class="menuitem">&nbsp;<span class="glyphicon glyphicon-cloud-upload" style="font-size:15px;color:skyblue"></span>&nbsp;<a href="sAss.php"> Submit</a></div>
  <div class="menuitem">&nbsp;<span class="glyphicon glyphicon-user" style="font-size:15px;color:skyblue"></span>&nbsp;<a href="lecs.php"> Lecturers</a></div>
  <div class="menuitem">&nbsp;<span class="glyphicon glyphicon-book" style="font-size:15px;color:skyblue"></span>&nbsp;<a href="notes.php"> Notes</a></div>
      
  </div>
    
 <?php 
     require('connect.php'); 
     $sqlstatement = "SELECT * FROM lecturer";
     //run the sql statement
     $runn = mysqli_query($conn, $sqlstatement);
?>    
    
  <div class="main">
  <div class="vr"></div>
      <div class="main2">
          <p style="margin-top: 10px;"><strong>Lecturers</strong></p>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Unit</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

	 <?php
     while($row = mysqli_fetch_array($runn)){
	
     $id=$row['staff_id'];
     $fnm=$row['first_name'];
     $snm=$row['last_name'];
     $ph=$row['phone'];
     $em=$row['email'];
    
	?>      
      
    <tr>
      <th scope="row"><?php echo $fnm; ?> <?php echo $snm; ?></th>
      <td><?php echo $em; ?></td>
      <td>0<?php echo $ph; ?></td>
      <td>Database Management Systems</td>
      <td>
<div class="btn-group" role="group" aria-label="Basic example">
  <a href="#" data-toggle="modal" data-target="#modalview"><button type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-eye-open"></span></button></a>
</div> 
        </td>
    </tr>
      
      <?php  } ?>
  </tbody>
</table>
          
      </div>
      
   <!-- view Modal -->  
<div id="modalview" class="modal fade" role="dialog">
  <div class="modal-dialog">

     
    <!-- Modal content-->
    <div class="modal-content">
    <div class="loginbox">
        <div class="modal-body">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
            <p>File Display</p>
        </div>
        
        </div>
            
    </div>

  </div>
</div> 
      
      
   <div class="vr2"></div>

 <div class="right">
    <p ><strong>Chat Room</strong>
        <strong style="font-size: 11px;" class="pull-right">~ONLINE</strong>
     </p>
     
     <div class="output">
         
         
         
     </div>
     <form method="post" >
         <textarea name="txt" placeholder="Type Message To Send..." class="form-control"></textarea><br>
         <input type="submit" value="SEND" class="pull-right">
     </form>
     
  </div>
  </div>
 </div>

<div style="background-color:#cccccc;text-align:center;padding:10px;margin-top:7px;font-size:12px;"> 
    <div class="icon">
                 <a href="#"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="#"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
				 <a href="#"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="#"><i class="fa fa-camera"></i></a>
    </div>

<p style="text-align: center;font-size: 17px;">&copy; 2018 University, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    
    </div>

</body>
</html>
