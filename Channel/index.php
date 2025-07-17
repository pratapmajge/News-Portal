<!doctype html>
<?php
session_start();
if(isset($_SESSION['channel']))
{

}
else
{
    echo '
  <script>
   window.location.href="../index.php";
    </script>
    ';
}
?>
<?php
  $con=mysqli_connect("localhost","root","","news_portal")or die("ERROR..!");


  $a=mysqli_query($con,"SELECT * FROM reporterdata WHERE CHANNEL_ID='".$_SESSION['channel']."'");
  $reporter=mysqli_num_rows($a);

  $b=mysqli_query($con,"SELECT * FROM uploadnews WHERE CID='".$_SESSION['channel']."'");
  $news=mysqli_num_rows($b);

  $d=mysqli_query($con,"SELECT * FROM add_upload WHERE ADD_ID='".$_SESSION['channel']."'");
  $addver=mysqli_num_rows($d);

 $e=mysqli_query($con,"SELECT * FROM short_add WHERE ADD_ID='".$_SESSION['channel']."'");
  $saddver=mysqli_num_rows($e);

  $f=mysqli_query($con,"SELECT * FROM area WHERE CID='".$_SESSION['channel']."'");
  $ar=mysqli_num_rows($f);


  
?>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>News Portal Web Application</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="../admin/logo-1.png" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../admin/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="../admin/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="../admin/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="../admin/css/responsive.css">
      <!-- Full calendar -->
      <link href='../admin/fullcalendar/core/main.css' rel='stylesheet' />
      <link href='../admin/fullcalendar/daygrid/main.css' rel='stylesheet' />
      <link href='../admin/fullcalendar/timegrid/main.css' rel='stylesheet' />
      <link href='../admin/fullcalendar/list/main.css' rel='stylesheet' />

      <link rel="stylesheet" href="../admin/css/flatpickr.min.css">

   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
        <?php
        include('sidebar.php');
        ?>
         <!-- TOP Nav Bar -->
       <?php 
       include('top_menu.php');
       ?>
         <!-- TOP Nav Bar END -->
         
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3" >
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="border-top:3px solid orange;background-color:rgb(192, 192, 192);color:#fff">
                        <div class="iq-card-body iq-box-relative">
                           <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-primary">
                              <i class="ri-focus-2-line"></i>
                           </div>
                           <p class=""  style="color:black;font-weight:bold" >Total Reporters</p>
                           <div class="d-flex align-items-center justify-content-between">
                              <h4 style="color:black"><b><?php  echo $reporter ?></b></h4>
                             
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3" >
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="border-top:3px solid orange;background-color:rgb(192, 192, 192);color:black">
                        <div class="iq-card-body iq-box-relative">
                           <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-danger">
                              <i class="ri-pantone-line"></i>
                           </div>
                           <p class=""  style="color:black;font-weight:bold" >Total News</p>
                           <div class="d-flex align-items-center justify-content-between">
                              <h4 style="color:black"><b><?php  echo $news ?></b></h4>
                              
                             
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3" >
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="border-top:3px solid orange;background-color:rgb(192, 192, 192);color:black">
                        <div class="iq-card-body iq-box-relative">
                           <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-success">
                              <i class="ri-database-2-line"></i>
                           </div>
                           <p class=""  style="color:black;font-weight:bold" >Total Ads</p>
                           <div class="d-flex align-items-center justify-content-between">
                              <h4 style="color:black"><b><?php  echo $addver ?></b></h4>
                              
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3" >
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="border-top:3px solid orange;background-color:rgb(192, 192, 192);color:black">
                        <div class="iq-card-body iq-box-relative">
                           <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-warning">
                              <i class="ri-pie-chart-2-line"></i>
                           </div>
                           <p class=""  style="color:black;font-weight:bold" >Total Short Ads</p>
                           <div class="d-flex align-items-center justify-content-between">
                              <h4 style="color:black"><b><?php  echo $saddver ?></b></h4>
                           </div>
                        </div>
                     </div>
                  </div>

                   <div class="col-sm-6 col-md-6 col-lg-3" >
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height" style="border-top:3px solid orange;background-color:rgb(192, 192, 192);color:black">
                        <div class="iq-card-body iq-box-relative">
                           <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-warning">
                              <i class="ri-pie-chart-2-line"></i>
                           </div>
                           <p class=""  style="color:black;font-weight:bold" >Total Areas</p>
                           <div class="d-flex align-items-center justify-content-between">
                              <h4 style="color:black"><b><?php  echo $ar ?></b></h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                 
             
                
                
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
     <?php  
     include('footer.php');   
     ?>
      <!-- Footer END -->
     
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../admin/js/jquery.min.js"></script>
      <script src="../admin/js/popper.min.js"></script>
      <script src="../admin/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="../admin/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="../admin/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="../admin/js/waypoints.min.js"></script>
      <script src="../admin/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="../admin/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="../admin/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="../admin/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="../admin/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="../admin/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="../admin/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="../admin/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="../admin/js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="../admin/js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="../admin/js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="../admin/js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="../admin/js/kelly.js"></script>
      <!-- am maps JavaScript -->
      <script src="../admin/js/maps.js"></script>
      <!-- am worldLow JavaScript -->
      <script src="../admin/js/worldLow.js"></script>
      <!-- Raphael-min JavaScript -->
      <script src="../admin/js/raphael-min.js"></script>
      <!-- Morris JavaScript -->
      <script src="../admin/js/morris.js"></script>
      <!-- Morris min JavaScript -->
      <script src="../admin/js/morris.min.js"></script>
      <!-- Flatpicker Js -->
      <script src="../admin/js/flatpickr.js"></script>
      <!-- Style Customizer -->
      <script src="../admin/js/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="../admin/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="../admin/js/custom.js"></script>
   </body>
</html>