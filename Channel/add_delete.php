<?php
        $con=mysqli_connect("localhost","root","","news_portal")or die("DATABASE PROBLEM");

        $id=$_GET['id'];
    
        if (mysqli_query($con,"DELETE FROM add_upload WHERE ID='".$id."'")) {
    
            echo "
                <script>
                    alert('Advertise DELETED.....');
                    window.location.href='add_view.php';
                </script>
            ";
            
        }
        else
        {
            echo"
                <script>
                    alert('TRY AGAIN..!');
                    window.location.href='add_view.php';
                </script>
    
            ";
        }
?>