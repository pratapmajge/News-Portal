<?php
    $con=mysqli_connect("localhost","root","","news_portal")or die("ERROR..!");
    $id=$_GET['id'];
    $rname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM uploadnews WHERE ID='".$id."'"));
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
<!doctype html>
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
               <br>
                <div class="row">
                  <div class="col-sm-12 col-lg-1"></div>

                  <div class="col-sm-12 col-lg-10" >
                     <div class="iq-card" style="border-top: orange 3px solid;border-radius: 10px">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h3 class="card-title">News Update</h3>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form action="news_update.php" method="POST" >
                              <div class="form-row">
                                 <div class="col-md-5 mb-3">
                                    <input type="hidden" name="id" value="<?php echo $rname[0]?>">

                                    <label for="validationDefault01" style="font-weight: bolder">Enter Title</label>
                                    <input type="text" class="form-control" value="<?php echo $rname[1]?>" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" name="title">
                                 </div>
                                 <div class="col-md-1 mb-3"></div>
                                 
                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01" style="font-weight: bolder">Enter Subtitle</label>
                                    <input type="text" class="form-control" value="<?php echo $rname[2]?>" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" name="subtitle"  placeholder="Enter SubTitle">
                                 </div>
                                
                               
                                 <div class="col-md-1 mb-3"></div>
                                

                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01" style="font-weight: bolder">Launching Date</label>
                                    <input type="date" class="form-control" value="<?php echo $rname[4]?>" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" name="date"  >
                                 </div>
                                 
                               
                                 <div class="col-md-1 mb-3"></div>
                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01" style="font-weight: bolder"> News Data</label>
                                   
                                    <textarea rows="15" class="form-control" style="border-bottom: 1px solid gray;border-radius: 0px;line-height: 14px" name="nd"><?php echo $rname[6]?></textarea>
                                 </div>
                                 
                                 <div class="col-md-1 mb-3"></div>
                               
                            
                                 <button class="btn btn-primary btn-lg" type="submit" name="save">Update</button>
                                 <button class="btn btn-danger btn-lg" type="submit" style="margin-left: 10px">Cancel</button>
                              </div>
                           </form>
                        </div>
                     </div>
                   <div class="col-sm-12 col-lg-1" ></div>
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





<?php
if (isset($_POST['save']))
{
    $title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
    $date=$_POST['date'];
    
    $description=$_POST['nd'];
   
    $id=$_POST['id'];

 if (mysqli_query($con ,"UPDATE uploadnews SET TITLE='". $title."', SUBTITLE='".$subtitle."',DATE2='".$date."',DESCRIPTION='".$description."' WHERE ID='".$id."'")) {
            echo "
                <script>
                    alert ('News UPDATED SUCCESSFULLY..........!');
                 window.location.href='news_view2.php';
                </script>
            ";
            # code...
        }
        else
        {
            echo "
                <script>
                    alert ('TRY AGAIN..........!');
                  window.location.href='news_view2.php';
                </script>
            ";
        }
}
?>