<?php
        $con=mysqli_connect("localhost","root","","news_portal")or die("DATABASE PROBLEM");

        $id=$_GET['id'];
    
        if (mysqli_query($con,"DELETE FROM area WHERE ID='".$id."'")) {
    
            echo "
                <script>
                    alert('AREA DELETED');
                    window.location.href='area_details.php';
                </script>
            ";
            
        }
        else
        {
            echo"
                <script>
                    alert('TRY AGAIN....!');
                    window.location.href='area_details.php';
                </script>
    
            ";
        }
?>