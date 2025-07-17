<?php
  $con=mysqli_connect("localhost","root","","news_portal")or die("ERROR...!");
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
      <title>News Portal</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="../admin/images/favicon.ico" />
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
      <script type="text/javascript">
        function get_state(state_id)
        {
          $.ajax(
            {
              type:"POST",
              url:"dist_ajax.php",
              data:'sid='+state_id,
              success:function(data)
              {
                  $("#dst").html(data);
                 // document.getElementById('dst').value=data;
              }
            });
        }
         function get_taluka(dist_id)
        {
          $.ajax(
            {
              type:"POST",
              url:"taluka_ajax.php",
              data:'did='+dist_id,
              success:function(data)
              {
                  $("#tal").html(data);
                 // document.getElementById('dst').value=data;
              }
            });
        }
      </script>

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
               <br>
               <br>
               
               <div class="row">
                  <!-- <div class="col-sm-12 col-lg-1"></div> -->
                  <div class="col-sm-1 col-lg-1 well"></div>

                  <div class="col-sm-5 col-lg-5 well">
                         <div class="iq-card" style="border-top: orange 3px solid;border-radius: 10px">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Area</h4>
                              </div>
                           </div>
                           <div class="iq-card-body">
                              <form action="area.php" method="POST">
                                 <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                       <label for="validationDefault01" name="state">Select State</label>

                                       <select name="state" id="" class="form-control" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" onchange="get_state(this.value)">
                                       <option value="Select State" >Select State</option>
                                        
                                          <?php
                                            $a=mysqli_query($con,"SELECT * FROM state");
                                            while($row=mysqli_fetch_row($a))
                                               {
                                                  echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                                }
                                          ?>

                                       </select>
                                    </div>
                                    <div class="col-md-12 mb-3"></div>
                                    
                                    <div class="col-md-12 mb-3">
                                       <label for="validationDefault01" name="district">Select District</label>
                                       <select name="district"  class="form-control" id="dst" style="border-bottom: 1px solid gray;border-radius: 0px" onchange="get_taluka(this.value)">
                                        <option value="select District">Select District</option>
                                        
                                       </select>
                                    </div>
                                    <div class="col-md-12 mb-3"></div>
                                    <div class="col-md-12 mb-3">
                                       <label for="validationDefault01" name="city">Select Taluka</label>
                                       <select name="city" class="form-control" id="tal" style="border-bottom: 1px solid gray;border-radius: 0px"  >
                                       <option value="Select Taluka" >Select Taluka</option>
                                       
                                       </select>
                                    </div>


                                    <div class="col-md-12 mb-3"></div>
                                    <div class="col-md-12 mb-3">
                                       <label for="validationDefault01">Area</label>
                                       <textarea class="form-control" name="location"></textarea>
                                    </div>


                                 </div>  
                                 
                                  
                                
                                 <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="save">Save</button>
                                    <button class="btn btn-danger" type="submit">Cancel</button>
                                 </div>
                                 <br>
                              </form>
                           </div>
                  </div>


                  <div class="col-sm-6 col-lg-6 well"></div>


                  </div >  
               
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
    $state=$_POST['state'];
    $district=$_POST['district'];
    $city=$_POST['city'];
    $location=$_POST['location'];
   

        if (mysqli_query($con ,"INSERT INTO area VALUES('','".$state."','".$district."','".$city."','".$location."','".$_SESSION['channel']."')")) {
            echo "
                <script>
                    alert ('AREA ADDED SUCCESSFULLY..........!');
                    window.location.href='area.php';
                </script>
            ";
            # code...
        }
        else
        {
            echo "
                <script>
                    alert ('TRY AGAIN..........!');
                    window.location.href='area.php';
                </script>
            ";
        }
}
?>