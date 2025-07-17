<?php
$state_id=$_POST['sid'];
$con=mysqli_connect("localhost","root","","news_portal")or die("ERROR..!");
$dist1=mysqli_query($con,"SELECT * FROM district WHERE S_ID='".$state_id."'");
echo '<option value="select District">Select District</option>';
while($dist=mysqli_fetch_row($dist1))
{
	echo '
 	 <option value='.$dist[0].'>'.$dist[1].'</option>

';
}
?>