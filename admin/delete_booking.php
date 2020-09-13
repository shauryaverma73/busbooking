<?php
$connection=mysqli_connect("localhost","root","","bus");
if(isset($_POST['delbook']))
{
	$did=$_POST['delid'];

	$query="DELETE FROM `bookings` WHERE `id`='$did'";

	mysqli_query($connection,$query);

	header("location: ../admin/bookings.php");

}
?>