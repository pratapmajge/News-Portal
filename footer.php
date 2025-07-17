<?php
  $con=mysqli_connect("localhost","root","","news_portal")or die("ERROR..!");
?>

<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about" style="height: 300px">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.php" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>News Portal</h1>
                        </a>
                        <p class="mt-3 mb-4">News Portal Web Application. Here you will find different types of news under a common site. </p>
                        
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Latur</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">Newsportal.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+91 999 9999 999</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Channels</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">

                                 <?php
                                        $add=mysqli_query($con,"SELECT * FROM add_channel ");
                                        while ($row=mysqli_fetch_row($add)) {
                                            echo'
                                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>'.$row[8].'</a>
                                            ';
                                        }
                                  ?>
                                <!-- <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>News 24</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>A1 news</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>BBC news</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>TMG news network</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Times now</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>NE news</a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Categories</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <?php
                                        $add=mysqli_query($con,"SELECT * FROM add_category ");
                                        while ($row=mysqli_fetch_row($add)) {
                                            echo'
                                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>'.$row[1].'</a>
                                            ';
                                        }
                                  ?>
                               <!--  <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Economical</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Sport</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Politics</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Education</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Entertainment</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Environment</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">News Portal&nbsp;</a>. All Rights Reserved.&nbsp; 
                        
                        Designed by&nbsp; S.Mahindrakar,S.Kulkarni,P.Majge,M.Shaikh</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>