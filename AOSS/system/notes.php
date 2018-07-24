<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/theme.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/assets/css/plugins.css" />

    
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
                
					 <ul class="nav navbar-nav navbar-right">
				     <li><a href="logout.php" style="color: white; "><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log Out </a></li>
				     </ul>
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
     $sqlstatement = "SELECT * FROM notes";
     //run the sql statement
     $runn = mysqli_query($conn, $sqlstatement);
?>     
    
  <div class="main">
  <div class="vr"></div>
      <div class="main2">
          <p style="margin-top: 10px;"><strong>Notes:</strong></p>

       <table class="table">
  <thead>
    <tr>
      <th scope="col">Sender</th>
      <th scope="col">Notes</th>
      <th scope="col">Submitted On</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
	 <?php
     while($row = mysqli_fetch_array($runn)){
	
     $id=$row['id'];
     $sn=$row['sender'];
     $unm=$row['upload'];
     $dy=$row['day'];
	?>       
      
    <tr>
      <th scope="row"><?php echo $sn; ?></th>
      <td><?php echo $unm; ?></td>
      <td><?php echo $dy; ?></td>
      <td> 
 <div class="btn-group" role="group" aria-label="Basic example">
     <?php echo "<a href='upfiles/{$row['upload']}'>" ?><button type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-save"></span>DownLoad</button>
</div> 
        </td>
        <?php  } ?>
  </tbody>
</table>
          
      </div>
             
      
   <div class="vr2"></div>

 <div class="right">
    <p ><strong>Units</strong></p>
     
 <?php 
     require('connect.php'); 
     $sqlstatement = "SELECT * FROM units";
     //run the sql statement
     $run = mysqli_query($conn, $sqlstatement);
?>     
        
     
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Unit</th>
      <th scope="col">Lecturer</th>
    </tr>
  </thead>
  <tbody>
    
	 <?php
     while($row = mysqli_fetch_array($run)){
	
     $di=$row['unit_id'];
     $un=$row['unit_name'];
	?>       
      
    <tr>
      <th scope="row"><?php echo $un; ?></th>
      <td><?php echo "lec name"; ?></td>
        <?php  } ?>
  </tbody>
</table>
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

                 <p style="text-align: center;font-size: 17px;">
                     &copy; 2018 University, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    
    </div>

</body>
</html>
