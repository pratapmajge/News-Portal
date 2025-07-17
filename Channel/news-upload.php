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
              url:"newsUploadState_ajax.php",
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
              url:"newsUploadTaluka_ajax.php",
              data:'did='+dist_id,
              success:function(data)
              {
                  $("#tal").html(data);
                 // document.getElementById('dst').value=data;
              }
            });
        }

        function get_area(tid)
        {
           $.ajax(
            {
              type:"POST",
              url:"areas_ajax.php",
              data:'tid='+tid,
              success:function(data)
              {
                  $("#ar").html(data);
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
                <div class="row">
                  <div class="col-sm-12 col-lg-1"></div>

                  <div class="col-sm-12 col-lg-10" >
                     <div class="iq-card" style="border-top: orange 3px solid;border-radius: 10px">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h3 class="card-title">News Upload</h3>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form action="news-upload.php" method="POST" enctype="multipart/form-data">
                              <div class="form-row">
                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01" style="font-weight: bolder">Enter Title</label>
                                    <input type="text" class="form-control" autocomplete="off" required="true" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" name="title" placeholder="Enter Title">
                                 </div>
                                 <div class="col-md-1 mb-3"></div>
                                 
                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01" style="font-weight: bolder">Enter Subtitle</label>
                                    <input type="text" class="form-control" autocomplete="off" required="true" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" name="subtitle"  placeholder="Enter SubTitle">
                                 </div>

                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01" style="font-weight: bolder">Reporter Name</label>
                                    <select name="rname" required="true" class="form-control" id="validationDefault01">
                                      <option>Select Reporter</option>
                                       <?php
                                    $c=mysqli_query($con,"SELECT * FROM reporterdata WHERE CHANNEL_ID='".$_SESSION['channel']."'");
                                    while($row=mysqli_fetch_row($c))
                                      {
                                        echo '
                                          <option value='.$row[0].'>'.$row[2].'</option>
                                        ';
                                      }
                                      ?>
                                    </select>
                                 </div>
                                 <div class="col-md-1 mb-3"></div>
                                

                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01" style="font-weight: bolder">Launching Date</label>
                                    <input type="date" class="form-control" autocomplete="off" required="true" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" name="date"  >
                                 </div>
                                 
                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01" style="font-weight: bolder">News Banner</label>
                                    <input type="file" class="form-control" autocomplete="off" required="true" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" name="image">
                                 </div>
                                 <div class="col-md-1 mb-3"></div>
                                 <div class="col-md-5 mb-3">
                                    <label for="validationDefault01" style="font-weight: bolder">Enter News Data</label>
                                    <textarea class="form-control" autocomplete="off" required="true" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px;height: 50px" name="description"></textarea>
                                 </div>

                             
                                 <div class="col-md-1 mb-3"></div>
                                <div class="col-md-5 mb-3">
                                    <label for="validationDefault01" style="font-weight: bolder">Category</label>
                                    <select name="category" required="true" class="form-control" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px">
                                      <option>News Category</option>

                                    <?php
                                    $b=mysqli_query($con,"SELECT * FROM add_category");
                                    while($row=mysqli_fetch_row($b))
                                       {
                                        echo '
                                    
                                      <option value='.$row[0].'>'.$row[1].'</option>

                                      ';}
                                      ?>
                                    </select>
                                 </div>
                                  <div class="col-md-1 mb-3"></div>
                                  <div class="col-md-5 mb-3">
                                    <label for="validationDefault01" style="font-weight: bolder">News State</label>
                                    <select name="state" required="true" class="form-control" id="validationDefault01" style="border-bottom: 1px solid gray;border-radius: 0px" onchange="get_state(this.value)">
                                      <option> News State</option>

                                    <?php
                                            $a=mysqli_query($con,"SELECT * FROM state");
                                            while($row=mysqli_fetch_row($a))
                                               {
                                                  echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                                }
                                    ?>
                                    </select>
                                 </div>
                                  <div class="col-md-1 mb-3"></div>
                                  <div class="col-md-5 mb-3">
                                    <label for="validationDefault01" style="font-weight: bolder">News District</label>
                                    <select name="district" required="true" class="form-control" id="dst" style="border-bottom: 1px solid gray;border-radius: 0px" onchange="get_taluka(this.value)">
                                      <option> News District</option>

                                   
                                    </select>
                                 </div>
                                  <div class="col-md-1 mb-3"></div>
                                    <div class="col-md-5 mb-3">
                                      <label for="validationDefault01" style="font-weight: bolder">Taluka</label>
                                      <select name="taluka" required="true" class="form-control" id="tal" style="border-bottom: 1px solid gray;border-radius: 0px" onchange="get_area(this.value)">
                                        <option> News Taluka</option>

                                     
                                      </select>
                                   </div>
                                  </div>

                                      <div class="col-md-5 mb-3">
                                    <label for="validationDefault01" style="font-weight: bolder">Area</label>
                                    <select name="area" required="true" class="form-control" id="ar" style="border-bottom: 1px solid gray;border-radius: 0px">
                                      <option>News Area</option>
                                      
                                    </select>
                                 </div>

                              <div class="form-group">
                                 <button class="btn btn-primary btn-lg" type="submit" name="save">Save</button>
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
    $rname=$_POST['rname'];
    $date=$_POST['date'];
    $photo=$_POST['image'];
    $description=$_POST['description'];
    $area=$_POST['area'];
    $category=$_POST['category'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $taluka=$_POST['taluka'];



    $max1=mysqli_query($con,"select MAX(ID) from uploadnews");
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
             $newname="$max_id"."_news_img."."png";//name of file name to be saveds
                $targetfile='upload/'.$newname;//location of folder with target file name 
                if($_FILES['image']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');</script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);//end img code


        if (mysqli_query($con ,"INSERT INTO uploadnews VALUES('','".$title."','".$subtitle."','".$rname."','".$date."','".$targetfile."','".$description."','".$area."','".$category."','".$state."','".$district."','".$taluka."','".$_SESSION['channel']."','NO')")) {
            echo "
                <script>
                    alert ('NEWS UPLOADED SUCCESSFULLY..........!');
                    window.location.href='news-upload.php';
                </script>
            ";
            # code...
        }
        else
        {
            echo "
                <script>
                    alert ('TRY AGAIN..........!');
                    window.location.href='news-upload.php';
                </script>
            ";
        }
        }
        }
        }
}
?>