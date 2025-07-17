<?php

$con=mysqli_connect("localhost","root","","news_portal")or die("Database Problem...!");

 if (mysqli_query($con ,"UPDATE add_channel SET status='approved' WHERE ID='".$_GET['id']."'"))
 {
 	echo "
        <script>
            alert ('Channel Approved..........!');
           window.location.href='view_channel.php';
        </script>
    ";
 }
 else
 {
 	echo "
        <script>
            alert ('Try Again..........!');
           window.location.href='view_channel.php';
        </script>
    ";
 }
?>