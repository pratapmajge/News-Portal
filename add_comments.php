<?php
$con=mysqli_connect("localhost","root","","news_portal")or die("Database Problem...!!");

$a=mysqli_query($con,"SELECT * FROM add_comments");
$comments=mysqli_num_rows($a);

?>

<!DOCTYPE html>
<html lang="en">

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
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Comment us</h5>
                <h1 class="mb-0">If You Have Any Query, Feel Free To Comment</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+91 99999 99999</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email to get free quote</h5>
                            <h4 class="text-primary mb-0">newsportal@gmail.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visit our office</h5>
                            <h4 class="text-primary mb-0">PLGPL</h4>
                        </div>
                    </div>
                </div>
            </div>


   


    


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="">
                        
                    </div>
                    <!-- Blog Detail End -->
    
                    <!-- Comment List Start -->
                                       <div class="bg-light rounded p-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Leave A Comment</h3>
                        </div>
                        <form action="add_comments.php" method="POST">
                            <div class="row g-2">
                                <div class="col-12 col-sm-6">
                                    <input type="text"  autocomplete="off" required="true" class="form-control bg-white border-0" name="cname" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" autocomplete="off" required="true"  class="form-control bg-white border-0" name="email" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="date"  autocomplete="off" required="true" class="form-control bg-white border-0" name="date" placeholder="Website" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0" autocomplete="off" required="true" rows="5" name="message" placeholder="Comment"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name="save" type="submit">Leave Your Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>






                    <!-- Comment List End -->
                    
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.968362712602!2d76.56028637470502!3d18.394290973020325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcf83c3007dfa5b%3A0x140f475bd9771cd0!2sPuranmal%20Lahoti%20Government%20Polytechnic!5e0!3m2!1sen!2sbd!4v1683703023124!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                        
                     <!--    <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    </div>
                   


        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        
                    </div>
                    <!-- Blog Detail End -->
    
                    <!-- Comment List Start -->
                     <div class="mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0"><?php  echo $comments ?> Comments</h3>
                        </div>
                        <div class="d-flex mb-4">
                           
                            <div class="ps-3">
                                <?php
                                    $a=mysqli_query($con,"SELECT * FROM add_comments");
                                    while($row=mysqli_fetch_row($a))
                                    {

                                echo '

                                <h6 style="color:black; font-size:23px">'.$row[1].' | <small style="color:black;font-size:15px"><i>'.$row[4].'</i></small></h6>
                                <p>'.$row[2].'</p>
                                 <button class="btn btn-sm btn-light">Reply</button>


                                ';

                            }
                                ?>
                               
                            </div>
                        </div>
                    
                       
                    </div> 
                    <!-- Comment Form End -->
                </div>
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                   
                    <!-- Search Form End -->
    
                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                       
                    </div>
                    <!-- Category End -->
    
                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        
                    </div>
                    <!-- Recent Post End -->
    
                    <!-- Image Start -->
                    
                    <!-- Image End -->
    
                    <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                       
                    </div>
                    <!-- Tags End -->
    
                    <!-- Plain Text Start -->
                   
                    <!-- Plain Text End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->


    
    

    
    <!-- Footer End -->


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
<?php
    include("footer.php");
 ?>
<?php
    if (isset($_POST['save'])) 
    {
        $name=$_POST['cname'];
        $message=$_POST['message'];
        $email=$_POST['email'];
        $date=$_POST['date'];

        if (mysqli_query($con,"INSERT INTO add_comments VALUES ('','".$name."','".$message."','".$email."','".$date."')"))
         {
            echo "
         <script>
            alert('Comment added successfully...!!');
            window.location.href='add_comments.php';
         </script>
      ";
        }
         else
       {
          echo "
             <script>
                alert('Try Again..!!');
                window.location.href='add_comments.php';
             </script>
          ";
       }
    }
?>