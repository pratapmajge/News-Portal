<?php
    $con=mysqli_connect("localhost","root","","news_portal")or die("ERROR..!");
    $id=$_GET['id'];
    $rname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM reporterdata WHERE ID='".$id."'"));
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
       <script type="text/javascript">
        function get_state(state_id)
        {
          $.ajax(
            {
              type:"POST",
              url:"Reporterdist_ajax.php",
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
              url:"reportertaluka_ajax.php",
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
                  <div class="col-sm-12 col-lg-2"></div>

                  <div class="col-sm-12 col-lg-9" >
                     <div class="iq-card" style="border-top: orange 3px solid;border-radius: 10px">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Reporter Update</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form action="reporter_update.php?id=<?php echo $rname[0]?>" method="POST"  enctype="multipart/form-data"  >
                              <div class="form-row">
                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01">Enter Name</label>
                                    <input type="hidden" name="id" value="<?php echo $rname[0]?>">
                                    <input type="text" value="<?php echo $rname[2]?>" class="form-control" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" name="name" placeholder="Enter Name">
                                 </div>
                                 <div class="col-md-1 mb-3"></div>
                                 
                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01">Enter Email</label>
                                    <input type="text" class="form-control" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" value="<?php echo $rname[3]?>" name="email" placeholder="Enter Email">
                                 </div>

                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01">Enter Adhar No.</label>
                                    <input type="text" class="form-control" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" value="<?php echo $rname[4]?>" name="adhar" placeholder="Enter Adhar No.">
                                 </div>
                                 <div class="col-md-1 mb-3"></div>
                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01">Enter Contact</label>
                                    <input type="text" class="form-control" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" value="<?php echo $rname[5]?>" name="contact" placeholder="Enter Contact">
                                 </div>

                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01">select Date of Birth</label>
                                    <input type="date" class="form-control" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" value="<?php echo $rname[6]?>" name="dob" placeholder="Enter DOB">
                                 </div>
                                 <div class="col-md-1 mb-3"></div>
                               
                                 

                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01">Enter Address</label>
                                   <textarea class="form-control" name="add"><?php echo $rname[7]?></textarea>
                                 </div>
                                 <div class="col-md-1 mb-3"></div>                                                                                                                        
                              </div>
                             
                              <div class="form-group">
                                 <button class="btn btn-primary" type="submit" name="save">Save</button>
                                 <button class="btn btn-danger" type="submit">Cancel</button>
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
    $name=$_POST['name'];
    $email=$_POST['email'];
    $adhar=$_POST['adhar'];
    $contact=$_POST['contact'];
    $date=$_POST['dob'];
    $add=$_POST['add'];
    $id=$_POST['id'];


        if (mysqli_query($con ,"UPDATE reporterdata SET NAME='". $name."', EMAIL='".$email."',ADHAR_NO='".$adhar."',CONTACT='".$contact."',DATE='".$date."',ADDRESS='".$add."' WHERE ID='".$id."'")) {
            echo "
                <script>
                    alert ('REPORTER UPDATED SUCCESSFULLY..........!');
                   window.location.href='reporter-view.php';
                </script>
            ";
            # code...
        }
        else
        {
            echo "
                <script>
                    alert ('TRY AGAIN..........!');
                    window.location.href='reporter_update.php';
                </script>
            ";
        }
      }
   
?>