<?php
$con=mysqli_connect("localhost","root","","news_portal")or die("Database Problem...!!");

session_start();
if(isset($_SESSION['channel']))
{

}
else
{
    echo '
  <script>
   window.location.href=s"../index.php";
    </script>
    ';
}
?> 
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

      <link rel="stylesheet" href="css/flatpickr.min.css">
      <script type="text/javascript">
        function get_cat_news(cid)
        {
           $.ajax(
            {
              type:"POST",
              url:"news_category_ajax.php",
              data:'cid='+cid,
              success:function(data)
              {
                  $("#ndata").html(data);
                 // document.getElementById('dst').value=data;
              }
            });
        }

        function upload_news(news_id)
        {
          var a=confirm("Do you Want to Upload This News to Channel..?");
          if(a==true)
          {
            window.location.href='up_news.php?id='+news_id;
          }
        }

      function upload_news_block(news_id)
      {
        var a=confirm("Do you Want to Upload This News to Channel..?");
          if(a==true)
          {
            window.location.href='up_news_block.php?id='+news_id;
          }
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
              <div class="row justify-content-center">
                <div class="col-lg-6"></div>
                <div class="col-lg-4">
                  <select style="border:1px solid #000" class="form-control" onchange="get_cat_news(this.value)">
                    <option>Select Category</option>
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
              </div>
              <br>
               <div class="row justify-content-center">
                  <div class="col-lg-10">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">News Data</h4>
                           </div>
                        </div>
                        <div class="iq-card-body" id="ndata">
                           <ul class="iq-timeline">
                              <hr style="border:1px solid gray">
                                  <?php
                                    $a=mysqli_query($con,"SELECT * FROM uploadnews WHERE CID='".$_SESSION['channel']."'");
                                      while($row=mysqli_fetch_row($a))
                                       {
                                      
                                           $sname1=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM state WHERE S_ID='".$row[9]."'"));

                                           $dname1=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM district WHERE D_ID='".$row[10]."'"));

                                           $tname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM taluka WHERE T_ID='".$row[11]."'"));

                                           $areaname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM area WHERE ID='".$row[7]."'"));

                                           $rname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM reporterdata WHERE ID='".$row[3]."'"));


                                          echo '

                                       <li >
                                          <div class="timeline-dots"><i class="ri-pantone-line"></i></div>
                                          <h6 class="float-left mb-1" style="font-weight:bold">'.$row[1].'</h6>';

                                          if($row[13]=='NO')
                                          {
                                            echo' <small class="float-right mt-1">

                                            <button onclick="upload_news('.$row[0].')" style="text-align: center;font-size: 10px;background-color: #000;color: white" type="button" class="btn btn-xs">Upload News</button>
                                          </small>';
                                          }
                                          else
                                          {
                                             echo' <small class="float-right mt-1">

                                            <button onclick="upload_news_block('.$row[0].')" style="text-align: center;font-size: 10px;background-color: orange;color: white" type="button" class="btn btn-xs">Uploaded..</button>
                                          </small>';
                                          }
                                         

                                         echo' <small class="float-right mt-1">

                                            <button data-toggle="modal" data-target="#myModal'.$row[0].'" style="text-align: center;font-size: 12px;background-color: #000080;color: white" type="button" class="btn btn-xs"><i class="fa fa-eye"></i></button>
                                          </small>

                                       
                                          <small class="float-right mt-1">
                                            <a href="news_update.php?id='.$row[0].'">

                                            <button style="text-align: center;font-size: 12px;background-color: green;color: white" type="button" class="btn btn-xs"><i class="fa fa-pencil-square-o"></i></button></a>
                                          </small>

                                          <small class="float-right mt-1">
                                            <a href="news-delete.php?id='.$row[0].'">
                                            <button style="text-align: center;font-size: 12px;background-color: red;color: white" type="button" class="btn btn-xs"><i class="fa fa-remove"></i></button>
                                            </a>
                                          </small>

                                         


                                          <small style="font-weight:bold" class="float-right mt-1">'.$row[4].'</small>
                                          &nbsp;&nbsp;



                                          <div class="d-inline-block w-100">
                                             <p>'.$row[2].'</p>
                                             <hr>
                                             <strong>
                                               <span ><b style="color:blue">State: </b>'.$sname1[1].' |</span>
                                               <span><b style="color:blue">District:</b>  '.$dname1[1].' |</span>
                                               <span><b style="color:blue">Taluka:</b>  '.$tname[1].' |</span>
                                               <span><b style="color:blue">Area:</b>  '.$areaname[4].' |</span>
                                               <span><b style="color:blue">Reporter:</b>  '.$rname[2].' |</span>
                                              </strong> 
                                          </div>
                                       </li>


                                       <div  style="" class="modal fade" id="myModal'.$row[0].'" role="dialog">
                                           <div class="modal-dialog">
                                           
                                             <!-- Modal content-->
                                             <div class="modal-content" style="width:800px;">
                                               <div class="modal-header" style="background-color:orange;color:#fff">
                                               <h4>'.$row[1].'</h4>
                                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                               </div>
                                               <div class="modal-body" style="width:800px;">
                                                 <p>
                                                   <center> 
                                                      <img  src='.$row[5].' style="height:200px;width:200px">
                                                    </center>  
                                                 </p>
                                                 <p>
                                                 '.$row[6].'
                                                 </p>
                                               </div>
                                               <div class="modal-footer">
                                                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                               </div>
                                             </div>
                                             
                                           </div>
                                         </div>
                                         <hr style="border:1px solid gray">

                              ';
                           }
                              ?>

                             
                           </ul>
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