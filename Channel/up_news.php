<?php
 $con=mysqli_connect("localhost","root","","news_portal")or die("ERROR..!");
 $id=$_GET['id'];
  if (mysqli_query($con ,"UPDATE uploadnews SET STATUS='YES' WHERE ID='".$id."'")) {
            echo "
                <script>
                    alert ('NEWS UPLOADED SUCCESSFULLY..........!');
                   window.location.href='news_view2.php';
                </script>
            ";
            # code...
        }
        else
        {
            echo "
                <script>
                    alert ('TRY AGAIN..........!');
                    window.location.href='news_view2.php';
                </script>
            ";
        }
?>