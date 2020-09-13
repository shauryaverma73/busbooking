<?php
session_start();
?>
<?php
if(!isset($_SESSION['id']))
{
	header("Location: ../index.php");
}
?>
<?php
$connection=mysqli_connect("localhost","root","","bus");
if(isset($_POST['bookticket']))
{
	$bid = $_POST['id'];
	$aseat = $_POST['actseat'];
	$busn = $_POST['bname'];
	$bussrc = $_POST['source'];
	$busdstn = $_POST['destination'];
	$bustime = $_POST['time'];
	$seat = $_POST['seats'];
	$fare=$_POST['fare'];
	
	$ffare = $fare * $seat;
	
	$dseat=$aseat-$seat;
	
	$query="INSERT INTO `bookings`(`id`, `booked_by`, `booked_by_email`, `bus_name`, `source`, `destination`, `time`, `seats`, `fare`) VALUES (NULL,'{$_SESSION['username']}','{$_SESSION['email']}','$busn','$bussrc','$busdstn','$bustime','$seat','$ffare')";
	
	$queryy="UPDATE `bustiming` SET `seats`='$dseat' WHERE `id`='$bid'";
	
	mysqli_query($connection,$queryy);

	if(mysqli_query($connection,$query))
	{
		echo'<script type="text/javascript"> alert("Successfully Booked") 
		window.location = "../user/my_bookings.php";
		</script>';
		//header("location: ../user/my_bookings.php");
	}
	else
	{
		echo'<script type="text/javascript"> alert("Successfully Booked") 
		window.location = "../user/main.php";
		</script>';
		//header("location: ../user/main.php");
	}

}
?>