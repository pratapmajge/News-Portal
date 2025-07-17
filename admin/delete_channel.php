<?php
$con=mysqli_connect("localhost","root","","news_portal")or die("Database Problem...!");
?>
<?php
$id=$_GET['id'];

if(mysqli_query($con,"DELETE FROM add_channel WHERE ID='".$id."'"))
{
	echo "
		<script>
			alert('RECORD DELETED');
			window.location.href='view_channel.php';
		</script>
	";
}
else
{
	echo "
		<script>
			alert('TRY AGAIN..!');
			window.location.href='view_channel.php';
		</script>
	";
}
?>