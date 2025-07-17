<?php
        $con=mysqli_connect("localhost","root","","news_portal")or die("DATABASE PROBLEM");

        $id=$_GET['id'];
    
        if (mysqli_query($con,"DELETE FROM reporterdata WHERE ID='".$id."'")) {
    
            echo "
                <script>
                    alert('REPORTER DELETED');
                    window.location.href='reporter-view.php';
                </script>
            ";
            
        }
        else
        {
            echo"
                <script>
                    alert('TRY AGAIN....!');
                    window.location.href='reporter-view.php';
                </script>
    
            ";
        }
?>