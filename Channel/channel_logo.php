<?php
    $con=mysqli_connect("localhost","root","","news_portal")or die("ERROR..!");
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

                  <div class="col-sm-4 col-lg-4 well"  >
                   


                         <div class="iq-card" style="border-top: orange 3px solid;border-radius: 10px">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Channel Logo</h4>
                              </div>
                           </div>
                           <div class="iq-card-body">
                              <form action="channel_logo.php" method="POST" enctype="multipart/form-data">
                                 <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      

                                      <label for="validationDefault01">Select Logo :</label><br>

                                      <input type="file" class="form-control" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" name="image" >
                                    </div>
                                 </div>  
                                
                                 <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="save">Save</button>
                                    <button class="btn btn-danger" type="submit">Cancel</button>
                                 </div>
                              </form>
                           </div>
                        </div>


                  </div >  
                  <div class="col-sm-8 col-lg-8 well"  >



                                          <div class="iq-card" style="border-top: orange 3px solid;border-radius: 10px">
                     <div class="iq-card-body">
                          
                          <div class="table-responsive">
                             <table class="table">
                                <thead>
                                   <tr style="background-color: #000080;color: #fff">
                                      <th scope="col">Sr. No</th>
                                      <th scope="col">logo</th>
                                      <th scope="col">Delete</th>

                                  
                                   </tr>
                                </thead>
                                <tbody>
                                   

                                   <?php
                                   $a=mysqli_query($con,"SELECT * FROM channel_logo WHERE CID='".$_SESSION['channel']."'");
                                   while($row=mysqli_fetch_row($a))
                                      {
                                         echo '
                                            <tr>
                                               <td>'.$row[0].'</td>
                                               <td>
                                               <img src='.$row[1].' style="height:150px;width:150px">
                                            </td>

                                            <td>
                                               <a href="logo_delete.php?id='.$row[0].'">
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
   echo "SELECT * FROM channel_logo WHERE CID='".$_SESSION['channel']."'";
  $qu=mysqli_query($con,"SELECT * FROM channel_logo WHERE CID='".$_SESSION['channel']."'");
  {
      if(mysqli_num_rows($qu)>0)
      {
           echo "
                   <script>
                       alert ('Your Logo Already Set If you want to update then delete previous logo from below...');
                   </script>
               ";
      }
      else
      {
        

         $max1=mysqli_query($con,"select MAX(ID) from channel_logo");
$max=mysqli_fetch_row($max1);

      if($max[0])
      {
        $max=$max[0];
        $max_id=$max+1;
      }
      else 
      {
       $max_id=1;
       } 
      $file_exists=array("jpg","jpeg","png","gif","bmp","pdf");//file extenssions supported for upload 

        
        $upload_exists = end (explode('.', $_FILES["image"]["name"]));//find extension of file 
        if(($upload_exists==null )||($upload_exists==""))//file is none or of 0kb
        {
            
            echo"<script>alert('uncompatible file'); </script>";
        }
        else
        {
            if((($_FILES['image']['size']<2000000) || in_array($upload_exists,$file_exists)))//file size & file extension support
            {
             $newname="$max_id"."_logo."."png";//name of file name to be saveds
                $targetfile='upload/'.$newname;//location of folder with target file name 
                if($_FILES['image']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');</script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);//end img code
    
   

        if (mysqli_query($con ,"INSERT INTO channel_logo VALUES('','".$targetfile."','".$_SESSION['channel']."')")) {
            echo "
                <script>
                    alert ('LOGO ADDED SUCCESSFULLY..........!');
                    window.location.href='channel_logo.php';
                </script>
            ";
            # code...
        }
        else
        {
            echo "
                <script>
                    alert ('TRY AGAIN..........!');
                    window.location.href='channel_logo.php';
                </script>
            ";
        }
    }}}
    



      }
  }
    
}
?>