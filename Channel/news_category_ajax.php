<ul class="iq-timeline">
 <?php 
session_start();

$con=mysqli_connect("localhost","root","","news_portal")or die("Database Problem...!!");

 ?>
                              <hr style="border:1px solid gray">
                                  <?php
                                    $a=mysqli_query($con,"SELECT * FROM uploadnews WHERE CID='".$_SESSION['channel']."' && CATEGORY='".$_POST['cid']."'");
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
                                          <h6 class="float-left mb-1" style="font-weight:bold">'.$row[1].'</h6>


                                          <small class="float-right mt-1">

                                            <button data-toggle="modal" data-target="#myModal'.$row[0].'" style="text-align: center;font-size: 12px;background-color: #000080;color: white" type="button" class="btn btn-xs"><i class="fa fa-eye"></i></button>
                                          </small>

                                       
                                          <small class="float-right mt-1">

                                            <button style="text-align: center;font-size: 12px;background-color: green;color: white" type="button" class="btn btn-xs"><i class="fa fa-pencil-square-o"></i></button>
                                          </small>

                                          <small class="float-right mt-1">

                                            <button style="text-align: center;font-size: 12px;background-color: red;color: white" type="button" class="btn btn-xs"><i class="fa fa-remove"></i></button>
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