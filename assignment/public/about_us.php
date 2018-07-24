<?php
   session_start();
    $cur_page="Contact Us"; 
     include_once("../includes/layouts/header.php");
     require_once("../includes/functions.php");
      $connection=connectDB();
     checkConnectivity();
 ?>
<div id="body">
  <div id="left_main">
  <br/>
    <?php echo navigation()?>

  </div>
  <div id="center_main">
   <h2>  About Us </h2>
    <p style="font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; margin:10px;">Assignment portal is a Website which let Student and Teachers to communicate ,it alswo allows, 
    students to submit their projects or assignments directly to the respective teachers. 
  </p>
    <h2>  Developed By  </h2>
    <ul style="list-style-type:!important; list-stylefont-style:normal;font-size:24px; font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif';">
   <li> Otieno Henry Ooko <a href=""> <img src="images/fb.png"/></a></li>
      <li>Karanja David Kamanda) <a href=""> <img src="images/fb.png"/></a></li>
      <li>Kelvin Ngare  <a href=""> <img src="images/fb.png"/></a></li>
    </ul>
    </div>
    <div id="right_main">
      <?php right_main(); ?>
    </div>
</div>
<?php include("../includes/layouts/footer.php"); ?>
