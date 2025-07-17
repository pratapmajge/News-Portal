<?php
$tid=$_POST['tid'];
$con=mysqli_connect("localhost","root","","news_portal")or die("ERROR..!");

$taluka1=mysqli_query($con,"SELECT * FROM area WHERE CITY='".$tid."'");
echo '<option >Select Taluka</option>';
while($tal=mysqli_fetch_row($taluka1))
{
	echo '
 	 <option value='.$tal[0].'>'.$tal[4].'</option>
';
}

?>