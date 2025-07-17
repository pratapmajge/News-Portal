<?php

$con=mysqli_connect("localhost","root","","news_portal")or die("Database Problem...!");

 if (mysqli_query($con ,"UPDATE add_channel SET status='disapproved' WHERE ID='".$_GET['id']."'"))
 {
 	echo "
        <script>
            alert ('Channel Blocked..........!');
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