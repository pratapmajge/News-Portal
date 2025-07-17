<?php
session_start();

  $con=mysqli_connect("localhost","root","","news_portal")or die("ERROR...!");

$did=$_POST['did'];



echo'
 <div class="iq-card" style="border-top: orange 3px solid;border-radius: 10px">
                     <div class="iq-card-body">                    
                          <div class="table-responsive">
                             <table class="table">
                                <thead>
                                  <tr style="background-color: #000080;color: #fff">
                                    <th scope="col">Sr. No</th>
                                    <th scope="col">State</th>
                                    <th scope="col">District</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>                          
                                  </tr>
                                </thead>
                                <tbody>   ';                                
                                   $sr=1;

                                   $a=mysqli_query($con,"SELECT * FROM area WHERE CID='".$_SESSION['channel']."' &&  CITY='".$did."'");
                                   while($row=mysqli_fetch_row($a))
                                      {
                                        $sname1=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM state WHERE S_ID='".$row[1]."'"));

                                        $dname1=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM district WHERE D_ID='".$row[2]."'"));

                                        $tname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM taluka WHERE T_ID='".$row[3]."'"));

                                         echo '
                                            <tr>
                                               <td>'.$sr.'</td>
                                               <td>'.$sname1[1].'</td>
                                               <td>'.$dname1[1].'</td>
                                               <td>'.$tname[1].'</td>
                                               <td>'.$row[4].'</td>

                                               <td>
                                                  <button style="text-align: center;font-size: 20px;background-color: green;color: white" type="button" class="btn btn-lg"><i class="fa fa-pencil-square-o"></i></button>
                                               </td>
                                               <td>
                                               <a href="area-delete.php?id='.$row[0].'">
                                                  <button style="text-align: center;font-size: 20px" type="button" class="btn btn-danger btn-lg"><i class="fa fa-trash"></i></button>
                                               </a>   
                                               </td>
                                               
                                             </tr>
                                         ';
                                         $sr++;
                                      }
                                echo'</tbody>
                             </table>
                          </div>
                     </div>     
                  </div>
';

?>