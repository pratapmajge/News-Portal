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

        function get_data1(did)
        {
          $.ajax(
            {
              type:"POST",
              url:"area_data_ajax.php",
              data:'did='+did,
              success:function(data)
              {
                  $("#area_table").html(data);
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

                  <div class="col-sm-4 col-lg-4 well">
                         <div class="iq-card" style="border-top: orange 3px solid;border-radius: 10px">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Area</h4>
                              </div>
                           </div>
                           <div class="iq-card-body">
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
                                       <select name="city" class="form-control" id="tal" style="border-bottom: 1px solid gray;border-radius: 0px" onchange="get_data1(this.value)"  >
                                       <option value="Select Taluka" >Select Taluka</option>
                                       
                                       </select>
                                    </div>


                                  


                                 </div>  
                                 
                                  
                                
                                
                                 <br>
                           </div>
                        </div>


                  </div >  
                  <div class="col-sm-8 col-lg-8 well"  id="area_table">
                    <div class="iq-card" style="border-top: orange 3px solid;border-radius: 10px">
                     <div class="iq-card-body">                    
                          <div class="table-responsive">
                             <table class="table">
                                <thead>
                                  <tr style="background-color: #000080;color: #fff">
                                    <th scope="col">Sr. No</th>
                                    <th scope="col">State</th>
                                    <th scope="col">District</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>                          
                                  </tr>
                                </thead>
                                <tbody>                                   
                                   <?php
                                   $sr=1;

                                   $a=mysqli_query($con,"SELECT * FROM area WHERE CID='".$_SESSION['channel']."'");
                                   while($row=mysqli_fetch_row($a))
                                      {
                                        $sname1=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM state WHERE S_ID='".$row[1]."'"));

                                        $dname1=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM district WHERE D_ID='".$row[2]."'"));

                                        $tname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM taluka WHERE T_ID='".$row[3]."'"));

                                         echo '
                                            <tr>
                                               <td>'.$sr.'</td>
                                               <td>'.$sname1[1].'</td>
                                               <td>'.$dname1[1].'</td>
                                               <td>'.$tname[1].'</td>
                                               <td>'.$row[4].'</td>

                                               <td>
                                                  <button style="text-align: center;font-size: 20px;background-color: green;color: white" type="button" class="btn btn-lg"><i class="fa fa-pencil-square-o"></i></button>
                                               </td>
                                               <td>
                                               <a href="area-delete.php?id='.$row[0].'">
                                                  <button style="text-align: center;font-size: 20px" type="button" class="btn btn-danger btn-lg"><i class="fa fa-trash"></i></button>
                                               </a>   
                                               </td>
                                               
                                             </tr>
                                         ';
                                         $sr++;
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

