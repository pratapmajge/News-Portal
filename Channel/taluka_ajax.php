<?php
$dist_id=$_POST['did'];
$con=mysqli_connect("localhost","root","","news_portal")or die("ERROR..!");

$taluka1=mysqli_query($con,"SELECT * FROM taluka WHERE D_ID='".$dist_id."'");
echo '<option >Select Taluka</option>';
while($tal=mysqli_fetch_row($taluka1))
{
	echo '
 	 <option value='.$tal[0].'>'.$tal[1].'</option>
';
}

?>