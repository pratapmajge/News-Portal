<?php
$con=mysqli_connect("localhost","root","","news_portal")or die("Database Problem...!!");
?>
   <?php
session_start();
if(isset($_SESSION['admin']))
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
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>News Portal Web Application</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="logo-1.png" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- Full calendar -->
      <link href='fullcalendar/core/main.css' rel='stylesheet' />
      <link href='fullcalendar/daygrid/main.css' rel='stylesheet' />
      <link href='fullcalendar/timegrid/main.css' rel='stylesheet' />
      <link href='fullcalendar/list/main.css' rel='stylesheet' />

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
            <div class="container-fluid">
               <br>
              <!--  <br>
               <br> -->
               <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-10">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Category Data</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                          
                           <div class="table-responsive">
                              <table class="table">
                                 <thead>
                                    <tr style="background-color: #000080;color: #fff">
                                       <th scope="col">Sr. No</th>
                                       <th scope="col">Category Name</th>
                                       <th scope="col">Update</th>
                                       <th scope="col">Delete</th>
                                   
                                    </tr> 
                                 </thead>
                                 <tbody>
                                   
                                       

                                   <?php
                                    $a=mysqli_query($con,"SELECT * FROM add_category");
                                    while($row=mysqli_fetch_row($a))
                                       {
                                          echo '
                                             <tr>
                                                <td>'.$row[0].'</td>
                                                <td>'.$row[1].'</td>
                                                <td>
                                                   <button style="text-align: center;font-size: 20px;background-color: green;color: white" type="button" class="btn btn-lg"><i class="fa fa-pencil-square-o"></i></button>
                                                </td>
                                                <td>
                                                   <a href="delete_category.php?id='.$row[0].'">
                                                   
                                                   <button style="text-align: center;font-size: 20px" type="button" class="btn btn-danger btn-lg"><i class="fa fa-trash"></i></button>
                                                   </a>  
                                                </td>
                                             </tr>
                                          ';
                                       }
                                     ?>
                                 </tbody>
                              </table>
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
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="js/kelly.js"></script>
      <!-- am maps JavaScript -->
      <script src="js/maps.js"></script>
      <!-- am worldLow JavaScript -->
      <script src="js/worldLow.js"></script>
      <!-- Raphael-min JavaScript -->
      <script src="js/raphael-min.js"></script>
      <!-- Morris JavaScript -->
      <script src="js/morris.js"></script>
      <!-- Morris min JavaScript -->
      <script src="js/morris.min.js"></script>
      <!-- Flatpicker Js -->
      <script src="js/flatpickr.js"></script>
      <!-- Style Customizer -->
      <script src="js/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>
</html>