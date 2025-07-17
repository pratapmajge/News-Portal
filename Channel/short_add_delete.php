<?php
        $con=mysqli_connect("localhost","root","","news_portal")or die("DATABASE PROBLEM");

        $id=$_GET['id'];
    
        if (mysqli_query($con,"DELETE FROM short_add WHERE ID='".$id."'")) {
    
            echo "
                <script>
                    alert('RECORD DELETED');
                    window.location.href='short_add_view.php';
                </script>
            ";
            
        }
        else
        {
            echo"
                <script>
                    alert('try agaim..!');
                    window.location.href='short_add_view.php';
                </script>
    
            ";
        }
?>