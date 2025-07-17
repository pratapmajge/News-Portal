  <?php
 $dt=$_POST['dt'];
 $cha_id=$_POST['cha_id'];
$con=mysqli_connect("localhost","root","","news_portal")or die("Database Problem...!!");

                        $a=mysqli_query($con,"SELECT * FROM uploadnews WHERE CID='".$cha_id."' && DATE2='".$dt."' && STATUS='YES' ORDER BY DATE2 DESC");
                         while($row=mysqli_fetch_row($a))
                           {
                            $originalDate = $row[4];
                            $newDate = date("d-m-Y", strtotime($originalDate));

                             $rname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM reporterdata WHERE ID='".$row[3]."'"));

                            echo '
                               
                                <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s" >
                                    <div  class="blog-item bg-light rounded overflow-hidden">
                                        <div class="blog-img position-relative overflow-hidden">
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
