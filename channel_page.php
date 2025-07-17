<!DOCTYPE html>
<html lang="en">
<?php
$con=mysqli_connect("localhost","root","","news_portal")or die("Database Problem...!!");
$ban1=mysqli_query($con,"SELECT * FROM channel_banner WHERE chbanner='".$_GET['id']."'");
$banner=mysqli_fetch_row($ban1);

// $ch_info2=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM add_channel WHERE ID='".$banner[3]."'"));
$ch_info22=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM add_channel WHERE ID='".$_GET['id']."'"));
?>
<head>
    <meta charset="utf-8">
    <title>News Portal Web Application</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript">
        function get_cat_data(cid)
        {
            var cha_id=document.getElementById('cha_id').value;
            $.ajax(
            {
              type:"POST",
              url:"catwise_news_ajax.php",
              data: {cid: cid, cha_id: cha_id},

              success:function(data)
              { 
                  $("#cat_data").html(data);
                 // document.getElementById('dst').value=data;
              }
            });
        }

        function get_date_wise(dt)
        {
          var cha_id=document.getElementById('cha_id').value;
            $.ajax(
            {
              type:"POST",
              url:"datewise_news_ajax.php",
              data: {dt: dt, cha_id: cha_id},

              success:function(data)
              { 
                  $("#cat_data").html(data);
                 // document.getElementById('dst').value=data;
              }
            });  
        }
    </script>
</head>

<body>
    <!-- Spinner Start -->
   


       <?php
$con=mysqli_connect("localhost","root","","news_portal")or die("Database Problem...!");
?>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>News Portal,Latur.</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+91 99999 99999</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>newsportal@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
  <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <?php
                echo'<h1 class="m-0"><img src="admin/'.$ch_info22[11].'" style="height: 80px;width: 90px"></h1>';
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" >
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link" style="color: #fff">Home</a>
                    <!-- <a href="about.php" class="nav-item nav-link" style="color: #fff">About</a>
                    <a href="services.php" class="nav-item nav-link" style="color: #fff">Services</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: #fff">Login</a>
                        <div class="dropdown-menu m-0">
                            <a href="login.php" class="dropdown-item">Admin Login</a>
                            <a href="login2.php" class="dropdown-item">Channel Login</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: #fff">Channel</a>
                        <div class="dropdown-menu m-0">
                            <!-- <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.html" class="dropdown-item">Our features</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a> -->
                            <?php
                                 $b=mysqli_query($con,"SELECT * FROM add_channel");
                                    while($row=mysqli_fetch_row($b))
                                       {
                                          echo '
                            <a href="channel_page.php?id='.$row[0].'" class="dropdown-item">'.$row[8].'</a>
                             ';
                                      }
                                          ?> 

                        </div>
                    </div>
                     
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"></butaton>
                <a href="create_channel.php" class="btn py-1 px-3 ms-2" style="width: 160px;color: black;">Request Channel</a>
            </div>
        </nav>

    

        <div class="container-fluid bg-primary py-5"   style="margin-bottom: 90px;background: linear-gradient(rgba(9, 30, 62, .2), rgba(9, 30, 62, .7)), url(Channel/<?php 
    echo $banner[2]?>) center center no-repeat;
    background-size: cover">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn"><?php echo $ch_info22[8]?></h1>
                    <a href="" class="h5 text-white"><?php echo $banner[1]?></a>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    
                        <input type="hidden" value="<?php echo $_GET['id']?>" name="" id="cha_id" >

    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"  style="margin-top: -100px">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-9" >
                    <div class="row g-5" id="cat_data">

                       <?php
                        $a=mysqli_query($con,"SELECT * FROM uploadnews WHERE CID='".$_GET['id']."' && STATUS='YES' ORDER BY DATE2 DESC");
                         while($row=mysqli_fetch_row($a))
                           {
                            $originalDate = $row[4];
                            $newDate = date("d-m-Y", strtotime($originalDate));

                             $rname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM reporterdata WHERE ID='".$row[3]."'"));

                            echo '
                               
                                <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s" style="height:600px">
                                    <div  class="blog-item bg-light rounded overflow-hidden" style="height:600px">
                                        <div class="blog-img position-relative overflow-hidden" style="height:300px">
                                            <img class="img-fluid" src="channel/'.$row[5].'" alt="">
                                            
                                        </div>
                                        <div class="p-4">
                                            <div class="d-flex mb-3">
                                                <small class="me-3" style="color:blue"><i class="far fa-user text-primary me-2" ></i>Reporter: '.$rname[2].'</small>
                                                <small><i class="far fa-calendar-alt text-primary me-2"></i>'.$newDate.'</small>
                                            </div>
                                            <h4 class="mb-3" style="font-size:16px">'.$row[1].'</h4>';
                                            $str=substr($row[2],0,150);
                                            echo'<p style="font-size:14px">'.$str.'......</p>';
                                            echo'<a class="text-uppercase" href="news_details.php?id='.$row[0].'">Read More <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>';
                            }
                                ?>
                       
                       
                    </div>
                </div>
                <!-- Blog list End -->
    
                <!-- Sidebar Start -->
                <div class="col-lg-3">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="date" class="form-control" onchange="get_date_wise(this.value)">
                            <!-- <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button> -->
                        </div>
                    </div>
                    <!-- Search Form End -->
    
                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Categories</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#" >
                                <i class="bi bi-arrow-right me-2"></i> <?php
                                 $a=mysqli_query($con,"SELECT * FROM add_category");
                                    while($row=mysqli_fetch_row($a))
                                       {
                                          echo '
                                        <a href="#" onclick="get_cat_data('.$row[0].')" class="dropdown-item">'.$row[1].'</a>

                                         ';
                                      }
                                          ?> </a>
                            <!-- <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web Development</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web Development</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Keyword Research</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Email Marketing</a> -->
                        </div>
                    </div>
                    <!-- Category End -->
                     <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Advertisements</h3>
                        </div>
                       
                            <?php
                    $a=mysqli_query($con,"SELECT * FROM add_upload WHERE ADD_ID='".$_GET['id']."'");
                    while($row=mysqli_fetch_row($a)){
                        echo '
                         <div class="row">
                            <div class="col-sm-4">
                                <img class="img-fluid" src="Channel/'.$row[2].'" style="width: 100px; height: 100px flow-l; object-fit: cover;" alt=""> 
                            </div>'; 

                            $str=substr($row[1],0,30);
                            echo '
                            <div class="col-sm-8">
                             
                             <p style="font-size:14px; " class="h5 fw-semi-bold d-flex align-items-center px-3 mb-0">'.$str.'</p>
                           
                             

                            
                            </div></div>
                            ';
                                
                            }
                                ?>
                    
                       
                    </div>
                    <!-- Recent Post End -->
    
                 
                    <!-- Image Start -->
                   
                    <!-- Image End -->
    
                    <!-- Tags Start -->
                  
                    <!-- Tags End -->
    
                    <!-- Plain Text Start -->
                   
                    <!-- Plain Text End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->



    


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                       <?php
                    $a=mysqli_query($con,"SELECT * FROM short_add WHERE ADD_ID='".$_GET['id']."'");
                    while($row=mysqli_fetch_row($a))
                       {
                          echo '
                            <img src="Channel/'.$row[1].'" alt="" style="heigt:100px;width:100px">
                    ';
                            }
                    ?>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    
  <?php 
    include("footer.php");
    ?> 


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>