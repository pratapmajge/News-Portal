<!doctype html>
<html lang="en">
<?php
$con=mysqli_connect("localhost","root","","news_portal")or die("Database Problem...!!");
?>

   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>News Portal Web Application</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="logo-1.png" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="admin/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="admin/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="admin/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="admin/css/responsive.css">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <br>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
          <div id="container-inside">
              <div class="cube"></div>
              <div class="cube"></div>
              <div class="cube"></div>
              <div class="cube"></div>
              <div class="cube"></div>
          </div>
            <div class="container p-0">
                <div class="row no-gutters height-self-center">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-8 align-self-center bg-primary rounded" >
                    <div class="row m-0">
                      <div class="col-md-6 bg-white sign-in-page-data">
                          <div class="sign-in-from" style="margin-top: 100px">
                              <h1 class="mb-0 text-center">Sign in</h1>
                              
                              <form class="mt-4" action="login.php" method="POST">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Enter Username</label>
                                      <input required="true" autocomplete="off" type="text"  class="form-control mb-0" id="exampleInputEmail1" name="uname" placeholder="Enter Your User name">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputEmail1"> Password</label>
                                      <input required="true" type="password" autocomplete="off" class="form-control mb-0" id="exampleInputEmail1" name="pass" placeholder="Enter Password">
                                  </div>
                                
                                  <div class="sign-info text-center">
                                      <button name="login" type="submit" class="btn btn-primary d-block w-100 mb-2">Sign in</button>
                                     <!--  <span class="text-dark dark-color d-inline-block line-height-2">Don't have an account? <a href="#">Sign up</a></span> -->
                                  </div>
                              </form>
                          </div>
                      </div>
                      <br>
                      <div class="col-md-6 text-center sign-in-page-image">
                          <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><div style="color: wheat;font-size: 30px; font-style:italic;">News Portal</div></a>
                              <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                  <div class="item">
                                      <img src="login_image.png" class="img-fluid mb-4" alt="logo">
                                      <h4 class="mb-1 text-white">Stay Updated</h4>
                                      <p>Yesterday is not ours to recover, but tomorrow is ours to win or lose.</p>
                                  </div>
                                  <div class="item">
                                      <img src="login_image2.jfif" class="img-fluid mb-4" alt="logo"> 
                                      <h4 class="mb-1 text-white">Connect with the world</h4>
                                      <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                  </div>
                                  <div class="item">
                                      <img src="login_image4.webp" class="img-fluid mb-4" alt="logo">
                                      <h4 class="mb-1 text-white">Take A Look</h4>
                                      <p>We must open the doors of opportunity. But we must also equip our people to walk through those doors.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
       
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="admin/js/jquery.min.js"></script>
      <script src="admin/js/popper.min.js"></script>
      <script src="admin/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="admin/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="admin/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="admin/js/waypoints.min.js"></script>
      <script src="admin/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="admin/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="admin/js/apexcharts.js"></script>
      <!-- lottie JavaScript -->
      <script src="admin/js/lottie.js"></script>
      <!-- Slick JavaScript --> 
      <script src="admin/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="admin/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="admin/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="admin/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="admin/js/smooth-scrollbar.js"></script>
      <!-- Style Customizer -->
      <script src="admin/js/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="admin/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="admin/js/custom.js"></script>
   </body>
</html>
<?php

if(isset($_POST['login']))
{
    
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    
    $res=mysqli_query($con,"SELECT * FROM admin WHERE USERNAME='".$uname."' && PASSWORD='".$pass."'");
    $row=mysqli_fetch_row($res);

   if($num=mysqli_num_rows($res)>0)
     {
     session_start();
     $_SESSION['admin']=$row[0];

    echo'
    <script>
   window.location.href="admin/index.php";
    </script>
    ';
    }
  
    else
    {
        echo'
    <script>
    alert("Wrong Username & Password ");
   window.location.href="login.php";
    </script>
    ';
    }
}
?>