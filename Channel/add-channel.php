<!doctype html>
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
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-8">
                <h3 style="color:green">ADD CHANNEL</h3>
            </div>
            <div class="col-sm-2"></div>
        </div><br><br>
        <form action="" method="GET" style="border-top: orange 3px solid;border-radius: 10px"><br>
        <div class="row">
           <div class="col-sm-2"></div>
           
           <div class="col-sm-4">            
                <input type="text" name="name" id="" placeholder="Enter Name" class="form-control" style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; " > <br> <br>
           
                <input type="email" name="email" id="" placeholder="Enter Email" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "><br> <i style="color:red; font-size:12px">Opening Date</i> <br>
            
                <input type="date" name="date" id="" placeholder="Enter Opening datel" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206); border-radius: 10px;"><br><br>
                <input type="text" name="username" id="" placeholder="Enter Username" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "><br><br>
                <input type="number" name="charges" id="" placeholder="Enter yearly charges" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "><br><br>



           </div>
           <div class="col-sm-4">
                <input type="tel" name="mob" id="" placeholder="Enter Contact" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "> <br><br>
                <input type="number" name="adhar" id="" placeholder="Enter Adhar Number" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "><br><br>
                
                <input type="text" name="channel-name" id="" placeholder="Enter Channel Name" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "><br><br>
                <input type="password" name="password" id="" placeholder="Enter Password" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "><br><br>
                

                <!-- <input type="button" name="" id=""> -->
           </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                    <div class="col-sm-5">
                       <button type="submit" class="btn btn-primary" style="background-color:aquamarine;color:black;border:1px solid black;text-align:center">Submit</button>
                       <button type="reset" class="btn btn-danger" style="color:white;border:1px solid black;text-align:center;"> Reset</button>
                          
                    </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        
        
        </form>
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