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
if(isset($_POST['delbook']))
{
	$did=$_POST['delid'];
	$bnamee=$_POST['bname'];
	$aseat=$_POST['actseats'];

	$sname=0;
	$qu="SELECT * FROM `bustiming` WHERE `name`='$bnamee' ";
	$l=mysqli_query($connection,$qu);
	while($rop=mysqli_fetch_assoc($l))
	{
		$sname=$rop['seats'];
	}

	$upbus = $sname + $aseat;

	/*echo $did."<br>";
	echo $bnamee."<br>";
	echo $aseat."<br>";
	echo $sname." db seat<br>";
	echo $upbus."to set<br>";*/

	$queryy="UPDATE `bustiming` SET `seats` = '$upbus' WHERE `name`='$bnamee' ";

	$query="DELETE FROM `bookings` WHERE `id`='$did'";

	mysqli_query($connection,$queryy);

	if(mysqli_query($connection,$query))
	{echo'<script type="text/javascript"> alert("Booking Successfully Deleted") 
		window.location = "../user/my_bookings.php";
		</script>';
	}

	//header("location: ../user/my_bookings.php");

}
?>