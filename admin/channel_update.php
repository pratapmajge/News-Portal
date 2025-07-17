<?php
$con=mysqli_connect("localhost","root","","news_portal")or die("ERROR..!");
$id=$_GET['id'];
$rname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM add_channel WHERE ID='".$id."'"));
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
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>News Portal web Application</title>
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
                <h3 style="color:green;font-weight: bolder;font-size: 35px">Channel Update</h3>
            </div>
            <div class="col-sm-2"></div>
        </div><br>
        <form action="channel_update.php?id=<?php echo $rname[0]?>" enctype="multipart/form-data" method="POST" style="border-top: orange 3px solid;border-radius: 10px"><br>
        <div class="row">
           <div class="col-sm-2"></div>
           
           <div class="col-sm-4">            
                <input type="text" name="name" value="<?php echo $rname[1]?>" id="" placeholder="Enter Name" class="form-control" style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; " > <br> <br>

                 <!-- <input type="file" name="image"  id=""  class="form-control" style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px" > <br> <br> -->
           <input type="hidden" name="id" value="<?php echo $rname[0]?>">
                <input type="email" name="email" value="<?php echo $rname[2]?>" id="" placeholder="Enter Email" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "><br> <i style="color:red; font-size:12px">Opening Date</i> <br>
            
                <input type="date" name="date" value="<?php echo $rname[3]?>" id="" placeholder="Enter Opening datel" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206); border-radius: 10px;"><br><br>

                <input type="text" name="username" value="<?php echo $rname[4]?>" id="" placeholder="Enter Username" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "><br><br>

                <input type="number" name="charges" value="<?php echo $rname[5]?>" id="" placeholder="Enter yearly charges" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "><br><br>



           </div>
           <div class="col-sm-4">
                <input type="tel" name="mob" value="<?php echo $rname[6]?>" id="" placeholder="Enter Contact" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "> <br><br>

                <input type="number" name="adhar" value="<?php echo $rname[7]?>" id="" placeholder="Enter Adhar Number" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "><br><br>
                
                <input type="text" name="channel_name" value="<?php echo $rname[8]?>" id="" placeholder="Enter Channel Name" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "><br><br>

                <input type="password" name="password" value="<?php echo $rname[9]?>" id="" placeholder="Enter Password" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "><br><br>

                <input type="text" name="education" value="<?php echo $rname[10]?>" id="" placeholder="Enter your Education" class="form-control"  style="border-bottom: 1px solid rgb(193, 77, 206);border-radius: 10px; "><br><br>
                

                <!-- <input type="button" name="" id=""> -->
           </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                    <div class="col-sm-5">
                       <button type="submit" name="submit" class="btn btn-primary" style="background-color:aquamarine;color:black;border:1px solid black;text-align:center">Submit</button>
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

<?php
if(isset($_POST['submit'])) 
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $date=$_POST['date'];
   $username=$_POST['username'];
   $charges=$_POST['charges'];
   $mob=$_POST['mob'];
   $adhar=$_POST['adhar'];
   $channel_name=$_POST['channel_name'];
   $password=$_POST['password'];
   $education=$_POST['education'];
    $id=$_POST['id'];

  
               

   if (mysqli_query($con ,"UPDATE add_channel SET NAME='". $name."', EMAIL='".$email."',DATE='". $date."',USERNAME='". $username."',CHARGES='".$charges."',CONTACT='".$mob."',ADHAR='".$adhar."',CHANNEL_NAME='".$channel_name."',PASSWORD='".$password."',EDUCATION='".$education."' WHERE ID='".$id."'")) {
            echo "
                <script>
                    alert ('CHANNEL UPDATED SUCCESSFULLY..........!');
                   window.location.href='view_channel.php';
                </script>
            ";
            # code...
        }
        else
        {
            echo "
                <script>
                    alert ('TRY AGAIN..........!');
                    window.location.href='channel_update.php';
                </script>
            ";
        }
      }

?>