<?php
$con=mysqli_connect("localhost","root","","news_portal")or die("Database Problem...!!");
?>
   <?php
session_start();
if(isset($_SESSION['channel']))
{

}
else
{
    echo '
  <script>
   window.location.href=s"../index.php";
    </script>
    ';
}
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

      <link rel="stylesheet" href="css/flatpickr.min.css">

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
         <h4> Reporter Details</h4>
            <div class="container-fluid">
               
               <br>
                 <div class="row">

                  <?php
                                    $a=mysqli_query($con,"SELECT * FROM reporterdata WHERE CHANNEL_ID='".$_SESSION['channel']."'");
                                    while($row=mysqli_fetch_row($a))
                                       {
                                          echo '
                                    <div class="col-lg-3">
                                          <div class="iq-card" style="border-top:solid #000 2px">
                                          
                                             <div class="iq-card-header d-flex justify-content-between">
                                             
                                                <div class="iq-header-title">
                                                   <h4 class="card-title" style="font-size:26px">'.$row[2].'</h4>
                                                </div>
                                             </div>
                                             <div class="iq-card-body">
                                                <form>
                                                   <div class="form-group" style="text-align:center">
                                                      <div >
                                                         
                                                         <img class="profile-pic img-fluid" src='.$row[8].' style="height:100px;width:100px">
                                                        
                                                      </div>
                                                    
                                                   </div>
                                                   <div style="font-size:12px">
                                                     

                                                      <div>
                                                    Email:  <h4 >'.$row[3].'</h4>
                                                      </div>

                                                      <div>
                                                     Adhar no: <h4 >'.$row[4].'</h4>
                                                      </div>
                                                      <div>
                                                     Contact no: <h4 >'.$row[5].'</h4>
                                                      </div>
                                                      <div>
                                                     Date :<h4 >'.$row[6].'</h4>
                                                      </div>
                                                      <div>
                                                    Address:  <h4 >'.$row[7].'</h4>
                                                      </div>
                                                      <br>

                                                      
                                                      <h6 style="float: left;">
                                                         <a href="reporter_update.php?id='.$row[0].'">

                                                         <button style="text-align: center;font-size: 20px;background-color: green;color: white" type="button" class="btn btn-lg"><i class="fa fa-pencil-square-o"></i></button>
                                                      </a>
                                                      </h6>
                                                      <h6 style="float: left;margin-left:10px">
                                                         <a href="reporter-delete.php?id='.$row[0].'">
                                                      <button style="text-align: center;font-size: 20px" type="button" class="btn btn-danger btn-lg"><i class="fa fa-trash"></i></button>
                                                                        </a>
                                                      </h6>
                                                      <br>
                                                      
                                                   </div>
                                                  
                                                </form>
                                             </div>
                                          </div>
                                    </div>

                                                                  ';
                                       }
                                     ?>
          
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