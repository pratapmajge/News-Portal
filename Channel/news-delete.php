<?php
        $con=mysqli_connect("localhost","root","","news_portal")or die("DATABASE PROBLEM");

        $id=$_GET['id'];
    
        if (mysqli_query($con,"DELETE FROM uploadnews WHERE ID='".$id."'")) {
    
            echo "
                <script>
                    alert('NEWS DELETED SUCCESSFULLY');
                    window.location.href='news_view2.php';
                </script>
            ";
            
        }
        else
        {
            echo"
                <script>
                    alert('TRY AGAIN....!');
                    window.location.href='news_view2.php';
                </script>
    
            ";
        }
?>