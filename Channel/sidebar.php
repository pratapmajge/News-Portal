<?php
$con=mysqli_connect("localhost","root","","news_portal")or die("Database Problem...!");

   $oname1=mysqli_query($con,"SELECT * FROM add_channel WHERE ID='".$_SESSION['channel']."'");
   $oname=mysqli_fetch_row($oname1);
?>

 <div class="iq-sidebar">
            <div class="iq-navbar-logo d-flex justify-content-between">
               <a href="index.html" class="header-logo">
               <img src="../admin/<?php echo $oname[11]?>" style="width:70px;height:60px" class="img-fluid rounded" alt="">
            </a>
               <span style="font-size: `18px;"><?php echo $oname[8]?></span>
               
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="ri-menu-line"></i></div>
                     <div class="hover-circle"><i class="ri-close-fill"></i></div>
                  </div>
               </div>
            </div>
            


            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="active">
                        <a href="index.php" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Home</span></a>
                        
                     </li>
                     <li class="active">
                        <a href="area.php" class="iq-waves-effect"><span class="ripple rippleEffect"></span><i class="las la-city iq-arrow-left"></i><span>Area</span></a>
                        
                     </li>

                      <li class="active">
                        <a href="area_details.php" class="iq-waves-effect"><span class="ripple rippleEffect"></span><i class="las la-city iq-arrow-left"></i><span>Area Details</span></a>
                        
                     </li>

                     <li class="active">
                        <a href="reporter-login.php" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="las la-microphone-alt iq-arrow-left"></i><span>Reporter</span></a>
                        
                     </li>

                      <li class="active">
                        <a href="reporter-view.php" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="las la-info-circle iq-arrow-left"></i><span>Reporter Details</span></a>
                        
                     </li>

                     <li class="active">
                        <a href="news-upload.php" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="las la-file-upload iq-arrow-left"></i><span>News Upload</span></a>
                        
                     </li>

                     <li class="active">
                        <a href="news_view2.php" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="lar la-eye iq-arrow-left"></i><span>News View</span></a>
                        
                     </li>

                     <li class="active">
                        <a href="add_upload.php" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="las la-ad iq-arrow-left"></i><span>Add Upload</span></a>
                        
                     </li>


                      <li class="active">
                        <a href="add_view.php" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="las la-ad iq-arrow-left"></i><span>Add Details</span></a>
                        
                     </li>

                     <li class="active">
                        <a href="short_add.php" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="las la-ad iq-arrow-left"></i><span>Short add Upload</span></a>
                        
                     </li>

                      <li class="active">
                        <a href="short_add_view.php" class="iq-waves-effect" ><span class="ripple rippleEffect"></span><i class="las la-ad iq-arrow-left"></i><span>Short Add Details</span></a>
                        
                     </li>
                    

                     <li>
                        <a href="#userinfo6" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-cog iq-arrow-left "></i><span>Web Site Settings</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo6" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                         
                           <li><a href="channel_banner.php"><i class="las la-edit"></i>Channel Banner</a></li>
                           <li><a href="channel_quotation.php"><i class="las la-edit"></i>Channel Quotation</a></li>
                        </ul>
                     </li>
                    
                 
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>