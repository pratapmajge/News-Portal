<?php
        $con=mysqli_connect("localhost","root","","news_portal")or die("DATABASE PROBLEM");

        $id=$_GET['id'];
    
        if (mysqli_query($con,"DELETE FROM channel_quotation WHERE ID='".$id."'")) {
    
            echo "
                <script>
                    alert('QUOTATION  DELETED');
                    window.location.href='channel_quotation.php';
                </script>
            ";
            
        }
        else
        {
            echo"
                <script>
                    alert('TRY AGAIN....!');
                    window.location.href='channel_quotation.php';
                </script>
    
            ";
        }
?>