<?php
        $con=mysqli_connect("localhost","root","","news_portal")or die("DATABASE PROBLEM");

        $id=$_GET['id'];
    
        if (mysqli_query($con,"DELETE FROM channel_logo WHERE ID='".$id."'")) {
    
            echo "
                <script>
                    alert('LOGO DELETED');
                    window.location.href='channel_logo.php';
                </script>
            ";
            
        }
        else
        {
            echo"
                <script>
                    alert('TRY AGAIN..!');
                    window.location.href='channel_logo.php';
                </script>
    
            ";
        }
?>