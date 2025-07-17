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
                <h1 class="m-0"><img src="logo-1.png" style="height: 80px;width: 90px">News Portal</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" >
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link " style="color: #000">Home</a>
                    <a href="#abt" class="nav-item nav-link" style="color: #000">About</a>
                    <!-- <a href="#services" class="nav-item nav-link" style="color: #000">Services</a> -->
                    
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: #000">Channel</a>
                        <div class="dropdown-menu m-0">
                            <!-- <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.html" class="dropdown-item">Our features</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a> -->
                            <?php
                                 $b=mysqli_query($con,"SELECT * FROM add_channel WHERE status='approved'");
                                    while($row=mysqli_fetch_row($b))
                                       {
                                          echo '
                            <a href="channel_page.php?id='.$row[0].'" class="dropdown-item">'.$row[8].'</a>
                             ';
                                      }
                                          ?> 

                        </div>
                    </div>
                    
                     <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: #000">Login</a>
                        <div class="dropdown-menu m-0">
                            <a href="login.php" class="dropdown-item">Admin Login</a>
                            <a href="login2.php" class="dropdown-item">Channel Login</a>
                        </div>
                    </div>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"></butaton>
                <a href="create_channel.php" class="btn py-1 px-3 ms-2" style="width: 160px;color: black">Request Channel</a>
            </div>
        </nav>
